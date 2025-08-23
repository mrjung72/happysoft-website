# HappySoft 웹사이트

개발자를 위한 실용적인 솔루션들을 소개하는 전문 웹사이트입니다.

## 🎯 개요

이 웹사이트는 SQL 데이터 마이그레이션, 엑셀 생성, 유틸리티 도구 등 개발자를 위한 검증된 솔루션들을 소개합니다.

### 주요 솔루션
- **SQL2DB v2.3.0** - 실시간 모니터링 데이터 마이그레이션 도구
- **SQL2Excel v1.2.1** - 멀티시트 엑셀 생성 도구
- **Client Util App** - 클라이언트 유틸리티 도구
- **Vue3 Web App** - 모던 프론트엔드 애플리케이션
- **Express Server** - Node.js 백엔드 서버

## 🛠️ 기술 스택

### Frontend
- **HTML5** - 구조화된 마크업
- **CSS3** - 모던 스타일링 및 반응형 디자인
- **JavaScript (ES6+)** - 인터랙티브 기능
- **Google Fonts** - 웹폰트 (Inter, JetBrains Mono)

### Backend  
- **PHP 7.4+** - 서버사이드 로직
- **MySQL 5.7+** - 문의 데이터 저장
- **이메일 시스템** - 연락처 폼 처리
- **세션 관리** - 사용자 상태 관리

### 특징
- **반응형 디자인** - 모바일부터 데스크톱까지
- **접근성** - 스크린 리더 및 키보드 내비게이션 지원
- **SEO 최적화** - 메타 태그 및 구조화된 데이터
- **성능 최적화** - 이미지 압축, CSS/JS 최적화

## 🚀 설치 및 설정

### 1. 서버 요구사항
- **웹서버**: Apache 2.4+ 또는 Nginx 1.18+
- **PHP**: 7.4 이상 (8.0+ 권장)
- **MySQL**: 5.7 이상 (8.0+ 권장)
- **확장 모듈**: `php-mail`, `php-session`, `php-json`, `php-pdo`, `php-mysql`

### 2. 파일 업로드
```bash
# 웹사이트 파일을 웹서버 루트 디렉토리에 업로드
cp -r solutions-website/* /var/www/html/
```

### 3. 권한 설정
```bash
# 로그 디렉토리 쓰기 권한 설정
chmod 755 logs/
chown www-data:www-data logs/

# PHP 파일 실행 권한
chmod 644 *.php
chmod 644 includes/*.php
```

### 4. 데이터베이스 설정
`config/database.php` 파일에서 MySQL 연결 정보 수정:

```php
define('DB_HOST', 'localhost');           // MySQL 호스트
define('DB_USER', 'your_username');       // MySQL 사용자명
define('DB_PASS', 'your_password');       // MySQL 비밀번호
define('DB_NAME', 'happysoft_contacts');  // 데이터베이스명
define('DB_PORT', 3306);                  // MySQL 포트
```

### 5. 데이터베이스 초기화
브라우저에서 `setup-database.php`에 접속하여 데이터베이스 테이블을 생성하고 샘플 데이터를 삽입합니다.

### 6. 이메일 설정
`send-message.php` 파일에서 이메일 설정 수정:

```php
$config = [
    'to_email' => 'your-email@example.com',        // 수신 이메일
    'from_email' => 'noreply@your-domain.com',     // 발신 이메일
    'site_name' => 'HappySoft',                    // 사이트명
    // ... 기타 설정
];
```

### 7. 가상 호스트 설정 (Apache)
```apache
<VirtualHost *:80>
    ServerName your-domain.com
    DocumentRoot /var/www/html
    
    <Directory /var/www/html>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

### 8. SSL 인증서 설정 (권장)
```bash
# Let's Encrypt 인증서 설치
certbot --apache -d your-domain.com
```

## 📁 프로젝트 구조

```
solutions-website/
├── index.php                 # 메인 홈페이지
├── sql2db.php               # SQL2DB 솔루션 페이지
├── sql2excel.php            # SQL2Excel 솔루션 페이지
├── send-message.php          # 연락처 폼 처리 (이메일 + DB 저장)
├── setup-database.php        # 데이터베이스 초기화 스크립트
├── config/
│   └── database.php          # MySQL 연결 설정
├── admin/
│   └── contacts.php          # 문의 관리 페이지
└── logs/                     # 로그 파일 디렉토리
├── includes/
│   ├── header.php           # 공통 헤더
│   └── footer.php           # 공통 푸터
├── assets/
│   ├── css/
│   │   ├── main.css         # 메인 스타일시트
│   │   └── responsive.css   # 반응형 스타일
│   └── js/
│       └── main.js          # 메인 JavaScript
├── logs/                    # 로그 파일 저장
└── docs/                    # 문서 파일 (선택사항)
```

## 🎨 커스터마이징

### 색상 테마 변경
`assets/css/main.css`의 CSS 변수 수정:

```css
:root {
    --primary-color: #2563eb;      /* 기본 파란색 */
    --primary-hover: #1d4ed8;      /* 호버 색상 */
    --accent-color: #f59e0b;       /* 강조 색상 */
    /* ... 기타 색상 변수 */
}
```

### 로고 및 브랜딩
`includes/header.php`에서 브랜드 정보 수정:

```php
<div class="nav-brand">
    <a href="index.php">
        <span class="brand-icon">🔧</span>
        <span class="brand-text">HappySoft</span>
    </a>
</div>
```

### 연락처 정보
`includes/footer.php`에서 연락처 정보 수정:

```php
<div class="contact-info">
    <p class="contact-item">
        <strong>📧 이메일</strong><br>
        <a href="mailto:your-email@example.com">your-email@example.com</a>
    </p>
    <!-- ... 기타 연락처 정보 -->
</div>
```

## 📱 반응형 디자인

웹사이트는 다양한 화면 크기에 최적화되어 있습니다:

- **모바일**: 320px ~ 767px
- **태블릿**: 768px ~ 1023px  
- **데스크톱**: 1024px ~ 1199px
- **대형 화면**: 1200px+

### 브레이크포인트
```css
/* 모바일 */
@media (max-width: 767px) { ... }

/* 태블릿 */
@media (max-width: 991px) { ... }

/* 데스크톱 */
@media (min-width: 1200px) { ... }
```

## 🔧 개발 및 유지보수

### 로컬 개발 환경
```bash
# PHP 내장 서버로 로컬 테스트
cd solutions-website
php -S localhost:8000
```

### 로그 모니터링
```bash
# 연락처 폼 로그 확인
tail -f logs/contact.log

# 데이터베이스 로그 확인
tail -f logs/database.log

# 오류 로그 확인  
tail -f logs/error.log
tail -f logs/database_error.log
```

### 성능 최적화
- **이미지 압축**: WebP 형식 사용 권장
- **CSS/JS 압축**: 프로덕션에서는 minify 버전 사용
- **캐싱**: Apache/Nginx에서 정적 파일 캐싱 설정
- **CDN**: 글로벌 사용자를 위한 CDN 설정 고려

## 🔒 보안 설정

### 기본 보안 조치
- **폼 검증**: XSS, CSRF 방지
- **Rate Limiting**: 스팸 방지
- **입력 검증**: SQL 인젝션 방지 (PDO prepared statements 사용)
- **세션 보안**: 안전한 세션 관리
- **데이터베이스 보안**: PDO를 통한 안전한 데이터베이스 연결

### .htaccess 보안 설정
```apache
# logs 디렉토리 접근 차단
<Directory "logs">
    Require all denied
</Directory>

# PHP 정보 노출 방지
<Files "*.php~">
    Require all denied
</Files>

# 보안 헤더
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
```

## 📊 문의 관리 시스템

### 새로운 기능
- **MySQL 데이터베이스 연동**: 문의 내용을 데이터베이스에 저장
- **관리자 페이지**: 문의 목록 조회, 검색, 삭제 기능
- **통계 대시보드**: 전체 문의 수, 오늘 문의 수, 솔루션별 통계
- **페이지네이션**: 대량의 문의 데이터 효율적 관리
- **검색 기능**: 이름, 이메일, 메시지로 문의 검색

### 관리자 페이지 접근
- **URL**: `your-domain.com/admin/contacts.php`
- **기본 비밀번호**: `admin123` (실제 운영 시 변경 필수)
- **기능**:
  - 문의 목록 조회 및 검색
  - 문의 상세 내용 확인
  - 문의 삭제
  - 통계 대시보드
  - 페이지네이션

### 데이터베이스 구조
```sql
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(200),
    solution VARCHAR(50),
    message TEXT NOT NULL,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

## 📊 분석 및 모니터링

### Google Analytics (선택사항)
`includes/header.php`에 추가:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### 웹사이트 상태 확인
- **연락처 폼**: 정기적으로 테스트 메시지 발송
- **데이터베이스**: MySQL 연결 상태 및 문의 데이터 확인
- **이메일 전송**: SMTP 로그 확인
- **성능**: 페이지 로딩 속도 모니터링
- **관리자 페이지**: `/admin/contacts.php`에서 문의 현황 확인

## 🚀 배포 전 체크리스트

- [ ] MySQL 데이터베이스 설정 및 연결 테스트
- [ ] 데이터베이스 초기화 (`setup-database.php` 실행)
- [ ] 관리자 비밀번호 변경 (`admin/contacts.php`)
- [ ] 이메일 설정 확인
- [ ] 연락처 정보 업데이트
- [ ] GitHub 링크 실제 저장소로 변경
- [ ] 도메인명 및 브랜딩 정보 수정
- [ ] SSL 인증서 설치
- [ ] 로그 디렉토리 권한 설정
- [ ] 연락처 폼 테스트 (이메일 + DB 저장)
- [ ] 관리자 페이지 접근 테스트
- [ ] 모바일 반응형 테스트
- [ ] 브라우저 호환성 테스트
- [ ] `setup-database.php` 파일 삭제 (보안)

## 📞 지원

- **이메일**: happysoftinfodesk@gmail.com
- **웹사이트**: happysoft.kr

---

**버전**: v1.0.0  
**최종 업데이트**: 2025-01-15  
**라이선스**: MIT License
