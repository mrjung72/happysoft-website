<?php
/**
 * Database Configuration
 * MySQL 연결 설정
 */

// MySQL 데이터베이스 설정
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // 실제 비밀번호로 변경하세요
define('DB_NAME', 'happysoft_contacts');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8mb4');

// PDO 연결 옵션
define('DB_OPTIONS', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
]);

/**
 * MySQL 데이터베이스 연결 함수
 */
function getDatabaseConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS, DB_OPTIONS);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        throw new Exception("데이터베이스 연결에 실패했습니다.");
    }
}

/**
 * 데이터베이스 테이블 초기화
 */
function initializeDatabase() {
    try {
        $pdo = getDatabaseConnection();
        
        // contacts 테이블 생성
        $createTableSQL = "
            CREATE TABLE IF NOT EXISTS contacts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(255) NOT NULL,
                company VARCHAR(200),
                solution VARCHAR(50),
                message TEXT NOT NULL,
                ip_address VARCHAR(45),
                user_agent TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                INDEX idx_email (email),
                INDEX idx_created_at (created_at),
                INDEX idx_solution (solution)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ";
        
        $pdo->exec($createTableSQL);
        return true;
        
    } catch (Exception $e) {
        error_log("Database initialization failed: " . $e->getMessage());
        return false;
    }
}

/**
 * 문의 데이터를 데이터베이스에 저장
 */
function saveContactToDatabase($data) {
    try {
        $pdo = getDatabaseConnection();
        
        $sql = "
            INSERT INTO contacts (name, email, company, solution, message, ip_address, user_agent)
            VALUES (:name, :email, :company, :solution, :message, :ip_address, :user_agent)
        ";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':company' => $data['company'],
            ':solution' => $data['solution'],
            ':message' => $data['message'],
            ':ip_address' => $data['ip_address'],
            ':user_agent' => $data['user_agent']
        ]);
        
        return $pdo->lastInsertId();
        
    } catch (Exception $e) {
        error_log("Failed to save contact to database: " . $e->getMessage());
        throw new Exception("데이터베이스 저장에 실패했습니다.");
    }
}

/**
 * 문의 목록 조회 (관리자용)
 */
function getContacts($page = 1, $limit = 20, $search = '') {
    try {
        $pdo = getDatabaseConnection();
        
        $offset = ($page - 1) * $limit;
        
        // 검색 조건
        $whereClause = '';
        $params = [];
        
        if (!empty($search)) {
            $whereClause = 'WHERE name LIKE :search OR email LIKE :search OR message LIKE :search';
            $params[':search'] = '%' . $search . '%';
        }
        
        // 전체 개수 조회
        $countSQL = "SELECT COUNT(*) as total FROM contacts " . $whereClause;
        $countStmt = $pdo->prepare($countSQL);
        $countStmt->execute($params);
        $total = $countStmt->fetch()['total'];
        
        // 문의 목록 조회
        $listSQL = "
            SELECT id, name, email, company, solution, message, ip_address, created_at
            FROM contacts {$whereClause}
            ORDER BY created_at DESC
            LIMIT :limit OFFSET :offset
        ";
        
        $listStmt = $pdo->prepare($listSQL);
        $listStmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $listStmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        
        foreach ($params as $key => $value) {
            $listStmt->bindValue($key, $value);
        }
        
        $listStmt->execute();
        $contacts = $listStmt->fetchAll();
        
        return [
            'contacts' => $contacts,
            'pagination' => [
                'page' => $page,
                'limit' => $limit,
                'total' => $total,
                'totalPages' => ceil($total / $limit)
            ]
        ];
        
    } catch (Exception $e) {
        error_log("Failed to get contacts: " . $e->getMessage());
        throw new Exception("문의 목록 조회에 실패했습니다.");
    }
}

/**
 * 통계 데이터 조회
 */
function getContactStats() {
    try {
        $pdo = getDatabaseConnection();
        
        // 전체 문의 수
        $totalStmt = $pdo->query("SELECT COUNT(*) as total FROM contacts");
        $total = $totalStmt->fetch()['total'];
        
        // 오늘 문의 수
        $todayStmt = $pdo->query("SELECT COUNT(*) as today FROM contacts WHERE DATE(created_at) = CURDATE()");
        $today = $todayStmt->fetch()['today'];
        
        // 솔루션별 문의 수
        $solutionStmt = $pdo->query("
            SELECT solution, COUNT(*) as count 
            FROM contacts 
            WHERE solution IS NOT NULL AND solution != ''
            GROUP BY solution 
            ORDER BY count DESC
        ");
        $bySolution = $solutionStmt->fetchAll();
        
        // 월별 문의 수 (최근 6개월)
        $monthlyStmt = $pdo->query("
            SELECT 
                DATE_FORMAT(created_at, '%Y-%m') as month,
                COUNT(*) as count
            FROM contacts 
            WHERE created_at >= DATE_SUB(NOW(), INTERVAL 6 MONTH)
            GROUP BY DATE_FORMAT(created_at, '%Y-%m')
            ORDER BY month DESC
        ");
        $byMonth = $monthlyStmt->fetchAll();
        
        return [
            'total' => $total,
            'today' => $today,
            'bySolution' => $bySolution,
            'byMonth' => $byMonth
        ];
        
    } catch (Exception $e) {
        error_log("Failed to get contact stats: " . $e->getMessage());
        throw new Exception("통계 조회에 실패했습니다.");
    }
}
?>
