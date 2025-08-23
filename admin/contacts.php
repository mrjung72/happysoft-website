<?php
/**
 * Admin Contact Management
 * 문의 목록 조회 및 관리 페이지
 */

session_start();
require_once '../config/database.php';

// 간단한 인증 (실제 운영에서는 더 강력한 인증 시스템 사용)
$admin_password = 'admin123'; // 실제 운영에서는 환경변수나 설정 파일에서 관리
$is_authenticated = false;

if (isset($_POST['password']) && $_POST['password'] === $admin_password) {
    $_SESSION['admin_authenticated'] = true;
    $is_authenticated = true;
} elseif (isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true) {
    $is_authenticated = true;
}

// 로그아웃 처리
if (isset($_GET['logout'])) {
    unset($_SESSION['admin_authenticated']);
    header('Location: contacts.php');
    exit();
}

// 페이지네이션 및 검색 파라미터
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$limit = isset($_GET['limit']) ? max(1, min(50, intval($_GET['limit']))) : 20;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// 문의 삭제 처리
if ($is_authenticated && isset($_POST['delete_id'])) {
    try {
        $pdo = getDatabaseConnection();
        $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
        $stmt->execute([$_POST['delete_id']]);
        
        if ($stmt->rowCount() > 0) {
            $success_message = "문의가 삭제되었습니다.";
        } else {
            $error_message = "문의를 찾을 수 없습니다.";
        }
    } catch (Exception $e) {
        $error_message = "삭제 중 오류가 발생했습니다: " . $e->getMessage();
    }
}

// 데이터 조회
$contacts_data = null;
$stats = null;

if ($is_authenticated) {
    try {
        $contacts_data = getContacts($page, $limit, $search);
        $stats = getContactStats();
    } catch (Exception $e) {
        $error_message = "데이터 조회 중 오류가 발생했습니다: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문의 관리 - HappySoft Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        
        .login-form {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 400px;
            margin: 50px auto;
        }
        
        .login-form input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        
        .btn {
            background: #2563eb;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn:hover {
            background: #1d4ed8;
        }
        
        .btn-danger {
            background: #dc2626;
        }
        
        .btn-danger:hover {
            background: #b91c1c;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #2563eb;
        }
        
        .search-form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .search-form input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }
        
        .contacts-table {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .contacts-table table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .contacts-table th,
        .contacts-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .contacts-table th {
            background: #f8f9fa;
            font-weight: 600;
        }
        
        .contacts-table tr:hover {
            background: #f8f9fa;
        }
        
        .message-preview {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            gap: 10px;
        }
        
        .pagination a {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: #333;
        }
        
        .pagination a:hover {
            background: #f8f9fa;
        }
        
        .pagination .current {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }
        
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        
        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        
        .logout-link {
            text-align: right;
            margin-bottom: 20px;
        }
        
        .logout-link a {
            color: #666;
            text-decoration: none;
        }
        
        .logout-link a:hover {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>⚙️ HappySoft</h1>
            <p>문의 관리 시스템</p>
        </div>
        
        <?php if (!$is_authenticated): ?>
            <!-- 로그인 폼 -->
            <div class="login-form">
                <h2>관리자 로그인</h2>
                <form method="POST">
                    <input type="password" name="password" placeholder="관리자 비밀번호" required>
                    <button type="submit" class="btn">로그인</button>
                </form>
            </div>
            
        <?php else: ?>
            <!-- 관리자 대시보드 -->
            <div class="logout-link">
                <a href="?logout=1">로그아웃</a>
            </div>
            
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($success_message); ?></div>
            <?php endif; ?>
            
            <?php if (isset($error_message)): ?>
                <div class="alert alert-error"><?php echo htmlspecialchars($error_message); ?></div>
            <?php endif; ?>
            
            <!-- 통계 -->
            <?php if ($stats): ?>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $stats['total']; ?></div>
                    <div>전체 문의</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo $stats['today']; ?></div>
                    <div>오늘 문의</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($stats['bySolution']); ?></div>
                    <div>솔루션별 문의</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($stats['byMonth']); ?></div>
                    <div>월별 통계</div>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- 검색 폼 -->
            <div class="search-form">
                <form method="GET">
                    <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="이름, 이메일, 메시지로 검색...">
                    <button type="submit" class="btn">검색</button>
                    <?php if ($search): ?>
                        <a href="?" class="btn">초기화</a>
                    <?php endif; ?>
                </form>
            </div>
            
            <!-- 문의 목록 -->
            <?php if ($contacts_data): ?>
            <div class="contacts-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>이름</th>
                            <th>이메일</th>
                            <th>회사</th>
                            <th>솔루션</th>
                            <th>메시지</th>
                            <th>IP</th>
                            <th>등록일</th>
                            <th>작업</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts_data['contacts'] as $contact): ?>
                        <tr>
                            <td><?php echo $contact['id']; ?></td>
                            <td><?php echo htmlspecialchars($contact['name']); ?></td>
                            <td><?php echo htmlspecialchars($contact['email']); ?></td>
                            <td><?php echo htmlspecialchars($contact['company'] ?: '-'); ?></td>
                            <td><?php echo htmlspecialchars($contact['solution'] ?: '-'); ?></td>
                            <td class="message-preview" title="<?php echo htmlspecialchars($contact['message']); ?>">
                                <?php echo htmlspecialchars(substr($contact['message'], 0, 50)) . (strlen($contact['message']) > 50 ? '...' : ''); ?>
                            </td>
                            <td><?php echo htmlspecialchars($contact['ip_address']); ?></td>
                            <td><?php echo date('Y-m-d H:i', strtotime($contact['created_at'])); ?></td>
                            <td>
                                <form method="POST" style="display: inline;" onsubmit="return confirm('정말 삭제하시겠습니까?');">
                                    <input type="hidden" name="delete_id" value="<?php echo $contact['id']; ?>">
                                    <button type="submit" class="btn btn-danger">삭제</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- 페이지네이션 -->
            <?php if ($contacts_data['pagination']['totalPages'] > 1): ?>
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>&search=<?php echo urlencode($search); ?>">이전</a>
                <?php endif; ?>
                
                <?php for ($i = max(1, $page - 2); $i <= min($contacts_data['pagination']['totalPages'], $page + 2); $i++): ?>
                    <a href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>&search=<?php echo urlencode($search); ?>" 
                       class="<?php echo $i === $page ? 'current' : ''; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>
                
                <?php if ($page < $contacts_data['pagination']['totalPages']): ?>
                    <a href="?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>&search=<?php echo urlencode($search); ?>">다음</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <div style="text-align: center; margin-top: 20px; color: #666;">
                총 <?php echo $contacts_data['pagination']['total']; ?>개의 문의 중 
                <?php echo ($page - 1) * $limit + 1; ?>-<?php echo min($page * $limit, $contacts_data['pagination']['total']); ?>번째 표시
            </div>
            <?php endif; ?>
            
        <?php endif; ?>
    </div>
</body>
</html>
