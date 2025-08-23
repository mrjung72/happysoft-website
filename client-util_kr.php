<?php
$pageTitle = "Client Util App - 클라이언트 유틸리티 도구";
$currentPage = "client-util";
include 'includes/header_kr.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div>
                <div class="solution-badge">🔧 클라이언트 유틸리티 도구</div>
                <h1>Client Util App</h1>
                <div class="version">v1.0.0</div>
                <p class="solution-tagline">
                    개발자와 시스템 관리자를 위한 필수 유틸리티 도구<br>
                    데이터베이스 연결, 서버 상태 확인, SQL 실행까지 한 번에
                </p>
                
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">3+</div>
                        <div class="stat-label">핵심 기능</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">안정성</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">CLI</div>
                        <div class="stat-label">인터페이스</div>
                    </div>
                </div>
                
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">다운로드</a>
                    <a href="#documentation" class="btn btn-secondary">문서 보기</a>
                    <a href="https://github.com/happysoft2018/client-util" target="_blank" class="btn btn-github">
                        <span class="github-icon">📦</span>
                        GitHub
                    </a>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-header">
                    <div class="terminal-controls">
                        <div class="control red"></div>
                        <div class="control yellow"></div>
                        <div class="control green"></div>
                    </div>
                    <div class="terminal-title">Client Util App</div>
                </div>
                <div class="terminal-content">
                    <div class="terminal-line">$ client-util --help</div>
                    <div class="terminal-line">Client Util App v1.0.0</div>
                    <div class="terminal-line">Usage: client-util [command] [options]</div>
                    <div class="terminal-line">Commands: db-test, telnet, sql-exec</div>
                    <div class="terminal-line">$ client-util db-test --server localhost</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Showcase -->
<section class="features-showcase">
    <div class="container">
        <h2 class="section-title">주요 기능</h2>
        <p class="section-subtitle">개발 및 운영에 필수적인 유틸리티 기능들을 제공합니다</p>
        
        <div class="features-grid">
            <!-- Database Connection Test -->
            <div class="feature-card featured">
                <div class="feature-icon">🔗</div>
                <h3>MSSQL 연결 테스트</h3>
                <p>데이터베이스 서버 연결 상태를 빠르게 확인하고 진단할 수 있습니다.</p>
                <ul class="feature-details">
                    <li>연결 문자열 검증</li>
                    <li>인증 정보 확인</li>
                    <li>네트워크 지연 측정</li>
                    <li>상세한 오류 메시지</li>
                </ul>
            </div>
            
            <!-- Telnet Check -->
            <div class="feature-card">
                <div class="feature-icon">🌐</div>
                <h3>서버 텔넷 체크</h3>
                <p>원격 서버의 포트 연결 상태를 확인하여 네트워크 문제를 진단합니다.</p>
                <ul class="feature-details">
                    <li>포트 연결성 테스트</li>
                    <li>타임아웃 설정</li>
                    <li>다중 포트 동시 체크</li>
                    <li>연결 로그 기록</li>
                </ul>
            </div>
            
            <!-- SQL Execution -->
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>SQL 실행 도구</h3>
                <p>명령줄에서 SQL 쿼리를 직접 실행하고 결과를 확인할 수 있습니다.</p>
                <ul class="feature-details">
                    <li>쿼리 실행 및 결과 출력</li>
                    <li>파일에서 SQL 실행</li>
                    <li>결과 포맷팅 옵션</li>
                    <li>실행 시간 측정</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section class="tech-specs">
    <div class="container">
        <h2 class="section-title">기술 사양</h2>
        <p class="section-subtitle">Client Util App의 상세한 기술 정보</p>
        
        <div class="specs-grid">
            <div class="spec-category">
                <h3>개발 환경</h3>
                <div class="spec-item">
                    <span class="spec-label">언어</span>
                    <span class="spec-value">Node.js</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">런타임</span>
                    <span class="spec-value">v16.0+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">패키지 매니저</span>
                    <span class="spec-value">npm/yarn</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">CLI 프레임워크</span>
                    <span class="spec-value">Commander.js</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>데이터베이스</h3>
                <div class="spec-item">
                    <span class="spec-label">지원 DB</span>
                    <span class="spec-value">MSSQL</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">드라이버</span>
                    <span class="spec-value">mssql</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">연결 풀</span>
                    <span class="spec-value">지원</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">암호화</span>
                    <span class="spec-value">SSL/TLS</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>네트워크</h3>
                <div class="spec-item">
                    <span class="spec-label">프로토콜</span>
                    <span class="spec-value">TCP/IP</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">타임아웃</span>
                    <span class="spec-value">설정 가능</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">재시도</span>
                    <span class="spec-value">자동</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">로깅</span>
                    <span class="spec-value">파일/콘솔</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>성능</h3>
                <div class="spec-item">
                    <span class="spec-label">메모리 사용량</span>
                    <span class="spec-value">~50MB</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">응답 시간</span>
                    <span class="spec-value">&lt;1초</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">동시 연결</span>
                    <span class="spec-value">10개</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">플랫폼</span>
                    <span class="spec-value">Cross-platform</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Code Examples -->
<section class="code-examples">
    <div class="container">
        <h2 class="section-title">사용 예제</h2>
        <p class="section-subtitle">Client Util App의 다양한 사용 방법을 확인해보세요</p>
        
        <div class="example-tabs">
            <div class="tab-nav">
                <button class="tab-btn active" data-tab="db-test">DB 연결 테스트</button>
                <button class="tab-btn" data-tab="telnet">텔넷 체크</button>
                <button class="tab-btn" data-tab="sql-exec">SQL 실행</button>
            </div>
            
            <div class="tab-content active" id="db-test">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">CLI</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code># 기본 연결 테스트
client-util db-test --server localhost --database master

# 상세 옵션과 함께
client-util db-test \
  --server 192.168.1.100 \
  --port 1433 \
  --database MyDatabase \
  --username sa \
  --timeout 30

# 연결 문자열 사용
client-util db-test \
  --connection-string "Server=localhost;Database=master;Trusted_Connection=true;"</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="telnet">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">CLI</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code># 단일 포트 체크
client-util telnet --host localhost --port 1433

# 다중 포트 체크
client-util telnet \
  --host 192.168.1.100 \
  --ports 80,443,1433,3306 \
  --timeout 5000

# 결과를 파일로 저장
client-util telnet \
  --host example.com \
  --port 80 \
  --output telnet-result.log</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="sql-exec">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">CLI</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code># 직접 쿼리 실행
client-util sql-exec \
  --server localhost \
  --database MyDatabase \
  --query "SELECT TOP 10 * FROM Users"

# 파일에서 쿼리 실행
client-util sql-exec \
  --server localhost \
  --database MyDatabase \
  --file queries.sql

# 결과를 CSV로 출력
client-util sql-exec \
  --server localhost \
  --database MyDatabase \
  --query "SELECT * FROM Products" \
  --format csv \
  --output products.csv</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section">
    <div class="container">
        <h2 class="section-title">다운로드</h2>
        <p class="section-subtitle">Client Util App의 최신 버전을 다운로드하세요</p>
        
        <div class="download-options">
            <div class="download-card featured">
                <div class="download-header">
                    <h3>Client Util App v1.0.0</h3>
                    <span class="download-badge">최신</span>
                </div>
                
                <div class="version-info">
                    <p class="version-date">릴리즈 날짜: 2024-01-15</p>
                    <p class="version-size">파일 크기: 2.5MB</p>
                </div>
                
                <ul class="version-features">
                    <li>MSSQL 연결 테스트 기능</li>
                    <li>서버 텔넷 체크 기능</li>
                    <li>SQL 실행 도구</li>
                    <li>CLI 인터페이스</li>
                    <li>상세한 로깅 시스템</li>
                    <li>크로스 플랫폼 지원</li>
                </ul>
                
                <div class="download-actions">
                    <a href="#" class="btn btn-primary">📦 GitHub 릴리즈</a>
                    <a href="#" class="btn btn-secondary">📖 사용자 매뉴얼</a>
                </div>
            </div>
            
            <div class="download-card">
                <div class="download-header">
                    <h3>시스템 요구사항</h3>
                </div>
                
                <div class="system-requirements">
                    <div class="requirements-grid">
                        <div class="requirement-item">
                            <strong>운영체제</strong>
                            <span>Windows 10+, macOS 10.15+, Linux</span>
                        </div>
                        <div class="requirement-item">
                            <strong>Node.js</strong>
                            <span>v16.0.0 이상</span>
                        </div>
                        <div class="requirement-item">
                            <strong>메모리</strong>
                            <span>최소 100MB</span>
                        </div>
                        <div class="requirement-item">
                            <strong>네트워크</strong>
                            <span>인터넷 연결</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documentation Section -->
<section id="documentation" class="documentation-section">
    <div class="container">
        <h2 class="section-title">문서</h2>
        <p class="section-subtitle">Client Util App 사용을 위한 상세한 문서</p>
        
        <div class="docs-grid">
            <div class="doc-card">
                <div class="doc-icon">📖</div>
                <h3>시작하기</h3>
                <p>Client Util App 설치 및 기본 사용법을 알아보세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🔧</div>
                <h3>설정 가이드</h3>
                <p>환경 설정과 고급 옵션에 대한 상세한 가이드입니다.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">📝</div>
                <h3>API 참조</h3>
                <p>모든 명령어와 옵션에 대한 완전한 참조 문서입니다.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">💡</div>
                <h3>예제 모음</h3>
                <p>실제 사용 사례와 예제 코드를 확인해보세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">문의하기</h2>
        <p class="section-subtitle">Client Util App에 대한 문의사항이 있으시면 언제든 연락주세요</p>
        
        <div class="contact-content">
            <div class="contact-info">
                <h3>연락처 정보</h3>
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <strong>이메일</strong><br>
                        happysoftinfodesk@gmail.com
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🌐</div>
                    <div>
                        <strong>웹사이트</strong><br>
                        happysoft.kr
                    </div>
                </div>
            </div>
            
            <form class="contact-form" action="send-message.php" method="POST">
                <input type="hidden" name="solution" value="client-util">
                <div class="form-group">
                    <label for="name">이름 *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">이메일 *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="company">회사명</label>
                    <input type="text" id="company" name="company">
                </div>
                <div class="form-group">
                    <label for="message">문의내용 *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">문의하기</button>
            </form>
        </div>
    </div>
</section>

<script>
// Tab functionality
document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        
        // Add active class to clicked tab
        button.classList.add('active');
        
        // Show corresponding content
        const tabId = button.getAttribute('data-tab');
        document.getElementById(tabId).classList.add('active');
    });
});

// Copy button functionality
document.querySelectorAll('.copy-btn').forEach(button => {
    button.addEventListener('click', () => {
        const codeBlock = button.closest('.code-block');
        const code = codeBlock.querySelector('code').textContent;
        
        navigator.clipboard.writeText(code).then(() => {
            const originalText = button.textContent;
            button.textContent = '복사됨!';
            button.style.background = '#10b981';
            
            setTimeout(() => {
                button.textContent = originalText;
                button.style.background = '';
            }, 2000);
        });
    });
});
</script>

<?php include 'includes/footer_kr.php'; ?> 