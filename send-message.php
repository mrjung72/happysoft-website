<?php
/**
 * Contact Form Handler
 * Processes contact form submissions and sends emails
 */

// Start session and include configuration
session_start();

// Configuration
$config = [
    'to_email' => 'sql2excel.nodejs@gmail.com',
    'from_email' => 'noreply@happysoft.com',
    'site_name' => 'HappySoft',
    'admin_email' => 'admin@happysoft.com',
    'max_file_size' => 5 * 1024 * 1024, // 5MB
    'allowed_extensions' => ['txt', 'pdf', 'doc', 'docx'],
    'rate_limit' => [
        'attempts' => 3,
        'time_window' => 3600 // 1 hour
    ]
];

// Response helper function
function sendJsonResponse($success, $message, $data = []) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit();
}

// Rate limiting
function checkRateLimit($ip, $config) {
    $session_key = 'contact_attempts_' . md5($ip);
    $attempts = $_SESSION[$session_key] ?? [];
    $current_time = time();
    
    // Remove old attempts outside time window
    $attempts = array_filter($attempts, function($timestamp) use ($current_time, $config) {
        return ($current_time - $timestamp) < $config['rate_limit']['time_window'];
    });
    
    if (count($attempts) >= $config['rate_limit']['attempts']) {
        return false;
    }
    
    // Add current attempt
    $attempts[] = $current_time;
    $_SESSION[$session_key] = $attempts;
    
    return true;
}

// Input validation and sanitization
function validateAndSanitizeInput($data) {
    $errors = [];
    $sanitized = [];
    
    // Required fields
    $required_fields = ['name', 'email', 'message'];
    foreach ($required_fields as $field) {
        if (empty($data[$field])) {
            $errors[] = ucfirst($field) . " 필드는 필수입니다.";
        }
    }
    
    // Name validation
    if (!empty($data['name'])) {
        $sanitized['name'] = trim(strip_tags($data['name']));
        if (strlen($sanitized['name']) < 2 || strlen($sanitized['name']) > 100) {
            $errors[] = "이름은 2-100자 사이여야 합니다.";
        }
        if (!preg_match('/^[가-힣a-zA-Z\s]+$/u', $sanitized['name'])) {
            $errors[] = "이름에는 한글, 영문, 공백만 사용할 수 있습니다.";
        }
    }
    
    // Email validation
    if (!empty($data['email'])) {
        $sanitized['email'] = trim(strtolower($data['email']));
        if (!filter_var($sanitized['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "올바른 이메일 주소를 입력해주세요.";
        }
        if (strlen($sanitized['email']) > 255) {
            $errors[] = "이메일 주소가 너무 깁니다.";
        }
    }
    
    // Company validation (optional)
    if (!empty($data['company'])) {
        $sanitized['company'] = trim(strip_tags($data['company']));
        if (strlen($sanitized['company']) > 200) {
            $errors[] = "회사명이 너무 깁니다.";
        }
    } else {
        $sanitized['company'] = '';
    }
    
    // Solution validation (optional)
    $allowed_solutions = [
        'sql2db', 'sql2excel', 'client-util', 'vue-app', 
        'express-server', 'all', 'custom', ''
    ];
    $sanitized['solution'] = in_array($data['solution'] ?? '', $allowed_solutions) 
        ? $data['solution'] 
        : '';
    
    // Message validation
    if (!empty($data['message'])) {
        $sanitized['message'] = trim(strip_tags($data['message']));
        if (strlen($sanitized['message']) < 10) {
            $errors[] = "메시지는 최소 10자 이상이어야 합니다.";
        }
        if (strlen($sanitized['message']) > 2000) {
            $errors[] = "메시지는 2000자를 초과할 수 없습니다.";
        }
    }
    
    // Honeypot check (anti-spam)
    if (!empty($data['website'])) {
        $errors[] = "스팸으로 감지되었습니다.";
    }
    
    return ['errors' => $errors, 'data' => $sanitized];
}

// Email template
function getEmailTemplate($data, $config) {
    $solution_names = [
        'sql2db' => 'SQL2DB - 데이터 마이그레이션',
        'sql2excel' => 'SQL2Excel - 엑셀 생성 도구',
        'client-util' => 'Client Util App',
        'vue-app' => 'Vue3 Web App',
        'express-server' => 'Express Server',
        'all' => '전체 솔루션',
        'custom' => '커스텀 개발'
    ];
    
    $solution_text = $solution_names[$data['solution']] ?? '선택하지 않음';
    
    $html = "
    <!DOCTYPE html>
    <html lang='ko'>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; border-radius: 8px 8px 0 0; }
            .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
            .field { margin-bottom: 20px; }
            .label { font-weight: 600; color: #2563eb; margin-bottom: 5px; display: block; }
            .value { background: white; padding: 15px; border-radius: 6px; border-left: 4px solid #2563eb; }
            .footer { text-align: center; margin-top: 30px; color: #666; font-size: 14px; }
            .logo { font-size: 24px; font-weight: 700; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <div class='logo'>🔧 HappySoft</div>
                <h2 style='margin: 10px 0 0 0;'>새로운 문의가 도착했습니다</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>이름</span>
                    <div class='value'>" . htmlspecialchars($data['name']) . "</div>
                </div>
                
                <div class='field'>
                    <span class='label'>이메일</span>
                    <div class='value'>" . htmlspecialchars($data['email']) . "</div>
                </div>
                
                <div class='field'>
                    <span class='label'>회사명</span>
                    <div class='value'>" . (empty($data['company']) ? '미입력' : htmlspecialchars($data['company'])) . "</div>
                </div>
                
                <div class='field'>
                    <span class='label'>관심 솔루션</span>
                    <div class='value'>" . htmlspecialchars($solution_text) . "</div>
                </div>
                
                <div class='field'>
                    <span class='label'>메시지</span>
                    <div class='value'>" . nl2br(htmlspecialchars($data['message'])) . "</div>
                </div>
                
                <div class='field'>
                    <span class='label'>전송 시간</span>
                    <div class='value'>" . date('Y-m-d H:i:s (T)') . "</div>
                </div>
                
                <div class='field'>
                    <span class='label'>IP 주소</span>
                    <div class='value'>" . $_SERVER['REMOTE_ADDR'] . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>이 메시지는 {$config['site_name']} 웹사이트의 연락처 폼에서 자동으로 전송되었습니다.</p>
                <p>답변이 필요한 경우 위의 이메일 주소로 직접 회신해주세요.</p>
            </div>
        </div>
    </body>
    </html>";
    
    return $html;
}

// Auto-reply email template
function getAutoReplyTemplate($data, $config) {
    return "
    <!DOCTYPE html>
    <html lang='ko'>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; border-radius: 8px 8px 0 0; text-align: center; }
            .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
            .logo { font-size: 24px; font-weight: 700; margin-bottom: 10px; }
            .highlight { background: #e7f3ff; padding: 20px; border-radius: 6px; border-left: 4px solid #2563eb; margin: 20px 0; }
            .footer { text-align: center; margin-top: 30px; color: #666; font-size: 14px; }
            .solutions { display: grid; gap: 15px; margin: 20px 0; }
            .solution { background: white; padding: 15px; border-radius: 6px; border-left: 4px solid #10b981; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <div class='logo'>🔧 HappySoft</div>
                <h2>문의해주셔서 감사합니다!</h2>
            </div>
            <div class='content'>
                <p><strong>" . htmlspecialchars($data['name']) . "</strong>님, 안녕하세요!</p>
                
                <p>HappySoft에 문의해주셔서 감사합니다. 귀하의 메시지를 잘 받았으며, 영업일 기준 24시간 내에 상세한 답변을 드리겠습니다.</p>
                
                <div class='highlight'>
                    <h3>💡 빠른 정보 확인</h3>
                    <p>답변을 기다리시는 동안, 다음 리소스들을 활용해보세요:</p>
                    <ul>
                        <li><strong>📚 사용자 매뉴얼</strong>: 각 솔루션의 상세한 사용법</li>
                        <li><strong>📋 변경 이력</strong>: 최신 업데이트 정보</li>
                        <li><strong>💾 다운로드</strong>: 최신 버전 다운로드</li>
                        <li><strong>📝 예제</strong>: 실제 사용 사례</li>
                    </ul>
                </div>
                
                <h3>🚀 주요 솔루션</h3>
                <div class='solutions'>
                    <div class='solution'>
                        <strong>🔄 SQL2DB v2.3.0</strong><br>
                        실시간 모니터링과 고급 변수 시스템을 갖춘 데이터 마이그레이션 도구
                    </div>
                    <div class='solution'>
                        <strong>📊 SQL2Excel v1.2.1</strong><br>
                        멀티 시트, 스타일링, 자동 목차 기능을 제공하는 엑셀 생성 도구
                    </div>
                </div>
                
                <div class='highlight'>
                    <h3>📞 추가 연락처</h3>
                    <p>
                        <strong>이메일</strong>: sql2excel.nodejs@gmail.com<br>
                        <strong>웹사이트</strong>: happysoft.com<br>
                        <strong>업무 시간</strong>: 평일 09:00 - 18:00 (KST)
                    </p>
                </div>
                
                <p>감사합니다.<br>
                <strong>HappySoft 팀</strong></p>
            </div>
            <div class='footer'>
                <p>이 메시지는 자동으로 전송되었습니다. 직접 회신하지 마세요.</p>
                <p>추가 문의사항이 있으시면 웹사이트를 통해 새로운 메시지를 보내주세요.</p>
            </div>
        </div>
    </body>
    </html>";
}

// Main processing
try {
    // Check request method
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        sendJsonResponse(false, '잘못된 요청 방법입니다.');
    }
    
    // Check rate limiting
    $client_ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    if (!checkRateLimit($client_ip, $config)) {
        sendJsonResponse(false, '너무 많은 요청을 보내셨습니다. 1시간 후에 다시 시도해주세요.');
    }
    
    // Get and validate input
    $input = $_POST;
    $validation = validateAndSanitizeInput($input);
    
    if (!empty($validation['errors'])) {
        sendJsonResponse(false, '입력 오류가 있습니다.', ['errors' => $validation['errors']]);
    }
    
    $data = $validation['data'];
    
    // Prepare email
    $to = $config['to_email'];
    $subject = "[{$config['site_name']}] 새로운 문의: " . $data['name'];
    $message = getEmailTemplate($data, $config);
    
    // Email headers
    $headers = [
        'From' => $config['from_email'],
        'Reply-To' => $data['email'],
        'X-Mailer' => 'PHP/' . phpversion(),
        'MIME-Version' => '1.0',
        'Content-Type' => 'text/html; charset=UTF-8',
        'X-Priority' => '3',
        'X-MSMail-Priority' => 'Normal'
    ];
    
    $header_string = '';
    foreach ($headers as $key => $value) {
        $header_string .= "$key: $value\r\n";
    }
    
    // Send main email
    $mail_sent = mail($to, $subject, $message, $header_string);
    
    if ($mail_sent) {
        // Send auto-reply
        $auto_reply_subject = "[{$config['site_name']}] 문의 접수 확인";
        $auto_reply_message = getAutoReplyTemplate($data, $config);
        $auto_reply_headers = str_replace('Reply-To: ' . $data['email'], 'Reply-To: ' . $config['to_email'], $header_string);
        
        mail($data['email'], $auto_reply_subject, $auto_reply_message, $auto_reply_headers);
        
        // Log successful submission
        $log_entry = date('Y-m-d H:i:s') . " | SUCCESS | " . $client_ip . " | " . $data['email'] . " | " . $data['name'] . "\n";
        file_put_contents('logs/contact.log', $log_entry, FILE_APPEND | LOCK_EX);
        
        sendJsonResponse(true, '메시지가 성공적으로 전송되었습니다. 곧 답변을 받으실 수 있습니다.');
    } else {
        throw new Exception('이메일 전송 실패');
    }
    
} catch (Exception $e) {
    // Log error
    $error_log = date('Y-m-d H:i:s') . " | ERROR | " . $client_ip . " | " . $e->getMessage() . "\n";
    file_put_contents('logs/error.log', $error_log, FILE_APPEND | LOCK_EX);
    
    sendJsonResponse(false, '메시지 전송 중 오류가 발생했습니다. 잠시 후 다시 시도해주세요.');
}
?>
