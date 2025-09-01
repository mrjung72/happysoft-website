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
                        Providing practical and proven solutions for developers.<br>
                        From data processing to web development, discover tools that enhance work efficiency.
                    </p>
                    <div class="social-links">
                        <a href="mailto:happysoftinfodesk@gmail.com" class="social-link" title="Email">📧</a>
                        <a href="https://github.com/happysoft2018" target="_blank" class="social-link" title="GitHub">📦</a>
                        <a href="https://happysoft.kr" target="_blank" class="social-link" title="Website">🌐</a>
                    </div>
                </div>

                <!-- Solutions -->
                <div class="footer-section">
                    <h3 class="footer-title">Solutions</h3>
                    <ul class="footer-links">
                        <li><a href="sql2db.php">SQL2DB - Data Migration</a></li>
                        <li><a href="sql2excel.php">SQL2Excel - Excel Generation</a></li>
                        <li><a href="client-util.php">Client Util App</a></li>
                        <li><a href="vue-app.php">Vue3 Web App</a></li>
                        <li><a href="express-server.php">Express Server</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="footer-section">
                    <h3 class="footer-title">Resources</h3>
                    <ul class="footer-links">
                        <li><a href="documentation.php">Documentation</a></li>
                        <li><a href="download.php">Download</a></li>
                        <li><a href="examples.php">Examples</a></li>
                        <li><a href="changelog.php">Changelog</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="footer-section">
                    <h3 class="footer-title">Support</h3>
                    <ul class="footer-links">
                        <li><a href="index.php#contact">Contact Us</a></li>
                        <li><a href="support.php">Technical Support</a></li>
                        <li><a href="consulting.php">Consulting</a></li>
                        <li><a href="custom-development.php">Custom Development</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        <p>&copy; <?= date('Y') ?> HappySoft. All rights reserved.</p>
                        <p class="version-info">
                            SQL2DB v2.7.1 | SQL2Excel v1.2.3 | 
                            <span class="update-date">Last Updated: <?= date('Y-m-d') ?></span>
                        </p>
                    </div>
                    <div class="footer-legal">
                        <a href="privacy.php">Privacy Policy</a>
                        <span class="separator">|</span>
                        <a href="terms.php">Terms of Service</a>
                        <span class="separator">|</span>
                        <a href="license.php">License</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top" title="Back to Top">
        ↑
    </button>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
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
