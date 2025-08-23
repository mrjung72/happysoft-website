<?php
$pageTitle = "HappySoft - 개발자 솔루션 포트폴리오";
$currentPage = "home";
include 'includes/header_kr.php';
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
                <a href="sql2db_kr.php" class="btn btn-outline">자세히 보기</a>
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
                <a href="sql2excel_kr.php" class="btn btn-outline">자세히 보기</a>
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
                <a href="client-util_kr.php" class="btn btn-outline">자세히 보기</a>
            </div>

            <!-- Vue3 App -->
            <div class="solution-card">
                <div class="solution-icon">🎨</div>
                <h3>Vue3 Web App</h3>
                <p class="solution-desc">모던 프론트엔드 애플리케이션</p>
                <ul class="feature-list">
                    <li>Vue 3 Composition API</li>
                    <li>Vite 빌드 시스템</li>
                    <li>Tailwind CSS 스타일링</li>
                    <li>반응형 디자인</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">Vite</span>
                    <span class="tech-tag">Tailwind</span>
                </div>
                <a href="vue-app_kr.php" class="btn btn-outline">자세히 보기</a>
            </div>

            <!-- Express Server -->
            <div class="solution-card">
                <div class="solution-icon">⚡</div>
                <h3>Express Server</h3>
                <p class="solution-desc">Node.js 백엔드 서버</p>
                <ul class="feature-list">
                    <li>RESTful API 설계</li>
                    <li>미들웨어 지원</li>
                    <li>데이터베이스 연동</li>
                    <li>인증 시스템</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">Express</span>
                    <span class="tech-tag">REST API</span>
                </div>
                <a href="express-server_kr.php" class="btn btn-outline">자세히 보기</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <h2 class="section-title">왜 HappySoft를 선택해야 할까요?</h2>
        <p class="section-subtitle">실무 개발 도전과제를 위한 전문적인 솔루션</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>고성능</h3>
                <p>대규모 데이터 처리에 최적화된 효율적인 알고리즘과 메모리 관리</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>엔터프라이즈 레벨</h3>
                <p>보안과 안정성을 고려하여 프로덕션 환경에 적합하게 구축</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>포괄적인 문서화</h3>
                <p>상세한 사용자 매뉴얼, API 문서, 실용적인 예제로 쉬운 도입</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>쉬운 통합</h3>
                <p>다양한 사용 사례에 대한 유연한 옵션으로 간단한 설정 및 구성</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>실시간 모니터링</h3>
                <p>더 나은 운영 가시성을 위한 실시간 진행 추적 및 상세한 로깅</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🌐</div>
                <h3>크로스 플랫폼</h3>
                <p>Windows, Linux, macOS 환경에서 원활하게 작동</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->
<section class="tech-stack-section">
    <div class="container">
        <h2 class="section-title">기술 스택</h2>
        <p class="section-subtitle">현대적이고 신뢰할 수 있는 기술로 구축</p>
        
        <div class="tech-categories">
            <div class="tech-category">
                <h3>백엔드</h3>
                <div class="tech-items">
                    <span class="tech-item">Node.js</span>
                    <span class="tech-item">PHP</span>
                    <span class="tech-item">Express.js</span>
                    <span class="tech-item">MySQL</span>
                    <span class="tech-item">MSSQL</span>
                </div>
            </div>
            
            <div class="tech-category">
                <h3>프론트엔드</h3>
                <div class="tech-items">
                    <span class="tech-item">Vue.js 3</span>
                    <span class="tech-item">HTML5</span>
                    <span class="tech-item">CSS3</span>
                    <span class="tech-item">JavaScript</span>
                    <span class="tech-item">Tailwind CSS</span>
                </div>
            </div>
            
            <div class="tech-category">
                <h3>도구 및 라이브러리</h3>
                <div class="tech-items">
                    <span class="tech-item">ExcelJS</span>
                    <span class="tech-item">Vite</span>
                    <span class="tech-item">Git</span>
                    <span class="tech-item">npm</span>
                    <span class="tech-item">CLI</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">연락하기</h2>
        <p class="section-subtitle">개발 워크플로우를 향상시킬 준비가 되셨나요? 요구사항을 논의해보세요.</p>
        
        <div class="contact-content">
            <div class="contact-info">
                <h3>연락처 정보</h3>
                <div class="contact-item">
                    <span class="contact-icon">📧</span>
                    <div>
                        <strong>이메일</strong><br>
                        <a href="mailto:happysoftinfodesk@gmail.com">happysoftinfodesk@gmail.com</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <span class="contact-icon">🌐</span>
                    <div>
                        <strong>웹사이트</strong><br>
                        <a href="https://happysoft.kr" target="_blank">happysoft.kr</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <span class="contact-icon">📦</span>
                    <div>
                        <strong>GitHub</strong><br>
                        <a href="https://github.com/happysoft2018" target="_blank">github.com/happysoft2018</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <form action="../send-message.php" method="POST" class="contact-form-inner">
                    <div class="form-group">
                        <label for="name">이름 *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">이메일 *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">회사</label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="solution">관심 솔루션</label>
                        <select id="solution" name="solution">
                            <option value="">솔루션 선택</option>
                            <option value="sql2db">SQL2DB - 데이터 마이그레이션</option>
                            <option value="sql2excel">SQL2Excel - 엑셀 생성</option>
                            <option value="client-util">Client Util App</option>
                            <option value="vue-app">Vue3 Web App</option>
                            <option value="express-server">Express Server</option>
                            <option value="custom">커스텀 개발</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">메시지 *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="프로젝트나 요구사항에 대해 알려주세요..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">메시지 보내기</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer_kr.php'; ?>

