<?php
$pageTitle = "SQL2DB - 데이터 마이그레이션 솔루션";
$currentPage = "sql2db";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div class="solution-hero-text">
                <div class="solution-badge">🔄 데이터 마이그레이션</div>
                <h1>SQL2DB <span class="version">v2.3.0</span></h1>
                <p class="solution-tagline">실시간 모니터링과 고급 변수 시스템을 갖춘 전문적인 SQL 데이터 마이그레이션 도구</p>
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">마이그레이션 기능</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">실시간</div>
                        <div class="stat-label">진행률 모니터링</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5개</div>
                        <div class="stat-label">디스플레이 모드</div>
                    </div>
                </div>
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">다운로드</a>
                    <a href="#documentation" class="btn btn-secondary">문서 보기</a>
                    <a href="https://github.com/yourusername/sql2db-nodejs" class="btn btn-github" target="_blank">
                        <span class="github-icon">📦</span> GitHub
                    </a>
                </div>
            </div>
            <div class="solution-hero-demo">
                <div class="terminal-window">
                    <div class="terminal-header">
                        <div class="terminal-controls">
                            <span class="control red"></span>
                            <span class="control yellow"></span>
                            <span class="control green"></span>
                        </div>
                        <div class="terminal-title">SQL2DB 실시간 모니터링</div>
                    </div>
                    <div class="terminal-content">
                        <div class="terminal-line">$ node src/migrate-cli.js migrate config.xml</div>
                        <div class="terminal-line">🔄 SQL2DB 마이그레이션 시작...</div>
                        <div class="terminal-line">📊 진행률: [████████████████████] 100% (1,250/1,250)</div>
                        <div class="terminal-line">⏱️  소요시간: 00:02:34 | 평균속도: 8.1 rows/sec</div>
                        <div class="terminal-line">✅ 마이그레이션 완료! 총 1,250건 처리</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="features-showcase">
    <div class="container">
        <h2 class="section-title">주요 기능</h2>
        <div class="features-grid">
            <div class="feature-card featured">
                <div class="feature-icon">📊</div>
                <h3>실시간 인터랙티브 모니터링</h3>
                <p>키보드 인터랙션을 통한 5가지 디스플레이 모드와 실시간 차트로 마이그레이션 진행 상황을 직관적으로 확인</p>
                <ul class="feature-details">
                    <li>Simple, Detailed, Error Log, Statistics, Log Stream 모드</li>
                    <li>실시간 텍스트 기반 차트 및 그래프</li>
                    <li>스마트 알림 및 임계값 설정</li>
                    <li>키보드 단축키를 통한 빠른 모드 전환</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>SELECT * 자동 확장</h3>
                <p>전/후처리 스크립트에서 SELECT * 구문을 실제 컬럼명으로 자동 확장하여 명시적이고 안전한 쿼리 실행</p>
                <ul class="feature-details">
                    <li>테이블 별칭(alias) 지원</li>
                    <li>JOIN, WHERE, GROUP BY 절 고려</li>
                    <li>환경변수를 통한 기능 제어</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>전/후처리 컬럼 오버라이드</h3>
                <p>컬럼 오버라이드 설정을 INSERT 및 UPDATE 문에 자동으로 적용하여 데이터 변환 및 보강을 자동화</p>
                <ul class="feature-details">
                    <li>INSERT VALUES 및 INSERT SELECT 구문 지원</li>
                    <li>UPDATE SET 절 자동 추가/수정</li>
                    <li>SQL 함수 및 표현식 지원</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📝</div>
                <h3>고급 SQL 파싱 및 주석 처리</h3>
                <p>SQL 리터럴 내 주석과 실제 주석을 구분하는 강력한 파싱 엔진으로 복잡한 SQL 스크립트도 안전하게 처리</p>
                <ul class="feature-details">
                    <li>블록(/* */) 및 라인(--) 주석 지원</li>
                    <li>문자열 리터럴 내 주석 보호</li>
                    <li>이스케이프 문자 처리</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>향상된 변수 시스템</h3>
                <p>동적 변수, 정적 변수, 타임스탬프 함수, 환경 변수를 우선순위에 따라 체계적으로 처리</p>
                <ul class="feature-details">
                    <li>변수 우선순위: 동적 > 정적 > 타임스탬프 > 환경변수</li>
                    <li>중첩 변수 참조 지원</li>
                    <li>디버깅을 위한 상세 로깅</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔔</div>
                <h3>스마트 알림 시스템</h3>
                <p>오류, 느린 쿼리, 정체된 진행 상황을 자동으로 감지하고 Windows Toast 알림으로 즉시 통보</p>
                <ul class="feature-details">
                    <li>임계값 기반 자동 알림</li>
                    <li>알림 히스토리 관리</li>
                    <li>카테고리별 오류 분류</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specs -->
<section class="tech-specs">
    <div class="container">
        <h2 class="section-title">기술 사양</h2>
        <div class="specs-grid">
            <div class="spec-category">
                <h3>플랫폼</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">런타임</span>
                        <span class="spec-value">Node.js 16.0+</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">운영체제</span>
                        <span class="spec-value">Windows, Linux, macOS</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">아키텍처</span>
                        <span class="spec-value">x64, ARM64</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>데이터베이스</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">지원 DB</span>
                        <span class="spec-value">SQL Server 2012+</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">인증</span>
                        <span class="spec-value">SQL Auth, Windows Auth</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">암호화</span>
                        <span class="spec-value">TLS/SSL 지원</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>성능</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">처리 속도</span>
                        <span class="spec-value">최대 10,000+ rows/sec</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">메모리 사용량</span>
                        <span class="spec-value">최적화된 스트리밍</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">배치 크기</span>
                        <span class="spec-value">설정 가능</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>설정</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">설정 형식</span>
                        <span class="spec-value">XML, JSON</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">로깅</span>
                        <span class="spec-value">다단계 로그 레벨</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">디버깅</span>
                        <span class="spec-value">환경변수 기반</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Code Examples -->
<section class="code-examples">
    <div class="container">
        <h2 class="section-title">사용 예제</h2>
        
        <div class="example-tabs">
            <div class="tab-nav">
                <button class="tab-btn active" data-tab="basic">기본 사용법</button>
                <button class="tab-btn" data-tab="advanced">고급 기능</button>
                <button class="tab-btn" data-tab="monitoring">실시간 모니터링</button>
            </div>
            
            <div class="tab-content active" id="basic">
                <h3>기본 마이그레이션 실행</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code># 기본 마이그레이션 실행
node src/migrate-cli.js migrate config/migration-queries.xml

# 특정 쿼리만 실행
node src/migrate-cli.js migrate config/migration-queries.xml --query-id specific_query

# 드라이 런 (실제 데이터 변경 없이 검증)
node src/migrate-cli.js migrate config/migration-queries.xml --dry-run</code></pre>
                </div>
                
                <h3>XML 설정 예제</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;migration&gt;
  &lt;vars&gt;
    &lt;var name="startDate"&gt;2024-01-01&lt;/var&gt;
    &lt;var name="endDate"&gt;2024-12-31&lt;/var&gt;
  &lt;/vars&gt;
  
  &lt;query id="migrate_orders"&gt;
    &lt;preProcess&gt;
      &lt;![CDATA[
        -- 임시 테이블 생성
        CREATE TABLE #temp_orders (
          OrderID int,
          ProcessedDate datetime DEFAULT GETDATE()
        )
      ]]&gt;
    &lt;/preProcess&gt;
    
    &lt;sourceQuery&gt;
      &lt;![CDATA[
        SELECT * FROM Orders 
        WHERE OrderDate >= '${startDate}' 
          AND OrderDate <= '${endDate}'
      ]]&gt;
    &lt;/sourceQuery&gt;
    
    &lt;destinationQuery&gt;
      &lt;![CDATA[
        INSERT INTO TargetOrders (OrderID, CustomerID, OrderDate, Amount)
        VALUES (?, ?, ?, ?)
      ]]&gt;
    &lt;/destinationQuery&gt;
    
    &lt;postProcess&gt;
      &lt;![CDATA[
        -- 통계 업데이트
        UPDATE MigrationStats SET LastRun = GETDATE()
        WHERE TableName = 'Orders'
      ]]&gt;
    &lt;/postProcess&gt;
  &lt;/query&gt;
&lt;/migration&gt;</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="advanced">
                <h3>고급 변수 시스템</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;migration&gt;
  &lt;dynamicVars&gt;
    &lt;dynamicVar name="maxOrderId"&gt;
      SELECT MAX(OrderID) FROM Orders
    &lt;/dynamicVar&gt;
  &lt;/dynamicVars&gt;
  
  &lt;vars&gt;
    &lt;var name="batchSize"&gt;1000&lt;/var&gt;
    &lt;var name="tableName"&gt;Orders_${CURRENT_DATE}&lt;/var&gt;
  &lt;/vars&gt;
  
  &lt;columnOverrides&gt;
    &lt;override column="CreatedBy" value="'MIGRATION_SYSTEM'" /&gt;
    &lt;override column="MigrationDate" value="GETDATE()" /&gt;
    &lt;override column="Status" value="'MIGRATED'" /&gt;
  &lt;/columnOverrides&gt;
&lt;/migration&gt;</code></pre>
                </div>
                
                <h3>SELECT * 자동 확장</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code># SELECT * 확장 기능 활성화
export PROCESS_SELECT_STAR=true

# 디버깅 모드로 실행
export DEBUG_VARIABLES=true
export DEBUG_COMMENTS=true
export DEBUG_SCRIPTS=true

node src/migrate-cli.js migrate config/migration-queries.xml</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="monitoring">
                <h3>실시간 모니터링 키보드 단축키</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">text</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>실시간 모니터링 키보드 단축키:

q         - 모니터링 종료
p         - Simple 모드 (진행률 표시)
d         - Detailed 모드 (상세 정보)
e         - Error Log 모드 (오류 로그)
s         - Statistics 모드 (통계 정보)
l         - Log Stream 모드 (실시간 로그)
+/-       - 새로고침 간격 조정
r         - 화면 새로고침
c         - 화면 지우기
h         - 도움말 표시
ESC       - 모드 초기화</code></pre>
                </div>
                
                <h3>모니터링 실행</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code># 실시간 모니터링으로 마이그레이션 실행
node src/progress-cli.js monitor config/migration-queries.xml

# 알림 설정과 함께 실행
node src/progress-cli.js monitor config/migration-queries.xml \
  --error-threshold 5 \
  --slow-query-threshold 30 \
  --stuck-threshold 300</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section">
    <div class="container">
        <h2 class="section-title">다운로드</h2>
        <div class="download-options">
            <div class="download-card featured">
                <div class="download-header">
                    <h3>SQL2DB v2.3.0</h3>
                    <div class="download-badge">최신 버전</div>
                </div>
                <div class="download-content">
                    <div class="version-info">
                        <div class="version-date">2025-01-15 릴리즈</div>
                        <div class="version-size">크기: ~15MB</div>
                    </div>
                    <ul class="version-features">
                        <li>실시간 인터랙티브 모니터링</li>
                        <li>SELECT * 자동 확장</li>
                        <li>전/후처리 컬럼 오버라이드</li>
                        <li>고급 SQL 파싱 및 주석 처리</li>
                        <li>향상된 변수 시스템</li>
                    </ul>
                    <div class="download-actions">
                        <a href="downloads/sql2db-v2.3.0.zip" class="btn btn-primary">
                            💾 ZIP 다운로드
                        </a>
                        <a href="https://github.com/yourusername/sql2db-nodejs/releases/tag/v2.3.0" class="btn btn-secondary" target="_blank">
                            📦 GitHub 릴리즈
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="download-card">
                <div class="download-header">
                    <h3>소스 코드</h3>
                </div>
                <div class="download-content">
                    <p>GitHub에서 최신 소스 코드를 확인하고 기여할 수 있습니다.</p>
                    <div class="download-actions">
                        <a href="https://github.com/yourusername/sql2db-nodejs" class="btn btn-github" target="_blank">
                            📦 GitHub 저장소
                        </a>
                        <a href="https://github.com/yourusername/sql2db-nodejs/archive/main.zip" class="btn btn-outline" target="_blank">
                            📋 소스 다운로드
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="system-requirements">
            <h3>시스템 요구사항</h3>
            <div class="requirements-grid">
                <div class="requirement-item">
                    <strong>운영체제</strong>
                    <span>Windows 10+, Linux, macOS</span>
                </div>
                <div class="requirement-item">
                    <strong>Node.js</strong>
                    <span>16.0 이상</span>
                </div>
                <div class="requirement-item">
                    <strong>메모리</strong>
                    <span>최소 2GB RAM</span>
                </div>
                <div class="requirement-item">
                    <strong>저장공간</strong>
                    <span>100MB 이상</span>
                </div>
                <div class="requirement-item">
                    <strong>데이터베이스</strong>
                    <span>SQL Server 2012+</span>
                </div>
                <div class="requirement-item">
                    <strong>네트워크</strong>
                    <span>DB 서버 연결</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documentation -->
<section id="documentation" class="documentation-section">
    <div class="container">
        <h2 class="section-title">문서 및 지원</h2>
        <div class="docs-grid">
            <div class="doc-card">
                <div class="doc-icon">📖</div>
                <h3>사용자 매뉴얼</h3>
                <p>설치부터 고급 기능까지 모든 것을 다루는 완전한 가이드</p>
                <a href="docs/sql2db-user-manual.pdf" class="btn btn-outline">PDF 다운로드</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">📋</div>
                <h3>변경 이력</h3>
                <p>모든 버전의 새로운 기능과 개선사항</p>
                <a href="docs/sql2db-changelog.pdf" class="btn btn-outline">변경이력 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🎯</div>
                <h3>빠른 시작</h3>
                <p>5분 만에 첫 번째 마이그레이션 실행하기</p>
                <a href="docs/sql2db-quickstart.pdf" class="btn btn-outline">빠른 시작</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🔧</div>
                <h3>API 참조</h3>
                <p>모든 설정 옵션과 명령어에 대한 상세 참조</p>
                <a href="docs/sql2db-api-reference.pdf" class="btn btn-outline">API 문서</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">💡</div>
                <h3>예제 모음</h3>
                <p>실제 사용 사례와 설정 예제들</p>
                <a href="docs/sql2db-examples.zip" class="btn btn-outline">예제 다운로드</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">❓</div>
                <h3>FAQ</h3>
                <p>자주 묻는 질문과 문제 해결 방법</p>
                <a href="docs/sql2db-faq.pdf" class="btn btn-outline">FAQ 보기</a>
            </div>
        </div>
    </div>
</section>

<style>
/* Solution-specific styles */
.solution-hero {
    padding: 8rem 0 6rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.solution-hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.solution-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.solution-hero h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
}

.version {
    font-size: 1.5rem;
    opacity: 0.8;
    font-weight: 400;
}

.solution-tagline {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.5;
}

.solution-stats {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
}

.solution-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.terminal-window {
    background: #1e1e1e;
    border-radius: 0.5rem;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.terminal-header {
    background: #2d2d2d;
    padding: 1rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.terminal-controls {
    display: flex;
    gap: 0.5rem;
}

.control {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.control.red { background: #ff5f56; }
.control.yellow { background: #ffbd2e; }
.control.green { background: #27ca3f; }

.terminal-title {
    color: #fff;
    font-weight: 500;
}

.terminal-content {
    padding: 1.5rem;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.9rem;
    color: #00ff00;
}

.terminal-line {
    margin-bottom: 0.5rem;
    opacity: 0;
    animation: typewriter 1s ease-in-out forwards;
}

.terminal-line:nth-child(1) { animation-delay: 0.5s; }
.terminal-line:nth-child(2) { animation-delay: 1.5s; }
.terminal-line:nth-child(3) { animation-delay: 2.5s; }
.terminal-line:nth-child(4) { animation-delay: 3.5s; }
.terminal-line:nth-child(5) { animation-delay: 4.5s; }

.features-showcase {
    padding: 5rem 0;
    background: var(--bg-secondary);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.feature-card {
    background: var(--bg-card);
    border-radius: 1rem;
    padding: 2rem;
    border: 1px solid var(--border-color);
    transition: var(--transition);
}

.feature-card.featured {
    border: 2px solid var(--primary-color);
    box-shadow: var(--shadow-lg);
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.feature-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.feature-details {
    list-style: none;
    padding: 0;
    margin-top: 1rem;
}

.feature-details li {
    padding: 0.25rem 0;
    color: var(--text-secondary);
    position: relative;
    padding-left: 1.5rem;
}

.feature-details li::before {
    content: '▸';
    position: absolute;
    left: 0;
    color: var(--primary-color);
}

.tech-specs {
    padding: 5rem 0;
    background: var(--bg-primary);
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.spec-category {
    background: var(--bg-card);
    border-radius: 1rem;
    padding: 2rem;
    border: 1px solid var(--border-color);
}

.spec-category h3 {
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    color: var(--text-primary);
    text-align: center;
}

.spec-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
}

.spec-item:last-child {
    border-bottom: none;
}

.spec-label {
    font-weight: 500;
    color: var(--text-secondary);
}

.spec-value {
    font-weight: 600;
    color: var(--text-primary);
}

.code-examples {
    padding: 5rem 0;
    background: var(--bg-secondary);
}

.example-tabs {
    margin-top: 3rem;
}

.tab-nav {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--border-color);
}

.tab-btn {
    padding: 1rem 2rem;
    border: none;
    background: transparent;
    color: var(--text-secondary);
    font-weight: 500;
    cursor: pointer;
    border-bottom: 2px solid transparent;
    transition: var(--transition);
}

.tab-btn.active {
    color: var(--primary-color);
    border-bottom-color: var(--primary-color);
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}

.code-block {
    background: #1e1e1e;
    border-radius: 0.5rem;
    overflow: hidden;
    margin-bottom: 2rem;
}

.code-header {
    background: #2d2d2d;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.code-lang {
    color: #fff;
    font-weight: 500;
}

.copy-btn {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    cursor: pointer;
    font-size: 0.875rem;
}

.code-block pre {
    margin: 0;
    padding: 1.5rem;
    overflow-x: auto;
}

.code-block code {
    color: #f8f8f2;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.9rem;
    line-height: 1.5;
}

.download-section {
    padding: 5rem 0;
    background: var(--bg-primary);
}

.download-options {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    margin-top: 3rem;
}

.download-card {
    background: var(--bg-card);
    border-radius: 1rem;
    padding: 2rem;
    border: 1px solid var(--border-color);
}

.download-card.featured {
    border: 2px solid var(--primary-color);
    box-shadow: var(--shadow-lg);
}

.download-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.download-badge {
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.8rem;
    font-weight: 600;
}

.version-info {
    margin-bottom: 1rem;
}

.version-date,
.version-size {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.version-features {
    list-style: none;
    padding: 0;
    margin-bottom: 2rem;
}

.version-features li {
    padding: 0.25rem 0;
    color: var(--text-secondary);
    position: relative;
    padding-left: 1.5rem;
}

.version-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--success-color);
    font-weight: bold;
}

.download-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.system-requirements {
    margin-top: 4rem;
    background: var(--bg-secondary);
    padding: 2rem;
    border-radius: 1rem;
}

.requirements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-top: 1.5rem;
}

.requirement-item {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.requirement-item strong {
    color: var(--text-primary);
    font-weight: 600;
}

.requirement-item span {
    color: var(--text-secondary);
}

.documentation-section {
    padding: 5rem 0;
    background: var(--bg-secondary);
}

.docs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.doc-card {
    background: var(--bg-card);
    border-radius: 1rem;
    padding: 2rem;
    border: 1px solid var(--border-color);
    text-align: center;
    transition: var(--transition);
}

.doc-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.doc-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.doc-card h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.doc-card p {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .solution-hero-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .solution-hero h1 {
        font-size: 2.5rem;
    }
    
    .solution-stats {
        justify-content: center;
    }
    
    .download-options {
        grid-template-columns: 1fr;
    }
    
    .tab-nav {
        flex-wrap: wrap;
    }
    
    .tab-btn {
        padding: 0.75rem 1rem;
        font-size: 0.9rem;
    }
}
</style>

<script>
// Tab functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked button and corresponding content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});

// Copy code functionality
function copyCode(btn) {
    const codeBlock = btn.closest('.code-block').querySelector('code');
    const text = codeBlock.textContent;
    
    navigator.clipboard.writeText(text).then(function() {
        btn.textContent = '복사됨!';
        setTimeout(function() {
            btn.textContent = '복사';
        }, 2000);
    });
}
</script>

<?php include 'includes/footer.php'; ?>
