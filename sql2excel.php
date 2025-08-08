<?php
$pageTitle = "SQL2Excel - 엑셀 생성 솔루션";
$currentPage = "sql2excel";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero excel-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div class="solution-hero-text">
                <div class="solution-badge">📊 엑셀 생성 도구</div>
                <h1>SQL2Excel <span class="version">v1.2.1</span></h1>
                <p class="solution-tagline">SQL 쿼리 결과를 스타일링된 멀티 시트 엑셀 파일로 변환하는 전문 도구</p>
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">멀티시트</div>
                        <div class="stat-label">엑셀 생성</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">자동</div>
                        <div class="stat-label">목차 생성</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">다중DB</div>
                        <div class="stat-label">연결 지원</div>
                    </div>
                </div>
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">다운로드</a>
                    <a href="#documentation" class="btn btn-secondary">문서 보기</a>
                    <a href="https://github.com/yourusername/sql2excel-nodejs" class="btn btn-github" target="_blank">
                        <span class="github-icon">📦</span> GitHub
                    </a>
                </div>
            </div>
            <div class="solution-hero-demo">
                <div class="excel-preview">
                    <div class="excel-header">
                        <div class="excel-tabs">
                            <div class="excel-tab active">목차</div>
                            <div class="excel-tab">매출현황</div>
                            <div class="excel-tab">주문분석</div>
                            <div class="excel-tab">고객통계</div>
                        </div>
                    </div>
                    <div class="excel-content">
                        <div class="excel-row header">
                            <div class="excel-cell">No</div>
                            <div class="excel-cell">Sheet Name</div>
                            <div class="excel-cell">Records</div>
                            <div class="excel-cell">Aggregate Info</div>
                        </div>
                        <div class="excel-row">
                            <div class="excel-cell">1</div>
                            <div class="excel-cell link">📊 매출현황</div>
                            <div class="excel-cell">1,250</div>
                            <div class="excel-cell">[지역] 서울:450, 부산:320...</div>
                        </div>
                        <div class="excel-row">
                            <div class="excel-cell">2</div>
                            <div class="excel-cell link">📈 주문분석</div>
                            <div class="excel-cell">2,840</div>
                            <div class="excel-cell">[상태] 완료:2100, 진행중:740</div>
                        </div>
                        <div class="excel-row">
                            <div class="excel-cell">3</div>
                            <div class="excel-cell link">👥 고객통계</div>
                            <div class="excel-cell">856</div>
                            <div class="excel-cell">[등급] VIP:156, 일반:700</div>
                        </div>
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
                <h3>멀티 시트 엑셀 생성</h3>
                <p>여러 SQL 쿼리 결과를 하나의 엑셀 파일에 시트별로 구성하여 체계적인 보고서 생성</p>
                <ul class="feature-details">
                    <li>시트별 독립적인 쿼리 실행</li>
                    <li>시트 사용 여부 개별 설정</li>
                    <li>동적 시트명 (변수 활용)</li>
                    <li>최대 조회 건수 제한 기능</li>
                </ul>
            </div>
            
            <div class="feature-card featured">
                <div class="feature-icon">🎨</div>
                <h3>고급 엑셀 스타일링</h3>
                <p>헤더와 데이터 영역을 각각 다른 스타일로 설정하여 전문적이고 가독성 높은 엑셀 파일 생성</p>
                <ul class="feature-details">
                    <li>폰트, 색상, 배경, 테두리 설정</li>
                    <li>자동 컬럼 너비 조정</li>
                    <li>셀 정렬 및 텍스트 방향</li>
                    <li>헤더/데이터 영역 별도 스타일</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>자동 목차 시트 생성</h3>
                <p>모든 시트의 정보를 한눈에 볼 수 있는 목차 시트를 자동으로 생성하고 하이퍼링크 제공</p>
                <ul class="feature-details">
                    <li>시트별 데이터 건수 표시</li>
                    <li>집계 정보 자동 요약</li>
                    <li>하이퍼링크로 빠른 이동</li>
                    <li>천 단위 구분자 표시</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔗</div>
                <h3>다중 데이터베이스 연결</h3>
                <p>시트별로 서로 다른 데이터베이스에 연결하여 여러 시스템의 데이터를 통합 보고서로 생성</p>
                <ul class="feature-details">
                    <li>시트별 독립적인 DB 연결</li>
                    <li>효율적인 연결 풀 관리</li>
                    <li>DB 출처 자동 표시</li>
                    <li>연결 상태 모니터링</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>쿼리 재사용 시스템</h3>
                <p>공통 쿼리를 정의하고 여러 시트에서 재사용하여 유지보수성과 일관성을 향상</p>
                <ul class="feature-details">
                    <li>queryDefs를 통한 쿼리 정의</li>
                    <li>queryRef로 재사용 참조</li>
                    <li>중앙집중식 쿼리 관리</li>
                    <li>코드 중복 제거</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>CLI 및 배치 도구</h3>
                <p>명령줄 인터페이스와 윈도우 배치 파일로 자동화된 보고서 생성 및 스케줄링 지원</p>
                <ul class="feature-details">
                    <li>excel-cli.js 명령줄 도구</li>
                    <li>윈도우 배치 파일 제공</li>
                    <li>쿼리 파일 검증 기능</li>
                    <li>DB 연결 테스트</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Excel Features Showcase -->
<section class="excel-features">
    <div class="container">
        <h2 class="section-title">엑셀 기능 상세</h2>
        <div class="excel-features-content">
            <div class="excel-feature-demo">
                <h3>스타일링 예제</h3>
                <div class="style-preview">
                    <div class="style-section">
                        <h4>헤더 스타일</h4>
                        <div class="style-example header-style">
                            <div class="cell">주문ID</div>
                            <div class="cell">고객명</div>
                            <div class="cell">주문일자</div>
                            <div class="cell">금액</div>
                        </div>
                        <div class="style-specs">
                            <span>• 파란색 배경 • 흰색 텍스트 • 굵은 글씨 • 중앙 정렬</span>
                        </div>
                    </div>
                    
                    <div class="style-section">
                        <h4>데이터 스타일</h4>
                        <div class="style-example data-style">
                            <div class="cell">ORD-001</div>
                            <div class="cell">김철수</div>
                            <div class="cell">2024-01-15</div>
                            <div class="cell">125,000</div>
                        </div>
                        <div class="style-specs">
                            <span>• 연한 노란색 배경 • 검은색 텍스트 • 일반 글씨 • 좌측 정렬</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="excel-feature-list">
                <h3>지원하는 스타일 속성</h3>
                <div class="style-categories">
                    <div class="style-category">
                        <h4>폰트 설정</h4>
                        <ul>
                            <li>폰트명 (맑은 고딕, Arial 등)</li>
                            <li>폰트 크기 (8~72pt)</li>
                            <li>폰트 색상 (ARGB 16진수)</li>
                            <li>굵기 (bold) 설정</li>
                        </ul>
                    </div>
                    
                    <div class="style-category">
                        <h4>배경 및 테두리</h4>
                        <ul>
                            <li>배경색 설정</li>
                            <li>테두리 스타일 (thin, thick)</li>
                            <li>테두리 색상</li>
                            <li>방향별 테두리 (상하좌우)</li>
                        </ul>
                    </div>
                    
                    <div class="style-category">
                        <h4>정렬 및 크기</h4>
                        <ul>
                            <li>가로 정렬 (left, center, right)</li>
                            <li>세로 정렬 (top, middle, bottom)</li>
                            <li>컬럼 너비 자동 조정</li>
                            <li>최소/최대 너비 설정</li>
                        </ul>
                    </div>
                </div>
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
                <h3>지원 형식</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">설정 파일</span>
                        <span class="spec-value">XML, JSON</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">출력 형식</span>
                        <span class="spec-value">Excel (.xlsx)</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">엑셀 버전</span>
                        <span class="spec-value">Excel 2007+</span>
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
                        <span class="spec-label">동시 연결</span>
                        <span class="spec-value">다중 DB 지원</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">연결 방식</span>
                        <span class="spec-value">Connection Pool</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>성능</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">처리 속도</span>
                        <span class="spec-value">대용량 데이터 지원</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">메모리 효율</span>
                        <span class="spec-value">스트리밍 처리</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">파일 크기</span>
                        <span class="spec-value">무제한</span>
                    </div>
                </div>
            </div>
            
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
                        <span class="spec-label">라이브러리</span>
                        <span class="spec-value">ExcelJS, MSSQL</span>
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
                <button class="tab-btn active" data-tab="cli">CLI 사용법</button>
                <button class="tab-btn" data-tab="xml">XML 설정</button>
                <button class="tab-btn" data-tab="json">JSON 설정</button>
                <button class="tab-btn" data-tab="advanced">고급 기능</button>
            </div>
            
            <div class="tab-content active" id="cli">
                <h3>CLI 명령어</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code># 엑셀 파일 생성
node src/excel-cli.js export --xml ./queries/sample-queries.xml

# 변수와 함께 실행
node src/excel-cli.js export --xml ./queries/report.xml \
  --var "year=2024" --var "quarter=Q1"

# JSON 설정 파일 사용
node src/excel-cli.js export --query ./queries/monthly-report.json

# 쿼리 파일 검증
node src/excel-cli.js validate --xml ./queries/sample-queries.xml

# 데이터베이스 연결 테스트
node src/excel-cli.js list-dbs</code></pre>
                </div>
                
                <h3>NPM 스크립트</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code># 패키지 스크립트 사용
npm run export -- --xml ./queries/sample.xml
npm run validate -- --xml ./queries/sample.xml
npm run list-dbs
npm run help</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="xml">
                <h3>XML 설정 파일 예제</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;queries&gt;
  &lt;!-- 엑셀 파일 설정 --&gt;
  &lt;excel db="sampleDB" output="output/매출보고서_2024.xlsx"&gt;
    &lt;header&gt;
      &lt;font name="맑은 고딕" size="12" color="FFFFFF" bold="true"/&gt;
      &lt;fill color="4F81BD"/&gt;
      &lt;alignment horizontal="center" vertical="middle"/&gt;
      &lt;border&gt;
        &lt;all style="thin" color="000000"/&gt;
      &lt;/border&gt;
      &lt;colwidths min="10" max="30"/&gt;
    &lt;/header&gt;
    &lt;body&gt;
      &lt;font name="맑은 고딕" size="11" color="000000" bold="false"/&gt;
      &lt;fill color="FFFFCC"/&gt;
      &lt;alignment horizontal="left" vertical="top"/&gt;
      &lt;border&gt;
        &lt;all style="thin" color="CCCCCC"/&gt;
      &lt;/border&gt;
    &lt;/body&gt;
  &lt;/excel&gt;
  
  &lt;!-- 변수 정의 --&gt;
  &lt;vars&gt;
    &lt;var name="startDate"&gt;2024-01-01&lt;/var&gt;
    &lt;var name="endDate"&gt;2024-12-31&lt;/var&gt;
    &lt;var name="year"&gt;2024&lt;/var&gt;
  &lt;/vars&gt;
  
  &lt;!-- 시트 정의 --&gt;
  &lt;sheet name="월별매출_${year}" use="true" aggregateColumn="Month" maxRows="12" db="sampleDB"&gt;
    &lt;![CDATA[
      SELECT 
        MONTH(OrderDate) as Month,
        DATENAME(MONTH, OrderDate) as MonthName,
        COUNT(*) as OrderCount,
        SUM(TotalAmount) as TotalSales,
        AVG(TotalAmount) as AvgOrderAmount
      FROM Orders 
      WHERE YEAR(OrderDate) = ${year}
      GROUP BY MONTH(OrderDate), DATENAME(MONTH, OrderDate)
      ORDER BY Month
    ]]&gt;
  &lt;/sheet&gt;
  
  &lt;sheet name="고객별매출" use="true" aggregateColumn="CustomerType" maxRows="1000"&gt;
    &lt;![CDATA[
      SELECT 
        c.CustomerID,
        c.CustomerName,
        c.CustomerType,
        COUNT(o.OrderID) as OrderCount,
        SUM(o.TotalAmount) as TotalPurchase
      FROM Customers c
      LEFT JOIN Orders o ON c.CustomerID = o.CustomerID
      WHERE o.OrderDate >= '${startDate}' AND o.OrderDate <= '${endDate}'
      GROUP BY c.CustomerID, c.CustomerName, c.CustomerType
      ORDER BY TotalPurchase DESC
    ]]&gt;
  &lt;/sheet&gt;
&lt;/queries&gt;</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="json">
                <h3>JSON 설정 파일 예제</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>{
  "excel": {
    "db": "sampleDB",
    "output": "output/매출보고서_2024.xlsx",
    "header": {
      "font": { "name": "맑은 고딕", "size": 12, "color": "FFFFFF", "bold": true },
      "fill": { "color": "4F81BD" },
      "alignment": { "horizontal": "center", "vertical": "middle" },
      "border": { "all": { "style": "thin", "color": "000000" } },
      "colwidths": { "min": 10, "max": 30 }
    },
    "body": {
      "font": { "name": "맑은 고딕", "size": 11, "color": "000000", "bold": false },
      "fill": { "color": "FFFFCC" },
      "alignment": { "horizontal": "left", "vertical": "top" },
      "border": { "all": { "style": "thin", "color": "CCCCCC" } }
    }
  },
  "vars": {
    "startDate": "2024-01-01",
    "endDate": "2024-12-31",
    "year": "2024"
  },
  "sheets": [
    {
      "name": "월별매출_${year}",
      "use": true,
      "aggregateColumn": "Month",
      "maxRows": 12,
      "db": "sampleDB",
      "query": "SELECT MONTH(OrderDate) as Month, DATENAME(MONTH, OrderDate) as MonthName, COUNT(*) as OrderCount, SUM(TotalAmount) as TotalSales, AVG(TotalAmount) as AvgOrderAmount FROM Orders WHERE YEAR(OrderDate) = ${year} GROUP BY MONTH(OrderDate), DATENAME(MONTH, OrderDate) ORDER BY Month"
    },
    {
      "name": "고객별매출",
      "use": true,
      "aggregateColumn": "CustomerType", 
      "maxRows": 1000,
      "query": "SELECT c.CustomerID, c.CustomerName, c.CustomerType, COUNT(o.OrderID) as OrderCount, SUM(o.TotalAmount) as TotalPurchase FROM Customers c LEFT JOIN Orders o ON c.CustomerID = o.CustomerID WHERE o.OrderDate >= '${startDate}' AND o.OrderDate <= '${endDate}' GROUP BY c.CustomerID, c.CustomerName, c.CustomerType ORDER BY TotalPurchase DESC"
    }
  ]
}</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="advanced">
                <h3>쿼리 재사용 (queryDefs)</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;queries&gt;
  &lt;!-- 재사용 가능한 쿼리 정의 --&gt;
  &lt;queryDefs&gt;
    &lt;queryDef name="monthly_sales" description="월별 매출 조회"&gt;
      &lt;![CDATA[
        SELECT 
          YEAR(OrderDate) as Year,
          MONTH(OrderDate) as Month,
          DATENAME(MONTH, OrderDate) as MonthName,
          COUNT(*) as OrderCount,
          SUM(TotalAmount) as TotalSales,
          AVG(TotalAmount) as AvgOrderAmount
        FROM Orders 
        WHERE OrderDate >= '${startDate}' AND OrderDate <= '${endDate}'
        GROUP BY YEAR(OrderDate), MONTH(OrderDate), DATENAME(MONTH, OrderDate)
        ORDER BY Year, Month
      ]]&gt;
    &lt;/queryDef&gt;
    
    &lt;queryDef name="customer_analysis" description="고객 분석"&gt;
      &lt;![CDATA[
        SELECT 
          CustomerID,
          CustomerName,
          CustomerType,
          Region,
          COUNT(o.OrderID) as OrderCount,
          SUM(o.TotalAmount) as TotalPurchase,
          AVG(o.TotalAmount) as AvgOrderAmount
        FROM Customers c
        LEFT JOIN Orders o ON c.CustomerID = o.CustomerID
        WHERE o.OrderDate >= '${startDate}' AND o.OrderDate <= '${endDate}'
        GROUP BY CustomerID, CustomerName, CustomerType, Region
        ORDER BY TotalPurchase DESC
      ]]&gt;
    &lt;/queryDef&gt;
  &lt;/queryDefs&gt;
  
  &lt;!-- 쿼리 정의 참조 사용 --&gt;
  &lt;sheet name="월별매출현황" queryRef="monthly_sales" use="true" 
         aggregateColumn="Month" maxRows="12" db="salesDB"/&gt;
  
  &lt;sheet name="고객분석보고서" queryRef="customer_analysis" use="true" 
         aggregateColumn="CustomerType" maxRows="500" db="customerDB"/&gt;
  
  &lt;!-- 동일한 쿼리를 다른 시트에서도 재사용 --&gt;
  &lt;sheet name="매출요약" queryRef="monthly_sales" use="true" db="salesDB"/&gt;
&lt;/queries&gt;</code></pre>
                </div>
                
                <h3>다중 데이터베이스 연결</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>{
  "excel": {
    "db": "mainDB",
    "output": "output/통합보고서.xlsx"
  },
  "sheets": [
    {
      "name": "주문데이터",
      "db": "orderDB",
      "maxRows": 1000,
      "query": "SELECT * FROM Orders WHERE OrderDate >= '${startDate}'"
    },
    {
      "name": "고객데이터", 
      "db": "customerDB",
      "maxRows": 500,
      "query": "SELECT * FROM Customers WHERE Status = 'ACTIVE'"
    },
    {
      "name": "통계데이터",
      "query": "SELECT * FROM Statistics"
    }
  ]
}</code></pre>
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
                    <h3>SQL2Excel v1.2.1</h3>
                    <div class="download-badge">최신 버전</div>
                </div>
                <div class="download-content">
                    <div class="version-info">
                        <div class="version-date">2025-01-15 릴리즈</div>
                        <div class="version-size">크기: ~8MB</div>
                    </div>
                    <ul class="version-features">
                        <li>멀티 시트 엑셀 생성</li>
                        <li>고급 스타일링 기능</li>
                        <li>자동 목차 생성</li>
                        <li>쿼리 재사용 시스템</li>
                        <li>다중 DB 연결</li>
                        <li>CLI 및 배치 도구</li>
                    </ul>
                    <div class="download-actions">
                        <a href="downloads/sql2excel-v1.2.1.zip" class="btn btn-primary">
                            💾 ZIP 다운로드
                        </a>
                        <a href="https://github.com/yourusername/sql2excel-nodejs/releases/tag/v1.2.1" class="btn btn-secondary" target="_blank">
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
                        <a href="https://github.com/yourusername/sql2excel-nodejs" class="btn btn-github" target="_blank">
                            📦 GitHub 저장소
                        </a>
                        <a href="https://github.com/yourusername/sql2excel-nodejs/archive/main.zip" class="btn btn-outline" target="_blank">
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
                    <span>최소 1GB RAM</span>
                </div>
                <div class="requirement-item">
                    <strong>저장공간</strong>
                    <span>50MB 이상</span>
                </div>
                <div class="requirement-item">
                    <strong>데이터베이스</strong>
                    <span>SQL Server 2012+</span>
                </div>
                <div class="requirement-item">
                    <strong>Excel</strong>
                    <span>Excel 2007+ (선택사항)</span>
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
                <p>설치부터 고급 스타일링까지 모든 기능을 다루는 완전한 가이드</p>
                <a href="docs/sql2excel-user-manual.pdf" class="btn btn-outline">PDF 다운로드</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">📋</div>
                <h3>변경 이력</h3>
                <p>모든 버전의 새로운 기능과 개선사항</p>
                <a href="docs/sql2excel-changelog.pdf" class="btn btn-outline">변경이력 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🎯</div>
                <h3>빠른 시작</h3>
                <p>3분 만에 첫 번째 엑셀 보고서 만들기</p>
                <a href="docs/sql2excel-quickstart.pdf" class="btn btn-outline">빠른 시작</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🎨</div>
                <h3>스타일 가이드</h3>
                <p>엑셀 스타일링의 모든 옵션과 예제</p>
                <a href="docs/sql2excel-styling-guide.pdf" class="btn btn-outline">스타일 가이드</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">💡</div>
                <h3>템플릿 모음</h3>
                <p>다양한 업무용 엑셀 템플릿과 설정 예제</p>
                <a href="docs/sql2excel-templates.zip" class="btn btn-outline">템플릿 다운로드</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">❓</div>
                <h3>FAQ</h3>
                <p>자주 묻는 질문과 문제 해결 방법</p>
                <a href="docs/sql2excel-faq.pdf" class="btn btn-outline">FAQ 보기</a>
            </div>
        </div>
    </div>
</section>

<style>
/* Excel-specific hero styling */
.excel-hero {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

/* Excel preview styling */
.excel-preview {
    background: white;
    border-radius: 0.5rem;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    border: 1px solid #e5e7eb;
}

.excel-header {
    background: #f3f4f6;
    border-bottom: 1px solid #d1d5db;
}

.excel-tabs {
    display: flex;
    padding: 0.5rem;
    gap: 0.25rem;
}

.excel-tab {
    padding: 0.5rem 1rem;
    background: #e5e7eb;
    border-radius: 0.25rem 0.25rem 0 0;
    font-size: 0.875rem;
    color: #374151;
    border: 1px solid #d1d5db;
    border-bottom: none;
}

.excel-tab.active {
    background: white;
    color: #059669;
    font-weight: 600;
}

.excel-content {
    background: white;
    padding: 1rem;
}

.excel-row {
    display: grid;
    grid-template-columns: 50px 200px 100px 250px;
    gap: 1px;
    margin-bottom: 1px;
}

.excel-row.header {
    background: #4f81bd;
    color: white;
    font-weight: 600;
}

.excel-row.header .excel-cell {
    background: #4f81bd;
    color: white;
    text-align: center;
    padding: 0.75rem 0.5rem;
}

.excel-cell {
    background: #ffffcc;
    padding: 0.5rem;
    border: 1px solid #d1d5db;
    font-size: 0.875rem;
    display: flex;
    align-items: center;
}

.excel-cell.link {
    color: #2563eb;
    cursor: pointer;
}

.excel-cell.link:hover {
    text-decoration: underline;
}

/* Excel features section */
.excel-features {
    padding: 5rem 0;
    background: var(--bg-primary);
}

.excel-features-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    margin-top: 3rem;
}

.excel-feature-demo h3 {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    color: var(--text-primary);
}

.style-preview {
    background: var(--bg-card);
    border-radius: 1rem;
    padding: 2rem;
    border: 1px solid var(--border-color);
}

.style-section {
    margin-bottom: 2rem;
}

.style-section:last-child {
    margin-bottom: 0;
}

.style-section h4 {
    font-size: 1.125rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.style-example {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    margin-bottom: 1rem;
    border: 1px solid var(--border-color);
    overflow: hidden;
    border-radius: 0.25rem;
}

.style-example.header-style .cell {
    background: #4f81bd;
    color: white;
    font-weight: 600;
    text-align: center;
}

.style-example.data-style .cell {
    background: #ffffcc;
    color: #000;
}

.style-example .cell {
    padding: 0.75rem 0.5rem;
    font-size: 0.875rem;
    border-right: 1px solid var(--border-color);
}

.style-example .cell:last-child {
    border-right: none;
}

.style-specs {
    font-size: 0.875rem;
    color: var(--text-secondary);
    font-style: italic;
}

.excel-feature-list h3 {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    color: var(--text-primary);
}

.style-categories {
    display: grid;
    gap: 2rem;
}

.style-category {
    background: var(--bg-secondary);
    border-radius: 0.5rem;
    padding: 1.5rem;
}

.style-category h4 {
    font-size: 1.125rem;
    margin-bottom: 1rem;
    color: var(--primary-color);
}

.style-category ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.style-category li {
    padding: 0.25rem 0;
    color: var(--text-secondary);
    position: relative;
    padding-left: 1.5rem;
}

.style-category li::before {
    content: '▸';
    position: absolute;
    left: 0;
    color: var(--success-color);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .excel-features-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .excel-row {
        grid-template-columns: 40px 120px 80px 150px;
        font-size: 0.75rem;
    }
    
    .excel-cell {
        padding: 0.375rem 0.25rem;
        font-size: 0.75rem;
    }
    
    .style-example {
        grid-template-columns: repeat(2, 1fr);
        gap: 1px;
    }
    
    .style-categories {
        gap: 1rem;
    }
}
</style>

<script>
// Tab functionality (same as SQL2DB page)
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

// Excel preview interaction
document.addEventListener('DOMContentLoaded', function() {
    const excelTabs = document.querySelectorAll('.excel-tab');
    
    excelTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            excelTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Could add different content for each tab
            // For now, just visual feedback
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
