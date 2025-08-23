<?php
$pageTitle = "SQL2DB 사용자 매뉴얼 - 상세 가이드";
$currentPage = "sql2db-manual";
include 'includes/header_kr.php';
?>

<!-- Hero Section -->
<section class="manual-hero">
    <div class="container">
        <div class="manual-hero-content">
            <div class="manual-hero-text">
                <div class="manual-badge">📖 사용자 매뉴얼</div>
                <h1>SQL2DB 사용자 매뉴얼</h1>
                <p class="manual-tagline">설치부터 고급 기능까지 SQL2DB의 모든 기능을 상세히 다루는 완전한 가이드</p>
              
            </div>
        </div>
    </div>
</section>

<!-- Table of Contents -->
<section class="manual-toc">
    <div class="container">
        <h2 class="section-title">📖 목차</h2>
        <div class="toc-grid">
            <div class="toc-card">
                <h3>🎯 개요</h3>
                <ul>
                    <li><a href="#overview">SQL2DB 소개</a></li>
                    <li><a href="#features">주요 기능</a></li>
                    <li><a href="#architecture">아키텍처</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🛠️ 설치 및 설정</h3>
                <ul>
                    <li><a href="#requirements">시스템 요구사항</a></li>
                    <li><a href="#installation">설치 방법</a></li>
                    <li><a href="#configuration">데이터베이스 설정</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🚀 기본 사용법</h3>
                <ul>
                    <li><a href="#cli-basics">CLI 명령어</a></li>
                    <li><a href="#xml-format">XML 설정</a></li>
                    <li><a href="#json-format">JSON 설정</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🎨 고급 기능</h3>
                <ul>
                    <li><a href="#dynamic-variables">동적 변수</a></li>
                    <li><a href="#monitoring">실시간 모니터링</a></li>
                    <li><a href="#restart">중단 재시작</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>📋 예제</h3>
                <ul>
                    <li><a href="#basic-examples">기본 예제</a></li>
                    <li><a href="#advanced-examples">고급 예제</a></li>
                    <li><a href="#real-world">실무 예제</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🔧 문제 해결</h3>
                <ul>
                    <li><a href="#troubleshooting">일반 문제</a></li>
                    <li><a href="#faq">자주 묻는 질문</a></li>
                    <li><a href="#support">지원</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="overview" class="manual-section">
    <div class="container">
        <h2 class="section-title">🎯 개요</h2>
        
        <div class="overview-content">
            <div class="overview-text">
                <h3>SQL2DB란?</h3>
                <p>SQL2DB는 Microsoft SQL Server 간의 데이터 이관을 효율적으로 수행하는 Node.js 기반 도구입니다. 대용량 데이터 처리, 실시간 모니터링, 중단 재시작 등 고급 기능을 제공하여 안정적이고 효율적인 데이터 마이그레이션을 지원합니다.</p>
                
                <h3>주요 특징</h3>
                <ul>
                    <li><strong>배치 단위 데이터 이관</strong>: 대용량 데이터 처리 최적화</li>
                    <li><strong>유연한 설정</strong>: XML 또는 JSON 기반 설정</li>
                    <li><strong>컬럼 오버라이드</strong>: 이관 시 특정 컬럼값 변경/추가</li>
                    <li><strong>전처리/후처리</strong>: 이관 전후 SQL 스크립트 실행</li>
                    <li><strong>동적 변수</strong>: 실행 시점 데이터 추출 및 활용</li>
                    <li><strong>실시간 모니터링</strong>: 키보드 인터랙티브 모니터링 및 차트</li>
                    <li><strong>중단 재시작</strong>: 네트워크 오류 등으로 중단된 마이그레이션을 완료된 지점에서 재시작</li>
                </ul>
            </div>
            
            <div class="overview-visual">
                <div class="feature-diagram">
                    <div class="diagram-step">
                        <div class="step-icon">📊</div>
                        <div class="step-text">소스 DB</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">⚙️</div>
                        <div class="step-text">SQL2DB</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">🎯</div>
                        <div class="step-text">타겟 DB</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Installation Section -->
<section id="installation" class="manual-section">
    <div class="container">
        <h2 class="section-title">🛠️ 설치 및 설정</h2>
        
        <div class="installation-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>시스템 요구사항</h3>
                <ul>
                    <li>Node.js 14.0 이상</li>
                    <li>SQL Server 2012 이상 (소스/타겟)</li>
                    <li>적절한 데이터베이스 권한</li>
                    <li>Windows, Linux, macOS 지원</li>
                </ul>
            </div>
            
            <div class="step-card">
                <div class="step-number">2</div>
                <h3>패키지 설치</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code># 저장소 클론
git clone https://github.com/happysoft2018/sql2db.git
cd sql2db

# 의존성 설치
npm install</code></pre>
                </div>
            </div>
            
            <div class="step-card">
                <div class="step-number">3</div>
                <h3>데이터베이스 설정</h3>
                <p>config/dbinfo.json 파일을 생성하고 데이터베이스 연결 정보를 설정합니다:</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>{
  "dbs": {
    "sourceDB": {
      "server": "source-server.com",
      "port": 1433,
      "database": "source_database",
      "user": "username",
      "password": "password",
      "isWritable": false,
      "description": "소스 데이터베이스",
      "options": {
        "encrypt": true,
        "trustServerCertificate": true
      }
    },
    "targetDB": {
      "server": "target-server.com", 
      "port": 1433,
      "database": "target_database",
      "user": "username",
      "password": "password",
      "isWritable": true,
      "description": "타겟 데이터베이스"
    }
  }
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Basic Usage Section -->
<section id="basic-usage" class="manual-section">
    <div class="container">
        <h2 class="section-title">🚀 기본 사용법</h2>
        
        <div class="usage-tabs">
            <div class="tab-nav">
                <button class="tab-btn active" data-tab="cli">CLI 명령어</button>
                <button class="tab-btn" data-tab="xml">XML 설정</button>
                <button class="tab-btn" data-tab="json">JSON 설정</button>
            </div>
            
            <div class="tab-content active" id="cli">
                <h3>CLI 명령어 기본 사용법</h3>
                
                <div class="command-examples">
                    <div class="command-card">
                        <h4>설정 검증</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/migrate-cli.js validate --query ./queries/migration-queries.xml</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>데이터베이스 목록 조회</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/migrate-cli.js list-dbs</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>데이터 이관 실행</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/migrate-cli.js migrate --query ./queries/migration-queries.xml</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>시뮬레이션 실행 (DRY RUN)</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/migrate-cli.js migrate --query ./queries/migration-queries.xml --dry-run</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>중단된 마이그레이션 재시작</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/migrate-cli.js migrate --query ./queries/migration-queries.xml --resume</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="xml">
                <h3>XML 설정 파일 구조</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;migrations&gt;
  &lt;!-- 전역 설정 --&gt;
  &lt;global&gt;
    &lt;batchSize&gt;1000&lt;/batchSize&gt;
    &lt;timeout&gt;30000&lt;/timeout&gt;
    &lt;retryCount&gt;3&lt;/retryCount&gt;
  &lt;/global&gt;
  
  &lt;!-- 동적 변수 정의 --&gt;
  &lt;dynamicVars&gt;
    &lt;dynamicVar name="currentDate"&gt;
      &lt;![CDATA[
        SELECT GETDATE() as CurrentDate
      ]]&gt;
    &lt;/dynamicVar&gt;
  &lt;/dynamicVars&gt;
  
  &lt;!-- 마이그레이션 작업 정의 --&gt;
  &lt;migration name="사용자_데이터_이관" use="true"&gt;
    &lt;source db="sourceDB"&gt;
      &lt;![CDATA[
        SELECT UserID, UserName, Email, CreatedDate
        FROM Users 
        WHERE CreatedDate >= '2024-01-01'
      ]]&gt;
    &lt;/source&gt;
    
    &lt;target db="targetDB" table="Users"&gt;
      &lt;columns&gt;
        &lt;column name="UserID" type="int" /&gt;
        &lt;column name="UserName" type="varchar(100)" /&gt;
        &lt;column name="Email" type="varchar(255)" /&gt;
        &lt;column name="CreatedDate" type="datetime" /&gt;
        &lt;column name="MigratedDate" type="datetime" override="true"&gt;${currentDate.CurrentDate}&lt;/column&gt;
      &lt;/columns&gt;
    &lt;/target&gt;
    
    &lt;!-- 전처리 스크립트 --&gt;
    &lt;preProcess db="targetDB"&gt;
      &lt;![CDATA[
        DELETE FROM Users WHERE CreatedDate >= '2024-01-01'
      ]]&gt;
    &lt;/preProcess&gt;
    
    &lt;!-- 후처리 스크립트 --&gt;
    &lt;postProcess db="targetDB"&gt;
      &lt;![CDATA[
        UPDATE Users SET Status = 'Migrated' WHERE MigratedDate IS NOT NULL
      ]]&gt;
    &lt;/postProcess&gt;
  &lt;/migration&gt;
&lt;/migrations&gt;</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="json">
                <h3>JSON 설정 파일 구조</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>{
  "global": {
    "batchSize": 1000,
    "timeout": 30000,
    "retryCount": 3
  },
  "dynamicVars": [
    {
      "name": "currentDate",
      "query": "SELECT GETDATE() as CurrentDate"
    }
  ],
  "migrations": [
    {
      "name": "사용자_데이터_이관",
      "use": true,
      "source": {
        "db": "sourceDB",
        "query": "SELECT UserID, UserName, Email, CreatedDate FROM Users WHERE CreatedDate >= '2024-01-01'"
      },
      "target": {
        "db": "targetDB",
        "table": "Users",
        "columns": [
          { "name": "UserID", "type": "int" },
          { "name": "UserName", "type": "varchar(100)" },
          { "name": "Email", "type": "varchar(255)" },
          { "name": "CreatedDate", "type": "datetime" },
          { "name": "MigratedDate", "type": "datetime", "override": true, "value": "${currentDate.CurrentDate}" }
        ]
      },
      "preProcess": {
        "db": "targetDB",
        "query": "DELETE FROM Users WHERE CreatedDate >= '2024-01-01'"
      },
      "postProcess": {
        "db": "targetDB",
        "query": "UPDATE Users SET Status = 'Migrated' WHERE MigratedDate IS NOT NULL"
      }
    }
  ]
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Features Section -->
<section id="advanced-features" class="manual-section">
    <div class="container">
        <h2 class="section-title">🎨 고급 기능</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>동적 변수 시스템</h3>
                <p>실행 시점에 데이터베이스에서 값을 추출하여 마이그레이션 과정에서 활용합니다.</p>
                <ul>
                    <li>실시간 데이터 추출</li>
                    <li>변수 치환 및 활용</li>
                    <li>복잡한 쿼리 지원</li>
                    <li>디버그 모드 지원</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>실시간 모니터링</h3>
                <p>키보드 인터랙티브 모니터링과 차트를 통해 마이그레이션 진행 상황을 실시간으로 추적합니다.</p>
                <ul>
                    <li>실시간 진행률 표시</li>
                    <li>차트 기반 시각화</li>
                    <li>키보드 인터랙션</li>
                    <li>성능 메트릭 표시</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>중단 재시작 기능</h3>
                <p>네트워크 오류 등으로 중단된 마이그레이션을 완료된 지점에서 재시작할 수 있습니다.</p>
                <ul>
                    <li>진행 상황 저장</li>
                    <li>자동 재시작 지원</li>
                    <li>데이터 일관성 보장</li>
                    <li>오류 복구 기능</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>전처리/후처리</h3>
                <p>마이그레이션 전후에 SQL 스크립트를 실행하여 데이터 정리 및 검증을 수행합니다.</p>
                <ul>
                    <li>데이터 정리 스크립트</li>
                    <li>검증 및 검사</li>
                    <li>인덱스 관리</li>
                    <li>통계 업데이트</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>컬럼 오버라이드</h3>
                <p>마이그레이션 시 특정 컬럼의 값을 변경하거나 추가할 수 있습니다.</p>
                <ul>
                    <li>기본값 설정</li>
                    <li>동적 값 할당</li>
                    <li>데이터 변환</li>
                    <li>메타데이터 추가</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📈</div>
                <h3>배치 처리 최적화</h3>
                <p>대용량 데이터를 효율적으로 처리하기 위한 배치 단위 처리 시스템을 제공합니다.</p>
                <ul>
                    <li>메모리 효율성</li>
                    <li>성능 최적화</li>
                    <li>트랜잭션 관리</li>
                    <li>오류 처리</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Examples Section -->
<section id="examples" class="manual-section">
    <div class="container">
        <h2 class="section-title">📋 실용 예제</h2>
        
        <div class="examples-grid">
            <div class="example-card">
                <h3>📊 사용자 데이터 이관</h3>
                <p>사용자 테이블의 데이터를 소스에서 타겟으로 이관하는 기본 예제입니다.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;migration name="사용자_이관" use="true"&gt;
  &lt;source db="sourceDB"&gt;
    &lt;![CDATA[
      SELECT UserID, UserName, Email, CreatedDate, Status
      FROM Users 
      WHERE Status = 'Active'
    ]]&gt;
  &lt;/source&gt;
  
  &lt;target db="targetDB" table="Users"&gt;
    &lt;columns&gt;
      &lt;column name="UserID" type="int" /&gt;
      &lt;column name="UserName" type="varchar(100)" /&gt;
      &lt;column name="Email" type="varchar(255)" /&gt;
      &lt;column name="CreatedDate" type="datetime" /&gt;
      &lt;column name="Status" type="varchar(20)" /&gt;
      &lt;column name="MigratedDate" type="datetime" override="true"&gt;${currentDate.CurrentDate}&lt;/column&gt;
    &lt;/columns&gt;
  &lt;/target&gt;
&lt;/migration&gt;</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>🔄 동적 변수 활용</h3>
                <p>실행 시점에 데이터를 추출하여 마이그레이션 조건으로 활용하는 예제입니다.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;dynamicVars&gt;
  &lt;dynamicVar name="lastSyncDate"&gt;
    &lt;![CDATA[
      SELECT MAX(LastModifiedDate) as LastSyncDate 
      FROM TargetDB.dbo.Products
    ]]&gt;
  &lt;/dynamicVar&gt;
&lt;/dynamicVars&gt;

&lt;migration name="제품_이관"&gt;
  &lt;source db="sourceDB"&gt;
    &lt;![CDATA[
      SELECT ProductID, ProductName, Price, LastModifiedDate
      FROM Products 
      WHERE LastModifiedDate > ${lastSyncDate.LastSyncDate}
    ]]&gt;
  &lt;/source&gt;
&lt;/migration&gt;</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>⚙️ 전처리/후처리 활용</h3>
                <p>마이그레이션 전후에 데이터 정리 및 검증을 수행하는 예제입니다.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;migration name="주문_이관"&gt;
  &lt;!-- 전처리: 기존 데이터 정리 --&gt;
  &lt;preProcess db="targetDB"&gt;
    &lt;![CDATA[
      DELETE FROM Orders WHERE OrderDate >= '2024-01-01'
    ]]&gt;
  &lt;/preProcess&gt;
  
  &lt;source db="sourceDB"&gt;
    &lt;![CDATA[SELECT * FROM Orders WHERE OrderDate >= '2024-01-01']]&gt;
  &lt;/source&gt;
  
  &lt;target db="targetDB" table="Orders" /&gt;
  
  &lt;!-- 후처리: 인덱스 재생성 및 통계 업데이트 --&gt;
  &lt;postProcess db="targetDB"&gt;
    &lt;![CDATA[
      CREATE INDEX IX_Orders_OrderDate ON Orders(OrderDate)
      UPDATE STATISTICS Orders
    ]]&gt;
  &lt;/postProcess&gt;
&lt;/migration&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Troubleshooting Section -->
<section id="troubleshooting" class="manual-section">
    <div class="container">
        <h2 class="section-title">🔧 문제 해결</h2>
        
        <div class="troubleshooting-grid">
            <div class="trouble-card">
                <h3>❌ 연결 오류</h3>
                <p><strong>문제:</strong> 데이터베이스 연결에 실패합니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>config/dbinfo.json 파일의 연결 정보 확인</li>
                    <li>SQL Server 서비스가 실행 중인지 확인</li>
                    <li>방화벽 설정 확인</li>
                    <li>사용자 권한 확인</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>⏱️ 타임아웃 오류</h3>
                <p><strong>문제:</strong> 쿼리 실행 중 타임아웃이 발생합니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>global 설정에서 timeout 값 증가</li>
                    <li>배치 크기(batchSize) 감소</li>
                    <li>쿼리 최적화</li>
                    <li>인덱스 활용</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>🔄 중단 재시작 문제</h3>
                <p><strong>문제:</strong> 중단된 마이그레이션 재시작이 실패합니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>진행 상황 파일 확인</li>
                    <li>데이터베이스 상태 점검</li>
                    <li>로그 파일 분석</li>
                    <li>--resume 옵션 사용</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>📊 메모리 부족</h3>
                <p><strong>문제:</strong> 대용량 데이터 처리 시 메모리 부족 오류가 발생합니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>배치 크기 감소</li>
                    <li>쿼리 최적화</li>
                    <li>인덱스 활용</li>
                    <li>시스템 리소스 확인</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="manual-section">
    <div class="container">
        <h2 class="section-title">❓ 자주 묻는 질문</h2>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: SQL2DB는 어떤 데이터베이스를 지원하나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 현재 Microsoft SQL Server 2012 이상을 지원합니다. 소스와 타겟 모두 SQL Server여야 합니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 대용량 데이터 처리 시 성능은 어떻게 되나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 배치 처리와 실시간 모니터링을 통해 대용량 데이터도 효율적으로 처리할 수 있습니다. 배치 크기를 조정하여 메모리 사용량을 제어할 수 있습니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 마이그레이션 중 오류가 발생하면 어떻게 하나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 중단 재시작 기능을 사용하여 완료된 지점에서 마이그레이션을 재개할 수 있습니다. --resume 옵션을 사용하면 됩니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 실시간 모니터링은 어떻게 사용하나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 마이그레이션 실행 시 자동으로 모니터링 화면이 표시됩니다. 키보드 인터랙션을 통해 진행 상황을 실시간으로 확인할 수 있습니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 동적 변수는 어떤 용도로 사용하나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 실행 시점에 데이터베이스에서 값을 추출하여 마이그레이션 조건이나 컬럼 값으로 활용할 수 있습니다. 예를 들어, 마지막 동기화 날짜를 기준으로 증분 마이그레이션을 수행할 수 있습니다.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section id="support" class="manual-section">
    <div class="container">
        <h2 class="section-title">📞 지원 및 문의</h2>
        
        <div class="support-grid">
            <div class="support-card">
                <div class="support-icon">📧</div>
                <h3>이메일 지원</h3>
                <p>기술적인 문제나 문의사항이 있으시면 이메일로 연락해주세요.</p>
                <a href="mailto:sql2db.nodejs@gmail.com" class="btn btn-primary">이메일 보내기</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>이슈 리포트</h3>
                <p>버그 발견이나 기능 요청은 GitHub 이슈를 통해 알려주세요.</p>
                <a href="https://github.com/happysoft2018/sql2db/issues" class="btn btn-secondary" target="_blank">이슈 등록</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">📚</div>
                <h3>문서 및 예제</h3>
                <p>더 자세한 정보와 예제는 GitHub 저장소에서 확인하세요.</p>
                <a href="https://github.com/happysoft2018/sql2db" class="btn btn-outline" target="_blank">GitHub 방문</a>
            </div>
        </div>
    </div>
</section>

<script>
// Tab functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
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

// FAQ toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const toggle = item.querySelector('.faq-toggle');
        
        question.addEventListener('click', function() {
            const isOpen = answer.style.display === 'block';
            
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.querySelector('.faq-answer').style.display = 'none';
                    otherItem.querySelector('.faq-toggle').textContent = '+';
                }
            });
            
            // Toggle current item
            answer.style.display = isOpen ? 'none' : 'block';
            toggle.textContent = isOpen ? '+' : '-';
        });
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php include 'includes/footer_kr.php'; ?>
