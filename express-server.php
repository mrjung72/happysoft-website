<?php
$pageTitle = "Express Server - Node.js Backend Framework";
$currentPage = "express-server";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div>
                <div class="solution-badge">⚡ Node.js Backend Framework</div>
                <h1>Express Server</h1>
                <div class="version">v1.0.0</div>
                <p class="solution-tagline">
                    Fast, unopinionated web framework for Node.js<br>
                    Build robust APIs and web applications with Express.js
                </p>
                
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">REST</div>
                        <div class="stat-label">API</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Node.js</div>
                        <div class="stat-label">Runtime</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Fast</div>
                        <div class="stat-label">Performance</div>
                    </div>
                </div>
                
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">Download</a>
                    <a href="#documentation" class="btn btn-secondary">View Documentation</a>
                    <a href="https://github.com/happysoft2018/express-server" target="_blank" class="btn btn-github">
                        <span class="github-icon">📦</span>
                        GitHub
                    </a>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-header">
                    <div class="terminal-controls">
                        <div class="control red"></div>
                        <div class="control yellow"></div>
                        <div class="control green"></div>
                    </div>
                    <div class="terminal-title">Express Server</div>
                </div>
                <div class="terminal-content">
                    <div class="terminal-line">$ npm install express</div>
                    <div class="terminal-line">$ npm start</div>
                    <div class="terminal-line">Server running on port 3000</div>
                    <div class="terminal-line">GET /api/users - 200 OK</div>
                    <div class="terminal-line">POST /api/users - 201 Created</div>
                    <div class="terminal-line">PUT /api/users/1 - 200 OK</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Showcase -->
<section class="features-showcase">
    <div class="container">
        <h2 class="section-title">Key Features</h2>
        <p class="section-title">Powerful web framework for building scalable applications</p>
        
        <div class="features-grid">
            <!-- RESTful API -->
            <div class="feature-card featured">
                <div class="feature-icon">🌐</div>
                <h3>RESTful API Design</h3>
                <p>Build clean and scalable REST APIs with Express.js routing system</p>
                <ul class="feature-details">
                    <li>HTTP method routing (GET, POST, PUT, DELETE)</li>
                    <li>Route parameters and query strings</li>
                    <li>Middleware support</li>
                    <li>Error handling middleware</li>
                </ul>
            </div>
            
            <!-- Middleware System -->
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>Middleware System</h3>
                <p>Extensible middleware architecture for request processing</p>
                <ul class="feature-details">
                    <li>Built-in middleware (static, json, urlencoded)</li>
                    <li>Third-party middleware support</li>
                    <li>Custom middleware creation</li>
                    <li>Middleware chaining</li>
                </ul>
            </div>
            
            <!-- Database Integration -->
            <div class="feature-card">
                <div class="feature-icon">🗄️</div>
                <h3>Database Integration</h3>
                <p>Seamless integration with various database systems</p>
                <ul class="feature-details">
                    <li>MongoDB with Mongoose</li>
                    <li>SQL databases with Sequelize</li>
                    <li>Redis for caching</li>
                    <li>Connection pooling</li>
                </ul>
            </div>
            
            <!-- Authentication -->
            <div class="feature-card">
                <div class="feature-icon">🔐</div>
                <h3>Authentication & Security</h3>
                <p>Comprehensive authentication and security features</p>
                <ul class="feature-details">
                    <li>JWT token authentication</li>
                    <li>Session-based authentication</li>
                    <li>Password hashing with bcrypt</li>
                    <li>CORS and security headers</li>
                </ul>
            </div>
            
            <!-- File Upload -->
            <div class="feature-card">
                <div class="feature-icon">📁</div>
                <h3>File Upload & Storage</h3>
                <p>Handle file uploads and storage with ease</p>
                <ul class="feature-details">
                    <li>Multipart form data handling</li>
                    <li>File validation and filtering</li>
                    <li>Cloud storage integration</li>
                    <li>Image processing capabilities</li>
                </ul>
            </div>
            
            <!-- Performance -->
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Performance Optimization</h3>
                <p>Optimized for high-performance applications</p>
                <ul class="feature-details">
                    <li>Compression middleware</li>
                    <li>Response caching</li>
                    <li>Load balancing support</li>
                    <li>Memory leak prevention</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section class="tech-specs">
    <div class="container">
        <h2 class="section-title">Technical Specifications</h2>
        <div class="specs-grid">
            <div class="spec-category">
                <h3>Runtime & Framework</h3>
                <ul>
                    <li><strong>Runtime:</strong> Node.js 16.0+</li>
                    <li><strong>Framework:</strong> Express.js 4.18+</li>
                    <li><strong>Language:</strong> JavaScript/TypeScript</li>
                    <li><strong>Package Manager:</strong> npm, yarn</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Core Features</h3>
                <ul>
                    <li><strong>Routing:</strong> HTTP method routing</li>
                    <li><strong>Middleware:</strong> Extensible middleware system</li>
                    <li><strong>Templating:</strong> View engine support</li>
                    <li><strong>Static Files:</strong> Static file serving</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Database Support</h3>
                <ul>
                    <li><strong>NoSQL:</strong> MongoDB, Redis</li>
                    <li><strong>SQL:</strong> MySQL, PostgreSQL, SQLite</li>
                    <li><strong>ORM:</strong> Sequelize, Mongoose</li>
                    <li><strong>Migrations:</strong> Database migration tools</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Performance</h3>
                <ul>
                    <li><strong>Concurrency:</strong> Event-driven architecture</li>
                    <li><strong>Memory:</strong> Efficient memory management</li>
                    <li><strong>Scalability:</strong> Horizontal scaling support</li>
                    <li><strong>Monitoring:</strong> Performance monitoring tools</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="use-cases">
    <div class="container">
        <h2 class="section-title">Use Cases</h2>
        <div class="use-cases-grid">
            <div class="use-case-card">
                <div class="use-case-icon">🏢</div>
                <h3>Enterprise APIs</h3>
                <p>Build robust enterprise-grade APIs for business applications</p>
                <ul>
                    <li>RESTful API development</li>
                    <li>Microservices architecture</li>
                    <li>API versioning</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📱</div>
                <h3>Mobile Backends</h3>
                <p>Create scalable backends for mobile applications</p>
                <ul>
                    <li>User authentication</li>
                    <li>Push notifications</li>
                    <li>Real-time features</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🌐</div>
                <h3>Web Applications</h3>
                <p>Full-stack web applications with server-side rendering</p>
                <ul>
                    <li>Dynamic content generation</li>
                    <li>Session management</li>
                    <li>Form processing</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📊</div>
                <h3>Data Services</h3>
                <p>Data processing and analytics services</p>
                <ul>
                    <li>Data aggregation</li>
                    <li>Real-time analytics</li>
                    <li>Report generation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section">
    <div class="container">
        <h2 class="section-title">Download & Installation</h2>
        <div class="download-options">
            <div class="download-card">
                <div class="download-icon">📦</div>
                <h3>GitHub Repository</h3>
                <p>Latest source code and documentation</p>
                <a href="https://github.com/happysoft2018/express-server" class="btn btn-primary" target="_blank">
                    View on GitHub
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">📋</div>
                <h3>Documentation</h3>
                <p>Comprehensive user manual and API reference</p>
                <a href="https://github.com/happysoft2018/express-server/blob/main/README.md" class="btn btn-secondary" target="_blank">
                    View Documentation
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">🔧</div>
                <h3>Quick Start</h3>
                <p>Get started in minutes with our quick start guide</p>
                <a href="https://github.com/happysoft2018/express-server#quick-start" class="btn btn-outline" target="_blank">
                    Quick Start Guide
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Documentation Section -->
<section id="documentation" class="documentation-section">
    <div class="container">
        <h2 class="section-title">Documentation</h2>
        <div class="docs-grid">
            <div class="doc-card">
                <h3>User Manual</h3>
                <p>Complete guide to using Express Server for backend development</p>
                <a href="https://github.com/happysoft2018/express-server/blob/main/README.md" target="_blank">Read Manual</a>
            </div>
            
            <div class="doc-card">
                <h3>API Reference</h3>
                <p>Detailed API documentation and endpoint reference</p>
                <a href="https://github.com/happysoft2018/express-server/blob/main/API.md" target="_blank">View API</a>
            </div>
            
            <div class="doc-card">
                <h3>Examples</h3>
                <p>Practical examples and sample applications</p>
                <a href="https://github.com/happysoft2018/express-server/tree/main/examples" target="_blank">View Examples</a>
            </div>
            
            <div class="doc-card">
                <h3>Changelog</h3>
                <p>Version history and feature updates</p>
                <a href="https://github.com/happysoft2018/express-server/blob/main/CHANGELOG.md" target="_blank">View Changelog</a>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="support-section">
    <div class="container">
        <h2 class="section-title">Support & Community</h2>
        <div class="support-grid">
            <div class="support-card">
                <div class="support-icon">📧</div>
                <h3>Email Support</h3>
                <p>Get direct support from our development team</p>
                <a href="mailto:express.server@gmail.com" class="btn btn-outline">Contact Support</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>Issue Reporting</h3>
                <p>Report bugs and request new features</p>
                <a href="https://github.com/happysoft2018/express-server/issues" class="btn btn-outline" target="_blank">Report Issue</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">💬</div>
                <h3>Community</h3>
                <p>Join our community for discussions and help</p>
                <a href="https://github.com/happysoft2018/express-server/discussions" class="btn btn-outline" target="_blank">Join Discussion</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 