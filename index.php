<?php
$pageTitle = "HappySoft - Developer Solutions Portfolio";
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
            <h1 class="hero-title">Practical Solutions for <span class="highlight">Developers</span></h1>
            <p class="hero-subtitle">From data migration to Excel generation and utility tools<br>We provide proven solutions that enhance work efficiency</p>
            <div class="hero-buttons">
                <a href="#solutions" class="btn btn-primary">Explore Solutions</a>
                <a href="#contact" class="btn btn-secondary">Contact Us</a>
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
        <h2 class="section-title">Key Solutions</h2>
        <p class="section-subtitle">5 core tools proven in real-world applications</p>
        
        <div class="solutions-grid">
            <!-- SQL2DB -->
            <div class="solution-card featured">
                <div class="solution-icon">🔄</div>
                <h3>SQL2DB</h3>
                <p class="solution-desc">Professional SQL data migration tool</p>
                <ul class="feature-list">
                    <li>Real-time progress monitoring</li>
                    <li>Pre/post-processing script support</li>
                    <li>Column override functionality</li>
                    <li>Dynamic variable system</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">MSSQL</span>
                    <span class="tech-tag">XML</span>
                </div>
                <a href="sql2db.php" class="btn btn-outline">Learn More</a>
            </div>

            <!-- SQL2Excel -->
            <div class="solution-card featured">
                <div class="solution-icon">📊</div>
                <h3>SQL2Excel</h3>
                <p class="solution-desc">Convert SQL query results to Excel</p>
                <ul class="feature-list">
                    <li>Multi-sheet support</li>
                    <li>Advanced Excel styling</li>
                    <li>Auto table of contents</li>
                    <li>Multiple DB connections</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">ExcelJS</span>
                    <span class="tech-tag">CLI</span>
                </div>
                <a href="sql2excel.php" class="btn btn-outline">Learn More</a>
            </div>

            <!-- Client Util -->
            <div class="solution-card">
                <div class="solution-icon">🛠️</div>
                <h3>Client Util App</h3>
                <p class="solution-desc">Client utility tools</p>
                <ul class="feature-list">
                    <li>MSSQL connection testing</li>
                    <li>Server telnet checking</li>
                    <li>SQL execution tools</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">CLI</span>
                </div>
                <a href="client-util.php" class="btn btn-outline">Learn More</a>
            </div>

            <!-- Vue3 App -->
            <div class="solution-card">
                <div class="solution-icon">🎨</div>
                <h3>Vue3 Web App</h3>
                <p class="solution-desc">Modern frontend application</p>
                <ul class="feature-list">
                    <li>Vue 3 Composition API</li>
                    <li>Vite build system</li>
                    <li>Tailwind CSS styling</li>
                    <li>Responsive design</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">Vite</span>
                    <span class="tech-tag">Tailwind</span>
                </div>
                <a href="vue-app.php" class="btn btn-outline">Learn More</a>
            </div>

            <!-- Express Server -->
            <div class="solution-card">
                <div class="solution-icon">⚡</div>
                <h3>Express Server</h3>
                <p class="solution-desc">Node.js backend server</p>
                <ul class="feature-list">
                    <li>RESTful API design</li>
                    <li>Middleware support</li>
                    <li>Database integration</li>
                    <li>Authentication system</li>
                </ul>
                <div class="solution-tech">
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">Express</span>
                    <span class="tech-tag">REST API</span>
                </div>
                <a href="express-server.php" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <h2 class="section-title">Why Choose HappySoft?</h2>
        <p class="section-subtitle">Professional solutions designed for real-world development challenges</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>High Performance</h3>
                <p>Optimized for large-scale data processing with efficient algorithms and memory management.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Enterprise Ready</h3>
                <p>Built with security and reliability in mind, suitable for production environments.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>Comprehensive Documentation</h3>
                <p>Detailed user manuals, API documentation, and practical examples for easy adoption.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>Easy Integration</h3>
                <p>Simple setup and configuration with flexible options for various use cases.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Real-time Monitoring</h3>
                <p>Live progress tracking and detailed logging for better operational visibility.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🌐</div>
                <h3>Cross-platform</h3>
                <p>Works seamlessly across Windows, Linux, and macOS environments.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->
<section class="tech-stack-section">
    <div class="container">
        <h2 class="section-title">Technology Stack</h2>
        <p class="section-subtitle">Built with modern, reliable technologies</p>
        
        <div class="tech-categories">
            <div class="tech-category">
                <h3>Backend</h3>
                <div class="tech-items">
                    <span class="tech-item">Node.js</span>
                    <span class="tech-item">PHP</span>
                    <span class="tech-item">Express.js</span>
                    <span class="tech-item">MySQL</span>
                    <span class="tech-item">MSSQL</span>
                </div>
            </div>
            
            <div class="tech-category">
                <h3>Frontend</h3>
                <div class="tech-items">
                    <span class="tech-item">Vue.js 3</span>
                    <span class="tech-item">HTML5</span>
                    <span class="tech-item">CSS3</span>
                    <span class="tech-item">JavaScript</span>
                    <span class="tech-item">Tailwind CSS</span>
                </div>
            </div>
            
            <div class="tech-category">
                <h3>Tools & Libraries</h3>
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
        <h2 class="section-title">Get in Touch</h2>
        <p class="section-subtitle">Ready to enhance your development workflow? Let's discuss your needs.</p>
        
        <div class="contact-content">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="contact-item">
                    <span class="contact-icon">📧</span>
                    <div>
                        <strong>Email</strong><br>
                        <a href="mailto:happysoftinfodesk@gmail.com">happysoftinfodesk@gmail.com</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <span class="contact-icon">🌐</span>
                    <div>
                        <strong>Website</strong><br>
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
                <form action="send-message.php" method="POST" class="contact-form-inner">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="solution">Solution of Interest</label>
                        <select id="solution" name="solution">
                            <option value="">Select a solution</option>
                            <option value="sql2db">SQL2DB - Data Migration</option>
                            <option value="sql2excel">SQL2Excel - Excel Generation</option>
                            <option value="client-util">Client Util App</option>
                            <option value="vue-app">Vue3 Web App</option>
                            <option value="express-server">Express Server</option>
                            <option value="custom">Custom Development</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tell us about your project or requirements..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
