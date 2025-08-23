    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Company Info -->
                <div class="footer-section">
                    <div class="footer-brand">
                        <span class="brand-icon">⚙️</span>
                        <span class="brand-text">HappySoft</span>
                    </div>
                    <p class="footer-desc">
                        개발자를 위한 실용적이고 검증된 솔루션을 제공합니다.<br>
                        데이터 처리부터 웹 개발까지, 업무 효율성을 높이는 도구들을 만나보세요.
                    </p>
                    <div class="social-links">
                        <a href="mailto:happysoftinfodesk@gmail.com" class="social-link" title="이메일">📧</a>
                        <a href="https://github.com/happysoft2018" target="_blank" class="social-link" title="GitHub">📦</a>
                        <a href="https://happysoft.kr" target="_blank" class="social-link" title="웹사이트">🌐</a>
                    </div>
                </div>

                <!-- Solutions -->
                <div class="footer-section">
                    <h3 class="footer-title">솔루션</h3>
                    <ul class="footer-links">
                        <li><a href="sql2db_kr.php">SQL2DB - 데이터 마이그레이션</a></li>
                        <li><a href="sql2excel_kr.php">SQL2Excel - 엑셀 생성</a></li>
                        <li><a href="client-util_kr.php">Client Util App</a></li>
                        <li><a href="vue-app_kr.php">Vue3 Web App</a></li>
                        <li><a href="express-server_kr.php">Express Server</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="footer-section">
                    <h3 class="footer-title">리소스</h3>
                    <ul class="footer-links">
                        <li><a href="documentation_kr.php">문서</a></li>
                        <li><a href="download_kr.php">다운로드</a></li>
                        <li><a href="examples_kr.php">예제</a></li>
                        <li><a href="changelog_kr.php">변경 이력</a></li>
                        <li><a href="faq_kr.php">FAQ</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="footer-section">
                    <h3 class="footer-title">지원</h3>
                    <ul class="footer-links">
                        <li><a href="index_kr.php#contact">문의하기</a></li>
                        <li><a href="support_kr.php">기술 지원</a></li>
                        <li><a href="consulting_kr.php">컨설팅</a></li>
                        <li><a href="custom-development_kr.php">커스텀 개발</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        <p>&copy; <?= date('Y') ?> HappySoft. All rights reserved.</p>
                        <p class="version-info">
                            SQL2DB v2.3.0 | SQL2Excel v1.2.2 | 
                            <span class="update-date">최종 업데이트: <?= date('Y-m-d') ?></span>
                        </p>
                    </div>
                    <div class="footer-legal">
                        <a href="privacy_kr.php">개인정보처리방침</a>
                        <span class="separator">|</span>
                        <a href="terms_kr.php">이용약관</a>
                        <span class="separator">|</span>
                        <a href="license_kr.php">라이선스</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top" title="맨 위로">
        ↑
    </button>

    <!-- Scripts -->
    <script src="../assets/js/main.js"></script>
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-toggle').addEventListener('click', function() {
            const navMenu = document.getElementById('nav-menu');
            const navbar = document.getElementById('navbar');
            navMenu.classList.toggle('active');
            navbar.classList.toggle('mobile-active');
        });

        // Dropdown menu
        document.querySelectorAll('.dropdown-toggle').forEach(function(dropdown) {
            dropdown.addEventListener('click', function(e) {
                e.preventDefault();
                const dropdownMenu = this.nextElementSibling;
                dropdownMenu.classList.toggle('active');
            });
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                    menu.classList.remove('active');
                });
            }
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
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

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
