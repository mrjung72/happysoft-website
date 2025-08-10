<?php
$pageTitle = "HappySoft - 개발자 솔루션 포트폴리오";
$currentPage = "home";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <!-- Floating elements for visual interest -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">개발자를 위한 <span class="highlight">실용적 솔루션</span></h1>
            <p class="hero-subtitle">데이터 마이그레이션, 엑셀 생성, 유틸리티 도구까지<br>업무 효율성을 높이는 검증된 솔루션을 제공합니다</p>
            <div class="hero-buttons">
                <a href="#solutions" class="btn btn-primary">솔루션 둘러보기</a>
                <a href="#contact" class="btn btn-secondary">문의하기</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="code-animation">
                <div class="code-line">npm install sql2excel-exporter</div>
                <div class="code-line">node src/excel-cli.js export --xml queries.xml</div>
                <div class="code-line">✅ Excel file generated successfully!</div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Overview -->
<section id="solutions" class="solutions-section">
    <div class="container">
        <h2 class="section-title">주요 솔루션</h2>
        <p class="section-subtitle">실무에서 검증된 5가지 핵심 도구</p>
        
        <div class="solutions-grid">
            <!-- SQL2DB -->
            <div class="solution-card featured">
                <div class="solution-icon">🔄</div>
                <h3>SQL2DB</h3>
                <p class="solution-desc">SQL 데이터 마이그레이션 전문 도구</p>
                <ul class="feature-list">
                    <li>실시간 진행률 모니터링</li>
                    <li>전/후처리 스크립트 지원</li>
                    <li>컬럼 오버라이드 기능</li>
                    <li>동적 변수 시스템</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">MSSQL</span>
                    <span class="tech-tag">XML</span>
                </div>
                <a href="sql2db.php" class="btn btn-outline">자세히 보기</a>
            </div>

            <!-- SQL2Excel -->
            <div class="solution-card featured">
                <div class="solution-icon">📊</div>
                <h3>SQL2Excel</h3>
                <p class="solution-desc">SQL 쿼리 결과를 엑셀로 변환</p>
                <ul class="feature-list">
                    <li>멀티 시트 지원</li>
                    <li>고급 엑셀 스타일링</li>
                    <li>자동 목차 생성</li>
                    <li>다중 DB 연결</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">ExcelJS</span>
                    <span class="tech-tag">CLI</span>
                </div>
                <a href="sql2excel.php" class="btn btn-outline">자세히 보기</a>
            </div>

            <!-- Client Util -->
            <div class="solution-card">
                <div class="solution-icon">🛠️</div>
                <h3>Client Util App</h3>
                <p class="solution-desc">클라이언트 유틸리티 도구</p>
                <ul class="feature-list">
                    <li>MSSQL 연결 테스트</li>
                    <li>서버 텔넷 체크</li>
                    <li>SQL 실행 도구</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">CLI</span>
                </div>
                <a href="client-util.php" class="btn btn-outline">자세히 보기</a>
            </div>

            <!-- Vue3 App -->
            <div class="solution-card">
                <div class="solution-icon">🎨</div>
                <h3>Vue3 Web App</h3>
                <p class="solution-desc">모던 프론트엔드 애플리케이션</p>
                <ul class="feature-list">
                    <li>Vue 3 Composition API</li>
                    <li>Tailwind CSS</li>
                    <li>Vite 빌드 시스템</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">Tailwind</span>
                    <span class="tech-tag">Vite</span>
                </div>
                <a href="vue-app.php" class="btn btn-outline">자세히 보기</a>
            </div>

            <!-- Express Server -->
            <div class="solution-card">
                <div class="solution-icon">⚡</div>
                <h3>Express Server</h3>
                <p class="solution-desc">Node.js 백엔드 서버</p>
                <ul class="feature-list">
                    <li>RESTful API</li>
                    <li>미들웨어 구조</li>
                    <li>확장 가능한 아키텍처</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Express.js</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">REST</span>
                </div>
                <a href="express-server.php" class="btn btn-outline">자세히 보기</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="features-content">
            <div class="features-text">
                <h2>왜 우리 솔루션을 선택해야 할까요?</h2>
                <div class="feature-item">
                    <div class="feature-icon">✅</div>
                    <div>
                        <h4>검증된 안정성</h4>
                        <p>실제 운영 환경에서 검증된 안정적인 솔루션</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🚀</div>
                    <div>
                        <h4>뛰어난 성능</h4>
                        <p>대용량 데이터 처리와 효율적인 메모리 관리</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📚</div>
                    <div>
                        <h4>완벽한 문서화</h4>
                        <p>상세한 매뉴얼과 예제로 쉬운 도입 가능</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🔧</div>
                    <div>
                        <h4>지속적인 지원</h4>
                        <p>버그 수정, 기능 개선 및 기술 지원 제공</p>
                    </div>
                </div>
            </div>
            <div class="features-image">
                <div class="stats-card">
                    <div class="stat">
                        <div class="stat-number">5</div>
                        <div class="stat-label">검증된 솔루션</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">기능 구현</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">기술 지원</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->
<section class="tech-section">
    <div class="container">
        <h2 class="section-title">기술 스택</h2>
        <div class="tech-grid">
            <div class="tech-category">
                <h3>Backend</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <span class="tech-icon">🟢</span>
                        <span>Node.js</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">🚀</span>
                        <span>Express.js</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">🐘</span>
                        <span>PHP</span>
                    </div>
                </div>
            </div>
            <div class="tech-category">
                <h3>Frontend</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <span class="tech-icon">💚</span>
                        <span>Vue.js 3</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">🎨</span>
                        <span>Tailwind CSS</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">⚡</span>
                        <span>Vite</span>
                    </div>
                </div>
            </div>
            <div class="tech-category">
                <h3>Database</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <span class="tech-icon">🔵</span>
                        <span>SQL Server</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">📊</span>
                        <span>Excel Integration</span>
                    </div>
                </div>
            </div>
            <div class="tech-category">
                <h3>Tools</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <span class="tech-icon">📦</span>
                        <span>NPM</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">🖥️</span>
                        <span>CLI Tools</span>
                    </div>
                    <div class="tech-item">
                        <span class="tech-icon">📝</span>
                        <span>XML/JSON</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">문의하기</h2>
        <p class="section-subtitle">솔루션에 대한 궁금한 점이나 도입 문의를 남겨주세요</p>
        
        <div class="contact-content">
            <div class="contact-info">
                <h3>연락처 정보</h3>
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div>
                        <strong>이메일</strong><br>
                        sql2excel.nodejs@gmail.com
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🌐</div>
                    <div>
                        <strong>웹사이트</strong><br>
                        sql2excel.com
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">💼</div>
                    <div>
                        <strong>업무 시간</strong><br>
                        평일 09:00 - 18:00 (KST)
                    </div>
                </div>
            </div>
            
            <form class="contact-form" method="POST" action="send-message.php">
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
                    <label for="solution">관심 솔루션</label>
                    <select id="solution" name="solution">
                        <option value="">선택해주세요</option>
                        <option value="sql2db">SQL2DB - 데이터 마이그레이션</option>
                        <option value="sql2excel">SQL2Excel - 엑셀 생성 도구</option>
                        <option value="client-util">Client Util App</option>
                        <option value="vue-app">Vue3 Web App</option>
                        <option value="express-server">Express Server</option>
                        <option value="all">전체 솔루션</option>
                        <option value="custom">커스텀 개발</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">메시지 *</label>
                    <textarea id="message" name="message" rows="5" required placeholder="솔루션에 대한 문의사항이나 요구사항을 자세히 작성해주세요."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">메시지 보내기</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
