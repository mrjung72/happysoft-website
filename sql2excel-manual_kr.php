<?php
$pageTitle = "SQL2Excel 사용자 매뉴얼 - 상세 가이드";
$currentPage = "sql2excel-manual";
include 'includes/header_kr.php';
?>

<!-- Hero Section -->
<section class="manual-hero">
    <div class="container">
        <div class="manual-hero-content">
            <div class="manual-hero-text">
                <div class="manual-badge">📖 사용자 매뉴얼</div>
                <h1>SQL2Excel 사용자 매뉴얼</h1>
                <p class="manual-tagline">설치부터 고급 기능까지 SQL2Excel의 모든 기능을 상세히 다루는 완전한 가이드</p>
              
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
                    <li><a href="#overview">SQL2Excel 소개</a></li>
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
                    <li><a href="#template-styles">템플릿 스타일</a></li>
                    <li><a href="#dynamic-variables">동적 변수</a></li>
                    <li><a href="#separate-toc">별도 목차</a></li>
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
                <h3>SQL2Excel이란?</h3>
                <p>SQL2Excel은 SQL 쿼리 결과를 Excel 파일로 생성하는 Node.js 기반 도구로, 고급 스타일링과 템플릿 지원 기능을 제공합니다. 개발자와 데이터 분석가가 데이터베이스의 정보를 쉽게 Excel 형태로 변환하여 보고서나 분석 자료를 만들 수 있도록 도와줍니다.</p>
                
                <h3>주요 특징</h3>
                <ul>
                    <li><strong>멀티 시트 지원</strong>: 하나의 Excel 파일에 여러 SQL 쿼리 결과를 별도 시트로 저장</li>
                    <li><strong>템플릿 스타일 시스템</strong>: 일관된 디자인을 위한 사전 정의된 Excel 스타일링 템플릿</li>
                    <li><strong>다중 DB 연결</strong>: 각 시트마다 다른 데이터베이스 연결 사용</li>
                    <li><strong>향상된 동적 변수</strong>: 실시간 데이터베이스에서 값을 추출하여 고급 처리</li>
                    <li><strong>별도 목차 생성</strong>: 독립적인 목차 Excel 파일 생성</li>
                    <li><strong>파일 검증</strong>: 자동 파일명 검증 및 한글 문자 경고</li>
                </ul>
            </div>
            
            <div class="overview-visual">
                <div class="feature-diagram">
                    <div class="diagram-step">
                        <div class="step-icon">📊</div>
                        <div class="step-text">SQL 쿼리</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">⚙️</div>
                        <div class="step-text">SQL2Excel</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">📋</div>
                        <div class="step-text">Excel 파일</div>
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
                    <li>Node.js 16.0 이상</li>
                    <li>SQL Server 2012 이상</li>
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
git clone https://github.com/happysoft2018/sql2excel.git
cd sql2excel

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
    "sampleDB": {
      "server": "localhost",
      "port": 1433,
      "database": "SampleDB",
      "user": "sa",
      "password": "yourpassword",
      "options": {
        "encrypt": false,
        "trustServerCertificate": true
      }
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
                        <h4>기본 Excel 생성</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/excel-cli.js export --xml ./queries/sample-queries.xml</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>템플릿 스타일 사용</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/excel-cli.js export --xml ./queries/sample-queries.xml --style modern</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>별도 목차 생성</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/excel-cli.js export --xml ./queries/sample-queries.xml --separate-toc</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>사용 가능한 스타일 목록</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">복사</button>
                            </div>
                            <pre><code>node src/excel-cli.js list-styles</code></pre>
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
&lt;queries separateToc="true" maxRows="10000"&gt;
  &lt;!-- 엑셀 파일 설정 --&gt;
  &lt;excel db="sampleDB" output="output/보고서.xlsx" style="modern"&gt;
    &lt;header&gt;
      &lt;font name="맑은 고딕" size="12" color="FFFFFF" bold="true"/&gt;
      &lt;fill color="4F81BD"/&gt;
      &lt;alignment horizontal="center" vertical="middle"/&gt;
    &lt;/header&gt;
    &lt;body&gt;
      &lt;font name="맑은 고딕" size="11" color="000000"/&gt;
      &lt;fill color="FFFFCC"/&gt;
    &lt;/body&gt;
  &lt;/excel&gt;
  
  &lt;!-- 변수 정의 --&gt;
  &lt;vars&gt;
    &lt;var name="year"&gt;2024&lt;/var&gt;
    &lt;var name="month"&gt;12&lt;/var&gt;
  &lt;/vars&gt;
  
  &lt;!-- 시트 정의 --&gt;
  &lt;sheet name="매출현황" use="true" aggregateColumn="Region"&gt;
    &lt;![CDATA[
      SELECT Region, SUM(Amount) as TotalAmount
      FROM Sales 
      WHERE YEAR(Date) = ${year}
      GROUP BY Region
    ]]&gt;
  &lt;/sheet&gt;
&lt;/queries&gt;</code></pre>
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
  "excel": {
    "db": "sampleDB",
    "output": "output/보고서.xlsx",
    "style": "modern",
    "separateToc": true,
    "header": {
      "font": { "name": "맑은 고딕", "size": 12, "color": "FFFFFF", "bold": true },
      "fill": { "color": "4F81BD" },
      "alignment": { "horizontal": "center", "vertical": "middle" }
    },
    "body": {
      "font": { "name": "맑은 고딕", "size": 11, "color": "000000" },
      "fill": { "color": "FFFFCC" }
    }
  },
  "vars": {
    "year": "2024",
    "month": "12"
  },
  "sheets": [
    {
      "name": "매출현황",
      "use": true,
      "aggregateColumn": "Region",
      "query": "SELECT Region, SUM(Amount) as TotalAmount FROM Sales WHERE YEAR(Date) = ${year} GROUP BY Region"
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
                <div class="feature-icon">🎨</div>
                <h3>템플릿 스타일 시스템</h3>
                <p>7가지 사전 정의된 스타일로 일관된 디자인을 제공합니다.</p>
                <div class="style-list">
                    <span class="style-tag">기본</span>
                    <span class="style-tag">모던</span>
                    <span class="style-tag">다크</span>
                    <span class="style-tag">컬러풀</span>
                    <span class="style-tag">미니멀</span>
                    <span class="style-tag">비즈니스</span>
                    <span class="style-tag">프리미엄</span>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>향상된 동적 변수</h3>
                <p>실시간 데이터베이스에서 값을 추출하여 고급 처리를 지원합니다.</p>
                <ul>
                    <li>column_identified 타입</li>
                    <li>key_value_pairs 타입</li>
                    <li>실행 전 변수 처리</li>
                    <li>디버그 모드 지원</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>별도 목차 생성</h3>
                <p>독립적인 목차 시트 생성하여 보고서 관리 효율성을 향상시킵니다.</p>
                <ul>
                    <li>시트별 데이터 건수 표시</li>
                    <li>XML/CLI 옵션 제어</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>파일 검증 시스템</h3>
                <p>파일명 자동 검증 및 한글 문자 경고로 안정적인 실행 환경을 제공합니다.</p>
                <ul>
                    <li>한글 파일명 자동 감지</li>
                    <li>영문 파일명 권장사항</li>
                    <li>파일 경로 유효성 검사</li>
                    <li>사용자 친화적 오류 메시지</li>
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
                <h3>📊 매출 보고서 생성</h3>
                <p>월별 매출 데이터를 분석하여 Excel 보고서로 생성하는 예제입니다.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;sheet name="월별매출_${year}" use="true" style="business"&gt;
  &lt;![CDATA[
    SELECT 
      MONTH(OrderDate) as Month,
      DATENAME(MONTH, OrderDate) as MonthName,
      COUNT(*) as OrderCount,
      SUM(TotalAmount) as TotalSales
    FROM Orders 
    WHERE YEAR(OrderDate) = ${year}
    GROUP BY MONTH(OrderDate), DATENAME(MONTH, OrderDate)
    ORDER BY Month
  ]]&gt;
&lt;/sheet&gt;</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>👥 고객 분석 보고서</h3>
                <p>고객별 구매 패턴을 분석하는 보고서 예제입니다.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>{
  "name": "고객분석",
  "use": true,
  "style": "premium",
  "query": "SELECT c.CustomerName, COUNT(o.OrderID) as OrderCount, SUM(o.TotalAmount) as TotalPurchase FROM Customers c LEFT JOIN Orders o ON c.CustomerID = o.CustomerID GROUP BY c.CustomerID, c.CustomerName ORDER BY TotalPurchase DESC"
}</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>🔄 동적 변수 사용</h3>
                <p>실시간으로 데이터베이스에서 값을 가져와 쿼리에 사용하는 예제입니다.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;dynamicVars&gt;
  &lt;dynamicVar name="activeCustomers"&gt;
    &lt;![CDATA[
      SELECT CustomerID FROM Customers WHERE IsActive = 1
    ]]&gt;
  &lt;/dynamicVar&gt;
&lt;/dynamicVars&gt;

&lt;sheet name="활성고객주문"&gt;
  &lt;![CDATA[
    SELECT * FROM Orders 
    WHERE CustomerID IN (${activeCustomers.CustomerID})
  ]]&gt;
&lt;/sheet&gt;</code></pre>
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
                <h3>⚠️ 한글 파일명 경고</h3>
                <p><strong>문제:</strong> 한글 파일명 사용 시 경고가 표시됩니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>영문 파일명 사용 권장</li>
                    <li>파일명에 특수문자 사용 금지</li>
                    <li>공백 대신 언더스코어(_) 사용</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>🔍 변수 치환 오류</h3>
                <p><strong>문제:</strong> 동적 변수가 제대로 치환되지 않습니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>DEBUG_VARIABLES=true 환경변수 설정</li>
                    <li>변수 쿼리 결과 확인</li>
                    <li>변수명과 사용법 확인</li>
                    <li>데이터베이스 권한 확인</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>📊 대용량 데이터 처리</h3>
                <p><strong>문제:</strong> 대용량 데이터 처리 시 메모리 부족 오류가 발생합니다.</p>
                <p><strong>해결:</strong></p>
                <ul>
                    <li>maxRows 속성으로 행 수 제한</li>
                    <li>쿼리 최적화</li>
                    <li>인덱스 활용</li>
                    <li>배치 처리 고려</li>
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
                    <h3>Q: SQL2Excel은 어떤 데이터베이스를 지원하나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 현재 SQL Server 2012 이상을 지원합니다. 향후 MySQL, PostgreSQL 등 다른 데이터베이스 지원을 계획하고 있습니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 템플릿 스타일을 커스터마이징할 수 있나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 네, templates/excel-styles.xml 파일을 수정하여 새로운 스타일을 추가하거나 기존 스타일을 수정할 수 있습니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 대용량 데이터 처리 시 성능은 어떻게 되나요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: maxRows 속성을 사용하여 처리할 행 수를 제한할 수 있으며, 스트리밍 처리로 메모리 효율성을 높였습니다.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: 자동화된 보고서 생성이 가능한가요?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: 네, Windows 배치 파일이나 스케줄러를 사용하여 정기적인 보고서 생성을 자동화할 수 있습니다.</p>
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
                <a href="mailto:sql2excel.nodejs@gmail.com" class="btn btn-primary">이메일 보내기</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>이슈 리포트</h3>
                <p>버그 발견이나 기능 요청은 GitHub 이슈를 통해 알려주세요.</p>
                <a href="https://github.com/happysoft2018/sql2excel/issues" class="btn btn-secondary" target="_blank">이슈 등록</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">📚</div>
                <h3>문서 및 예제</h3>
                <p>더 자세한 정보와 예제는 GitHub 저장소에서 확인하세요.</p>
                <a href="https://github.com/happysoft2018/sql2excel" class="btn btn-outline" target="_blank">GitHub 방문</a>
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
