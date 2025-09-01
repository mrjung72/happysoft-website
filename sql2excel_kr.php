<?php
$pageTitle = "SQL2Excel - 엑셀 생성 솔루션";
$currentPage = "sql2excel";
include 'includes/header_kr.php';
?>

<!-- Hero Section -->
<section class="solution-hero excel-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div class="solution-hero-text">
                <div class="solution-badge">📊 엑셀 생성 도구</div>
                <h1>SQL2Excel <span class="version">v1.2.3</span></h1>
                <p class="solution-tagline">SQL 쿼리 결과를 고급 스타일링과 템플릿이 적용된 멀티 시트 엑셀 파일로 변환하는 전문 도구 (향상된 동적 변수 지원)</p>
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">7</div>
                        <div class="stat-label">템플릿 스타일</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">향상된</div>
                        <div class="stat-label">동적 변수</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">별도</div>
                        <div class="stat-label">목차 생성</div>
                    </div>
                </div>
                <div class="solution-actions">
                    <a href="https://github.com/happysoft2018/sql2excel/releases/" class="btn btn-primary">다운로드</a>
                    <a href="sql2excel-manual_kr.php" class="btn btn-secondary">문서 보기</a>
                    <a href="https://github.com/happysoft2018/sql2excel" class="btn btn-github" target="_blank">
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
                <div class="feature-icon">🎨</div>
                <h3>템플릿 스타일 시스템</h3>
                <p>7가지 사전 정의된 엑셀 스타일 템플릿으로 일관된 디자인과 전문적인 보고서 생성</p>
                <ul class="feature-details">
                    <li>기본, 모던, 다크, 컬러풀, 미니멀, 비즈니스, 프리미엄 스타일</li>
                    <li>전역 및 시트별 스타일 적용</li>
                    <li>템플릿 스타일 커스터마이징</li>
                    <li>CLI에서 스타일 목록 확인</li>
                </ul>
            </div>
            
            <div class="feature-card featured">
                <div class="feature-icon">🔄</div>
                <h3>향상된 동적 변수</h3>
                <p>실시간 데이터베이스에서 값을 추출하여 고급 처리와 키-값 쌍 지원</p>
                <ul class="feature-details">
                    <li>column_identified 및 key_value_pairs 타입</li>
                    <li>실행 전 변수 처리 및 캐싱</li>
                    <li>변수 치환 검증을 위한 디버그 모드</li>
                    <li>오류 처리 및 빈 결과 대체</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>별도 목차 생성</h3>
                <p>향상된 보고서 관리와 공유를 위한 독립적인 목차 엑셀 파일 생성</p>
                <ul class="feature-details">
                    <li>자동 별도 목차 파일 생성</li>
                    <li>시트별 레코드 수 표시</li>
                    <li>타임스탬프 파일명</li>
                    <li>XML/CLI 옵션 제어</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>파일 검증 시스템</h3>
                <p>안정적인 실행 환경을 위한 자동 파일명 검증 및 한글 문자 경고</p>
                <ul class="feature-details">
                    <li>한글 파일명 자동 감지 및 경고</li>
                    <li>영문 파일명 권장</li>
                    <li>파일 경로 유효성 검사</li>
                    <li>사용자 친화적 오류 메시지</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>멀티 시트 엑셀 생성</h3>
                <p>여러 SQL 쿼리 결과를 단일 엑셀 파일의 별도 시트로 체계적인 보고서 구성</p>
                <ul class="feature-details">
                    <li>시트별 독립적인 쿼리 실행</li>
                    <li>개별 시트 활성화/비활성화 설정</li>
                    <li>동적 시트명 (변수 지원)</li>
                    <li>쿼리별 최대 레코드 제한</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔗</div>
                <h3>다중 데이터베이스 지원</h3>
                <p>다양한 데이터베이스 시스템에 연결하여 서로 다른 소스의 쿼리 실행</p>
                <ul class="feature-details">
                    <li>SQL Server, MySQL, PostgreSQL</li>
                    <li>연결 풀링</li>
                    <li>트랜잭션 지원</li>
                    <li>오류 처리</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Template Styles Showcase -->
<section class="template-styles">
    <div class="container">
        <h2 class="section-title">템플릿 스타일 시스템</h2>
        <p class="section-subtitle">7가지 사전 정의된 스타일로 전문적인 엑셀 보고서 생성</p>
        
        <div class="styles-grid">
            <div class="style-card">
                <div class="style-preview default-style">
                    <div class="style-header">기본 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>기본 스타일</h4>
                <p>전통적인 엑셀 디자인</p>
            </div>
            
            <div class="style-card">
                <div class="style-preview modern-style">
                    <div class="style-header">모던 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>모던 스타일</h4>
                <p>현대적인 디자인</p>
            </div>
            
            <div class="style-card">
                <div class="style-preview dark-style">
                    <div class="style-header">다크 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>다크 스타일</h4>
                <p>어두운 테마</p>
            </div>
            
            <div class="style-card">
                <div class="style-preview colorful-style">
                    <div class="style-header">컬러풀 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>컬러풀 스타일</h4>
                <p>다채로운 색상</p>
            </div>
            
            <div class="style-card">
                <div class="style-preview minimal-style">
                    <div class="style-header">미니멀 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>미니멀 스타일</h4>
                <p>간결한 디자인</p>
            </div>
            
            <div class="style-card">
                <div class="style-preview business-style">
                    <div class="style-header">비즈니스 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>비즈니스 스타일</h4>
                <p>업무용 스타일</p>
            </div>
            
            <div class="style-card">
                <div class="style-preview premium-style">
                    <div class="style-header">프리미엄 스타일</div>
                    <div class="style-content">
                        <div class="style-row header">제품명</div>
                        <div class="style-row">노트북</div>
                    </div>
                </div>
                <h4>프리미엄 스타일</h4>
                <p>고급스러운 디자인</p>
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
                <h3>플랫폼 및 런타임</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">플랫폼</span>
                        <span class="spec-value">Node.js 16.0+</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">엑셀 라이브러리</span>
                        <span class="spec-value">ExcelJS</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">운영체제</span>
                        <span class="spec-value">Windows, Linux, macOS</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">아키텍처</span>
                        <span class="spec-value">크로스 플랫폼</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>엑셀 생성</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">템플릿 스타일</span>
                        <span class="spec-value">7가지 사전 정의 스타일</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">멀티 시트 지원</span>
                        <span class="spec-value">파일당 무제한 시트</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">파일 검증</span>
                        <span class="spec-value">한글 문자 감지</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">별도 목차</span>
                        <span class="spec-value">독립적인 목차 파일</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>구성 및 변수</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">형식</span>
                        <span class="spec-value">XML, JSON</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">검증</span>
                        <span class="spec-value">내장 구성 검증</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">동적 변수</span>
                        <span class="spec-value">실시간 데이터 추출</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">CLI 인터페이스</span>
                        <span class="spec-value">명령줄 실행</span>
                    </div>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>데이터베이스 지원</h3>
                <div class="spec-items">
                    <div class="spec-item">
                        <span class="spec-label">SQL Server</span>
                        <span class="spec-value">암호화 포함 전체 지원</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">MySQL</span>
                        <span class="spec-value">완전한 호환성</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">PostgreSQL</span>
                        <span class="spec-value">전체 기능 지원</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">연결 풀링</span>
                        <span class="spec-value">최적화된 성능</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="use-cases">
    <div class="container">
        <h2 class="section-title">사용 사례</h2>
        <div class="use-cases-grid">
            <div class="use-case-card">
                <div class="use-case-icon">📊</div>
                <h3>비즈니스 보고서</h3>
                <p>여러 데이터 소스와 전문적인 스타일링을 통한 포괄적인 비즈니스 보고서 생성</p>
                <ul>
                    <li>템플릿이 적용된 매출 및 수익 보고서</li>
                    <li>동적 변수가 적용된 고객 분석</li>
                    <li>멀티 시트가 적용된 성과 대시보드</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📈</div>
                <h3>데이터 분석</h3>
                <p>향상된 포맷팅을 통해 원시 데이터베이스 데이터를 구조화된 엑셀 파일로 변환하여 분석</p>
                <ul>
                    <li>집계가 적용된 통계 분석</li>
                    <li>차트가 적용된 트렌드 식별</li>
                    <li>커스텀 스타일이 적용된 데이터 시각화</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📋</div>
                <h3>문서화 및 참조</h3>
                <p>목차가 포함된 데이터베이스 쿼리에서 문서 및 참조 자료 생성</p>
                <ul>
                    <li>별도 목차가 적용된 데이터 사전</li>
                    <li>검증이 적용된 참조 테이블</li>
                    <li>파일 검증이 적용된 감사 보고서</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🔄</div>
                <h3>자동화된 보고서</h3>
                <p>예약된 실행과 동적 콘텐츠를 통한 정기 보고서 생성 자동화</p>
                <ul>
                    <li>변수가 적용된 일일/주간 보고서</li>
                    <li>CLI가 적용된 자동화된 배포</li>
                    <li>스타일이 적용된 템플릿 기반 생성</li>
                </ul>
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

# 템플릿 스타일 사용
node src/excel-cli.js export --xml ./queries/sample-queries.xml --style modern

# 별도 목차 파일 생성
node src/excel-cli.js export --xml ./queries/sample-queries.xml --separate-toc

# 변수와 함께 실행
node src/excel-cli.js export --xml ./queries/report.xml \
  --var "year=2024" --var "quarter=Q1"

# 사용 가능한 스타일 목록
node src/excel-cli.js list-styles

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
npm run test-db</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="xml">
                <h3>XML 설정 파일 예제</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;queries separateToc="true" maxRows="10000"&gt;
  &lt;!-- 엑셀 파일 설정 --&gt;
  &lt;excel db="sampleDB" output="output/매출보고서_2024.xlsx" style="modern" separateToc="true"&gt;
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
  
  &lt;!-- 동적 변수 정의 --&gt;
  &lt;dynamicVars&gt;
    &lt;dynamicVar name="activeCustomers" description="활성 고객 목록"&gt;
      &lt;![CDATA[
        SELECT CustomerID, CustomerName, Region FROM Customers WHERE IsActive = 1
      ]]&gt;
    &lt;/dynamicVar&gt;
    &lt;dynamicVar name="productPrices" type="key_value_pairs" description="제품 가격"&gt;
      &lt;![CDATA[
        SELECT ProductID, UnitPrice FROM Products WHERE Discontinued = 0
      ]]&gt;
    &lt;/dynamicVar&gt;
  &lt;/dynamicVars&gt;
  
  &lt;!-- 시트 정의 --&gt;
  &lt;sheet name="월별매출_${year}" use="true" aggregateColumn="Month" maxRows="12" style="business"&gt;
    &lt;![CDATA[
      SELECT 
        MONTH(OrderDate) as Month,
        DATENAME(MONTH, OrderDate) as MonthName,
        COUNT(*) as OrderCount,
        SUM(TotalAmount) as TotalSales,
        AVG(TotalAmount) as AvgOrderAmount
      FROM Orders 
      WHERE YEAR(OrderDate) = ${year}
        AND CustomerID IN (${activeCustomers.CustomerID})
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
        AND c.CustomerID IN (${activeCustomers.CustomerID})
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
    "style": "modern",
    "separateToc": true,
    "maxRows": 10000,
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
  "dynamicVars": [
    {
      "name": "activeCustomers",
      "description": "활성 고객 목록",
      "query": "SELECT CustomerID, CustomerName FROM Customers WHERE IsActive = 1"
    },
    {
      "name": "productPrices",
      "type": "key_value_pairs",
      "description": "제품 가격",
      "query": "SELECT ProductID, UnitPrice FROM Products WHERE Discontinued = 0"
    }
  ],
  "sheets": [
    {
      "name": "월별매출_${year}",
      "use": true,
      "aggregateColumn": "Month",
      "maxRows": 12,
      "style": "business",
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
                <h3>템플릿 스타일 사용</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;!-- 전역 스타일 설정 --&gt;
&lt;excel db="sampleDB" output="output/Report.xlsx" style="modern"&gt;

&lt;!-- 시트별 스타일 설정 --&gt;
&lt;sheet name="SalesData" use="true" style="business"&gt;
  &lt;![CDATA[
    SELECT * FROM Sales
  ]]&gt;
&lt;/sheet&gt;

&lt;sheet name="CustomerData" use="true" style="premium"&gt;
  &lt;![CDATA[
    SELECT * FROM Customers
  ]]&gt;
&lt;/sheet&gt;</code></pre>
                </div>
                
                <h3>동적 변수 사용</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;!-- 동적 변수 정의 --&gt;
&lt;dynamicVars&gt;
  &lt;dynamicVar name="customerData" description="고객 정보"&gt;
    &lt;![CDATA[
      SELECT CustomerID, CustomerName, Region FROM Customers
    ]]&gt;
  &lt;/dynamicVar&gt;
  
  &lt;dynamicVar name="productPrices" type="key_value_pairs" description="제품 가격"&gt;
    &lt;![CDATA[
      SELECT ProductID, UnitPrice FROM Products WHERE Discontinued = 0
    ]]&gt;
  &lt;/dynamicVar&gt;
&lt;/dynamicVars&gt;

&lt;!-- 쿼리에서 동적 변수 사용 --&gt;
&lt;sheet name="OrderAnalysis" use="true"&gt;
  &lt;![CDATA[
    SELECT * FROM Orders 
    WHERE CustomerID IN (${customerData.CustomerID})
      AND ProductID IN (${productPrices.ProductID})
      AND Region IN (${customerData.Region})
  ]]&gt;
&lt;/sheet&gt;</code></pre>
                </div>
                
                <h3>별도 목차 생성</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">복사</button>
                    </div>
                    <pre><code>&lt;!-- XML에서 별도 목차 설정 --&gt;
&lt;queries separateToc="true"&gt;
  &lt;excel db="sampleDB" output="output/Report.xlsx" separateToc="true"&gt;

&lt;!-- CLI에서 별도 목차 생성 --&gt;
node src/excel-cli.js export --xml queries.xml --separate-toc</code></pre>
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
                    <h3>SQL2Excel v1.2.3</h3>
                    <div class="download-badge">최신 버전</div>
                </div>
                <div class="download-content">
                    <div class="version-info">
                        <div class="version-date">2025-01-15 릴리즈</div>
                        <div class="version-size">크기: ~8MB</div>
                    </div>
                    <ul class="version-features">
                        <li>✨ 7가지 템플릿 스타일 시스템</li>
                        <li>🔄 향상된 동적 변수 (key-value pairs)</li>
                        <li>📋 별도 목차 생성 기능</li>
                        <li>🔍 파일 검증 및 한글 경고</li>
                        <li>🎯 시트별 스타일링 지원</li>
                        <li>📊 멀티 시트 엑셀 생성</li>
                        <li>🔗 다중 DB 연결</li>
                        <li>⚡ CLI 및 배치 도구</li>
                    </ul>
                    <div class="download-actions">
                        <a href="https://github.com/happysoft2018/sql2excel/archive/refs/tags" class="btn btn-primary">
                            💾 ZIP 다운로드
                        </a>
                        <a href="https://github.com/happysoft2018/sql2excel/releases/tag" class="btn btn-secondary" target="_blank">
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
                        <a href="https://github.com/happysoft2018/sql2excel" class="btn btn-github" target="_blank">
                            📦 GitHub 저장소
                        </a>
                        <a href="https://github.com/happysoft2018/sql2excel/archive/refs/tags/v1.2.3.zip" class="btn btn-outline" target="_blank">
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
                <a href="sql2excel-manual_kr.php" class="btn btn-outline">매뉴얼 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">📋</div>
                <h3>변경 이력</h3>
                <p>모든 버전의 새로운 기능과 개선사항</p>
                <a href="https://github.com/happysoft2018/sql2excel/blob/main/CHANGELOG_KR.md" class="btn btn-outline">변경이력 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🎯</div>
                <h3>빠른 시작</h3>
                <p>3분 만에 첫 번째 엑셀 보고서 만들기</p>
                <a href="https://github.com/happysoft2018/sql2excel/blob/main/README_KR.md" class="btn btn-outline">빠른 시작</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">💡</div>
                <h3>템플릿 모음</h3>
                <p>다양한 업무용 엑셀 템플릿과 설정 예제</p>
                <a href="docs/sql2excel-templates.zip" class="btn btn-outline">템플릿 다운로드</a>
            </div>
            
        </div>
    </div>
</section>



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

<?php include 'includes/footer_kr.php'; ?>
