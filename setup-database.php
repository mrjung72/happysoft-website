<?php
/**
 * Database Setup Script
 * MySQL 데이터베이스 초기화 스크립트
 */

// 데이터베이스 설정 포함
require_once 'config/database.php';

echo "<h1>🔧 HappySoft 문의 시스템 데이터베이스 설정</h1>\n";

try {
    // 데이터베이스 연결 테스트
    echo "<h2>1. 데이터베이스 연결 테스트</h2>\n";
    $pdo = getDatabaseConnection();
    echo "✅ MySQL 연결 성공<br>\n";
    echo "서버 버전: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "<br>\n";
    echo "클라이언트 버전: " . $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION) . "<br><br>\n";
    
    // 데이터베이스 초기화
    echo "<h2>2. 테이블 생성</h2>\n";
    $result = initializeDatabase();
    
    if ($result) {
        echo "✅ contacts 테이블 생성/확인 완료<br><br>\n";
    } else {
        echo "❌ 테이블 생성 실패<br><br>\n";
        exit(1);
    }
    
    // 테이블 구조 확인
    echo "<h2>3. 테이블 구조 확인</h2>\n";
    $stmt = $pdo->query("DESCRIBE contacts");
    $columns = $stmt->fetchAll();
    
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>\n";
    echo "<tr><th>필드</th><th>타입</th><th>NULL</th><th>키</th><th>기본값</th><th>추가</th></tr>\n";
    
    foreach ($columns as $column) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($column['Field']) . "</td>";
        echo "<td>" . htmlspecialchars($column['Type']) . "</td>";
        echo "<td>" . htmlspecialchars($column['Null']) . "</td>";
        echo "<td>" . htmlspecialchars($column['Key']) . "</td>";
        echo "<td>" . htmlspecialchars($column['Default']) . "</td>";
        echo "<td>" . htmlspecialchars($column['Extra']) . "</td>";
        echo "</tr>\n";
    }
    echo "</table><br>\n";
    
    // 샘플 데이터 삽입 (테스트용)
    echo "<h2>4. 샘플 데이터 삽입</h2>\n";
    
    $sampleData = [
        [
            'name' => '김테스트',
            'email' => 'test1@example.com',
            'company' => '테스트 회사',
            'solution' => 'sql2db',
            'message' => 'SQL2DB 솔루션에 대한 문의입니다. 데이터 마이그레이션 기능이 궁금합니다.',
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ],
        [
            'name' => '이문의',
            'email' => 'test2@example.com',
            'company' => '문의 기업',
            'solution' => 'sql2excel',
            'message' => 'SQL2Excel 솔루션의 엑셀 생성 기능에 대해 문의드립니다.',
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36'
        ],
        [
            'name' => '박고객',
            'email' => 'test3@example.com',
            'company' => '',
            'solution' => 'all',
            'message' => '전체 솔루션에 대한 견적을 문의드립니다. 각 솔루션의 특징과 가격을 알려주세요.',
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
        ]
    ];
    
    $insertCount = 0;
    foreach ($sampleData as $data) {
        try {
            $contactId = saveContactToDatabase($data);
            echo "✅ 샘플 데이터 삽입 완료 (ID: {$contactId}) - {$data['name']}<br>\n";
            $insertCount++;
        } catch (Exception $e) {
            echo "❌ 샘플 데이터 삽입 실패 - {$data['name']}: " . $e->getMessage() . "<br>\n";
        }
    }
    
    echo "<br>총 {$insertCount}개의 샘플 데이터가 삽입되었습니다.<br><br>\n";
    
    // 통계 확인
    echo "<h2>5. 통계 확인</h2>\n";
    $stats = getContactStats();
    
    echo "📊 전체 문의 수: " . $stats['total'] . "<br>\n";
    echo "📊 오늘 문의 수: " . $stats['today'] . "<br>\n";
    echo "📊 솔루션별 문의 수: " . count($stats['bySolution']) . "<br>\n";
    echo "📊 월별 통계: " . count($stats['byMonth']) . "개월<br><br>\n";
    
    // 솔루션별 통계 상세
    if (!empty($stats['bySolution'])) {
        echo "<h3>솔루션별 문의 현황</h3>\n";
        echo "<table border='1' style='border-collapse: collapse; width: 100%;'>\n";
        echo "<tr><th>솔루션</th><th>문의 수</th></tr>\n";
        
        foreach ($stats['bySolution'] as $solution) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($solution['solution']) . "</td>";
            echo "<td>" . $solution['count'] . "</td>";
            echo "</tr>\n";
        }
        echo "</table><br>\n";
    }
    
    // 설정 완료 메시지
    echo "<h2>🎉 설정 완료!</h2>\n";
    echo "<div style='background: #d1fae5; padding: 20px; border-radius: 8px; border: 1px solid #a7f3d0;'>\n";
    echo "<h3>✅ 데이터베이스 설정이 완료되었습니다!</h3>\n";
    echo "<p><strong>다음 단계:</strong></p>\n";
    echo "<ul>\n";
    echo "<li>웹사이트의 문의하기 폼에서 테스트 문의를 보내보세요</li>\n";
    echo "<li><a href='admin/contacts.php' target='_blank'>관리자 페이지</a>에서 문의 목록을 확인하세요</li>\n";
    echo "<li>관리자 비밀번호: <code>admin123</code> (실제 운영 시 변경 필요)</li>\n";
    echo "</ul>\n";
    echo "</div>\n";
    
    // 보안 경고
    echo "<h2>⚠️ 보안 주의사항</h2>\n";
    echo "<div style='background: #fef3c7; padding: 20px; border-radius: 8px; border: 1px solid #f59e0b;'>\n";
    echo "<h3>실제 운영 전 필수 설정:</h3>\n";
    echo "<ul>\n";
    echo "<li><strong>데이터베이스 비밀번호 변경:</strong> config/database.php 파일에서 DB_PASS 설정</li>\n";
    echo "<li><strong>관리자 비밀번호 변경:</strong> admin/contacts.php 파일에서 \$admin_password 설정</li>\n";
    echo "<li><strong>이 파일 삭제:</strong> setup-database.php 파일을 서버에서 삭제하세요</li>\n";
    echo "<li><strong>로그 파일 보안:</strong> logs 디렉토리의 접근 권한 설정</li>\n";
    echo "</ul>\n";
    echo "</div>\n";
    
} catch (Exception $e) {
    echo "<h2>❌ 오류 발생</h2>\n";
    echo "<div style='background: #fee2e2; padding: 20px; border-radius: 8px; border: 1px solid #fecaca;'>\n";
    echo "<h3>데이터베이스 설정 중 오류가 발생했습니다:</h3>\n";
    echo "<p><strong>오류 메시지:</strong> " . htmlspecialchars($e->getMessage()) . "</p>\n";
    echo "<h3>확인 사항:</h3>\n";
    echo "<ul>\n";
    echo "<li>MySQL 서버가 실행 중인지 확인</li>\n";
    echo "<li>config/database.php 파일의 연결 정보가 올바른지 확인</li>\n";
    echo "<li>데이터베이스 'happysoft_contacts'가 존재하는지 확인</li>\n";
    echo "<li>사용자 권한이 충분한지 확인</li>\n";
    echo "</ul>\n";
    echo "</div>\n";
}
?>

<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    line-height: 1.6;
    color: #333;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background: #f8f9fa;
}

h1 {
    color: #2563eb;
    text-align: center;
    margin-bottom: 30px;
}

h2 {
    color: #374151;
    border-bottom: 2px solid #e5e7eb;
    padding-bottom: 10px;
    margin-top: 30px;
}

h3 {
    color: #4b5563;
    margin-top: 20px;
}

table {
    margin: 15px 0;
}

th {
    background: #f3f4f6;
    padding: 10px;
    text-align: left;
}

td {
    padding: 8px 10px;
    border-bottom: 1px solid #e5e7eb;
}

code {
    background: #f3f4f6;
    padding: 2px 6px;
    border-radius: 4px;
    font-family: 'Courier New', monospace;
}

a {
    color: #2563eb;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
