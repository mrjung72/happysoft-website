<?php
$pageTitle = "SQL2DB - 데이터 마이그레이션 솔루션";
$currentPage = "sql2db";
include 'includes/header_kr.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div class="solution-hero-text">
                <div class="solution-badge">🔄 데이터 마이그레이션</div>
                <h1>SQL2DB <span class="version">v2.7.1</span></h1>
                <p class="solution-tagline">실시간 모니터링, 고급 변수 시스템, 지능형 SQL 처리를 갖춘 전문적인 SQL 데이터 마이그레이션 도구</p>
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">고급 기능</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5개</div>
                        <div class="stat-label">디스플레이 모드</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">실시간</div>
                        <div class="stat-label">진행률 모니터링</div>
                    </div>
                </div>
                <div class="solution-actions">
                    <a href="https://github.com/happysoft2018/sql2db/releases/" class="btn btn-primary">다운로드</a>
                    <a href="sql2db-manual_kr.php" class="btn btn-secondary">문서 보기</a>
                    <a href="https://github.com/happysoft2018/sql2db" class="btn btn-github" target="_blank">
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
                        <div class="terminal-line">🔄 'r' 재시작, 's' 통계, 'd' 상세보기</div>
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
                <div class="feature-icon">🖥️</div>
                <h3>실시간 인터랙티브 모니터링</h3>
                <p>키보드 인터랙션을 통한 5가지 디스플레이 모드와 실시간 차트로 마이그레이션 진행 상황을 직관적으로 확인</p>
                <ul class="feature-details">
                    <li>Simple, Detailed, Error Log, Statistics, Log Stream 모드</li>
                    <li>실시간 텍스트 기반 차트 및 그래프</li>
                    <li>스마트 알림 및 임계값 설정</li>
                    <li>키보드 단축키를 통한 빠른 모드 전환</li>
                </ul>
            </div>
            
            <div class="feature-card featured">
                <div class="feature-icon">🔄</div>
                <h3>지능형 SQL 처리</h3>
                <p>SELECT * 자동 확장과 전/후처리 컬럼 오버라이드를 통한 고급 SQL 파싱</p>
                <ul class="feature-details">
                    <li>SELECT * 자동 확장으로 실제 컬럼명 해결</li>
                    <li>테이블 별칭 및 JOIN 절 지원</li>
                    <li>전/후처리 컬럼 오버라이드 자동화</li>
                    <li>INSERT/UPDATE 구문 자동 향상</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
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
                <div class="feature-icon">🔄</div>
                <h3>마이그레이션 재시작</h3>
                <p>중단된 마이그레이션을 마지막 완료 지점에서 진행률 추적과 함께 재시작</p>
                <ul class="feature-details">
                    <li>자동 진행률 추적 및 체크포인팅</li>
                    <li>네트워크 오류 복구</li>
                    <li>마이그레이션 ID 기반 재시작 기능</li>
                    <li>재시작 전 진행률 검증</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>유연한 설정</h3>
                <p>환경 변수 지원과 검증을 갖춘 XML 및 JSON 기반 설정</p>
                <ul class="feature-details">
                    <li>XML 및 JSON 설정 형식</li>
                    <li>환경 변수 치환</li>
                    <li>내장 설정 검증</li>
                    <li>전역 및 쿼리별 설정</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🚦</div>
                <h3>트랜잭션 지원</h3>
                <p>트랜잭션 지원과 배치 처리를 통한 데이터 일관성 보장</p>
                <ul class="feature-details">
                    <li>설정 가능한 배치 크기</li>
                    <li>오류 시 트랜잭션 롤백</li>
                    <li>삽입 전 삭제 옵션</li>
                    <li>데이터 무결성 보호</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section class="tech-specs">
    <div class="container">
        <h2 class="section-title">기술 사양</h2>
        <div class="specs-grid">
            <div class="spec-category">
                <h3>플랫폼 및 런타임</h3>
                <ul>
                    <li><strong>플랫폼:</strong> Node.js 14.0+</li>
                    <li><strong>데이터베이스:</strong> Microsoft SQL Server 2012+</li>
                    <li><strong>OS 지원:</strong> Windows, Linux, macOS</li>
                    <li><strong>아키텍처:</strong> 크로스 플랫폼</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>성능 및 모니터링</h3>
                <ul>
                    <li><strong>배치 크기:</strong> 구성 가능 (기본값: 1000)</li>
                    <li><strong>메모리 사용량:</strong> 대용량 데이터셋에 최적화</li>
                    <li><strong>디스플레이 모드:</strong> 5가지 인터랙티브 모니터링 모드</li>
                    <li><strong>진행률 추적:</strong> 재시작 기능이 있는 실시간 추적</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>구성 및 변수</h3>
                <ul>
                    <li><strong>형식:</strong> XML, JSON</li>
                    <li><strong>검증:</strong> 내장 구성 검증</li>
                    <li><strong>환경:</strong> 환경 변수 지원</li>
                    <li><strong>동적 변수:</strong> 실시간 데이터 추출</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>SQL 처리</h3>
                <ul>
                    <li><strong>SELECT * 확장:</strong> 자동 컬럼명 해결</li>
                    <li><strong>전/후처리:</strong> 컬럼 오버라이드 자동화</li>
                    <li><strong>트랜잭션 지원:</strong> 구성 가능한 배치 처리</li>
                    <li><strong>오류 처리:</strong> 포괄적인 오류 복구</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>보안</h3>
                <ul>
                    <li><strong>인증:</strong> SQL Server 인증</li>
                    <li><strong>암호화:</strong> TLS/SSL 지원</li>
                    <li><strong>입력 검증:</strong> SQL 인젝션 방지</li>
                    <li><strong>접근 제어:</strong> 데이터베이스 권한 관리</li>
                </ul>
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
                <h3>데이터 웨어하우스 ETL</h3>
                <p>고급 데이터 변환 기능을 갖춘 데이터 웨어하우스 구축을 위한 추출, 변환, 로드 프로세스</p>
                <ul>
                    <li>데이터 변환 및 보강</li>
                    <li>전/후처리 자동화</li>
                    <li>재시작 기능이 있는 증분 로딩</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🔄</div>
                <h3>시스템 통합</h3>
                <p>데이터 동기화 및 변환 요구사항이 있는 다양한 시스템 간의 통합</p>
                <ul>
                    <li>API 데이터 동기화</li>
                    <li>서드파티 시스템 통합</li>
                    <li>동적 변수 기반 변환</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🛠️</div>
                <h3>개발 및 테스팅</h3>
                <p>유연한 구성 옵션을 통한 개발 환경 설정 및 테스팅 데이터 관리</p>
                <ul>
                    <li>테스트 데이터 생성 및 마이그레이션</li>
                    <li>환경 동기화</li>
                    <li>개발 워크플로우 자동화</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section">
    <div class="container">
        <h2 class="section-title">다운로드 및 설치</h2>
        <div class="download-options">
            <div class="download-card">
                <div class="download-icon">📦</div>
                <h3>GitHub 저장소</h3>
                <p>최신 소스 코드 및 문서</p>
                <a href="https://github.com/happysoft2018/sql2db" class="btn btn-primary" target="_blank">
                    GitHub에서 보기
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">📋</div>
                <h3>문서</h3>
                <p>포괄적인 사용자 매뉴얼 및 API 참조</p>
                <a href="sql2db-manual_kr.php" class="btn btn-secondary" target="_blank">
                    문서 보기
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">🔧</div>
                <h3>빠른 시작</h3>
                <p>빠른 시작 가이드로 몇 분 안에 시작</p>
                <a href="https://github.com/happysoft2018/sql2db/blob/main/README_KR.md" class="btn btn-outline" target="_blank">
                    빠른 시작 가이드
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Documentation Section -->
<section id="documentation" class="documentation-section">
    <div class="container">
        <h2 class="section-title">문서</h2>
        <div class="docs-grid">
            <div class="doc-card">
                <h3>사용자 매뉴얼</h3>
                <p>데이터 마이그레이션 프로젝트를 위한 SQL2DB 사용 완전 가이드</p>
                <a href="sql2db-manual_kr.php" target="_blank">매뉴얼 읽기</a>
            </div>
            
            <div class="doc-card">
                <h3>API 참조</h3>
                <p>상세한 API 문서 및 구성 옵션</p>
                <a href="https://github.com/happysoft2018/sql2db/blob/main/README_KR.md" target="_blank">API 보기</a>
            </div>
            
            <div class="doc-card">
                <h3>예제</h3>
                <p>실용적인 예제 및 샘플 구성</p>
                <a href="https://github.com/happysoft2018/sql2db/tree/main/queries" target="_blank">예제 보기</a>
            </div>
            
            <div class="doc-card">
                <h3>변경 이력</h3>
                <p>버전 히스토리 및 기능 업데이트</p>
                <a href="https://github.com/happysoft2018/sql2db/blob/main/CHANGELOG_KR.md" target="_blank">변경 이력 보기</a>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="support-section">
    <div class="container">
        <h2 class="section-title">지원 및 커뮤니티</h2>
        <div class="support-grid">
            <div class="support-card">
                <div class="support-icon">📧</div>
                <h3>이메일 지원</h3>
                <p>개발팀으로부터 직접 지원 받기</p>
                <a href="mailto:sql2db.nodejs@gmail.com" class="btn btn-outline">지원 문의</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>이슈 보고</h3>
                <p>버그 신고 및 새 기능 요청</p>
                <a href="https://github.com/happysoft2018/sql2db/issues" class="btn btn-outline" target="_blank">이슈 신고</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">💬</div>
                <h3>커뮤니티</h3>
                <p>토론과 도움을 위한 커뮤니티 참여</p>
                <a href="https://github.com/happysoft2018/sql2db/discussions" class="btn btn-outline" target="_blank">토론 참여</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer_kr.php'; ?>
