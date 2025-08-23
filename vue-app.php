<?php
$pageTitle = "Vue3 Web App - Modern Frontend Application";
$currentPage = "vue-app";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div>
                <div class="solution-badge">💎 Modern Frontend Application</div>
                <h1>Vue3 Web App</h1>
                <div class="version">v1.0.0</div>
                <p class="solution-tagline">
                    Modern web application based on Vue 3 Composition API<br>
                    Fast and beautiful user interface using Tailwind CSS and Vite
                </p>
                
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">Vue 3</div>
                        <div class="stat-label">Framework</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Tailwind</div>
                        <div class="stat-label">Styling</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Vite</div>
                        <div class="stat-label">Build Tool</div>
                    </div>
                </div>
                
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">Download</a>
                    <a href="#documentation" class="btn btn-secondary">View Documentation</a>
                    <a href="https://github.com/happysoft2018/vue3-app" target="_blank" class="btn btn-github">
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
                    <div class="terminal-title">Vue3 Web App</div>
                </div>
                <div class="terminal-content">
                    <div class="terminal-line">$ npm create vue@latest my-app</div>
                    <div class="terminal-line">$ cd my-app</div>
                    <div class="terminal-line">$ npm install</div>
                    <div class="terminal-line">$ npm run dev</div>
                    <div class="terminal-line">✓ Local: http://localhost:5173/</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Showcase -->
<section class="features-showcase">
    <div class="container">
        <h2 class="section-title">Key Features</h2>
        <p class="section-subtitle">Modern web application utilizing the latest Vue 3 features</p>
        
        <div class="features-grid">
            <!-- Vue 3 Composition API -->
            <div class="feature-card featured">
                <div class="feature-icon">⚡</div>
                <h3>Vue 3 Composition API</h3>
                <p>Reactive component development using Vue 3's revolutionary Composition API</p>
                <ul class="feature-details">
                    <li>setup() function-based components</li>
                    <li>ref() and reactive() reactive system</li>
                    <li>computed() and watch() effects</li>
                    <li>Composables pattern utilization</li>
                </ul>
            </div>
            
            <!-- Tailwind CSS -->
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Tailwind CSS</h3>
                <p>Utility-first CSS framework for rapid and consistent design system</p>
                <ul class="feature-details">
                    <li>Utility class-based styling</li>
                    <li>Responsive design support</li>
                    <li>Dark mode support</li>
                    <li>Custom theme configuration</li>
                </ul>
            </div>
            
            <!-- Vite Build System -->
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Vite Build System</h3>
                <p>Next-generation frontend build tool for lightning-fast development</p>
                <ul class="feature-details">
                    <li>Instant hot module replacement</li>
                    <li>Optimized production builds</li>
                    <li>Plugin ecosystem</li>
                    <li>TypeScript support</li>
                </ul>
            </div>
            
            <!-- Responsive Design -->
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Responsive Design</h3>
                <p>Mobile-first responsive design that works on all devices</p>
                <ul class="feature-details">
                    <li>Mobile-first approach</li>
                    <li>Flexible grid system</li>
                    <li>Touch-friendly interfaces</li>
                    <li>Cross-browser compatibility</li>
                </ul>
            </div>
            
            <!-- State Management -->
            <div class="feature-card">
                <div class="feature-icon">🗂️</div>
                <h3>State Management</h3>
                <p>Efficient state management with Pinia for scalable applications</p>
                <ul class="feature-details">
                    <li>Pinia store management</li>
                    <li>Type-safe state</li>
                    <li>DevTools integration</li>
                    <li>Modular store design</li>
                </ul>
            </div>
            
            <!-- Performance Optimization -->
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Performance Optimization</h3>
                <p>Optimized for speed with lazy loading and code splitting</p>
                <ul class="feature-details">
                    <li>Lazy component loading</li>
                    <li>Code splitting</li>
                    <li>Tree shaking</li>
                    <li>Bundle optimization</li>
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
                <h3>Frontend Framework</h3>
                <ul>
                    <li><strong>Framework:</strong> Vue.js 3.3+</li>
                    <li><strong>Build Tool:</strong> Vite 4.0+</li>
                    <li><strong>Styling:</strong> Tailwind CSS 3.0+</li>
                    <li><strong>Language:</strong> TypeScript 5.0+</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Development Tools</h3>
                <ul>
                    <li><strong>Package Manager:</strong> npm/yarn</li>
                    <li><strong>Linting:</strong> ESLint + Prettier</li>
                    <li><strong>Testing:</strong> Vitest + Vue Test Utils</li>
                    <li><strong>DevTools:</strong> Vue DevTools</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Browser Support</h3>
                <ul>
                    <li><strong>Modern Browsers:</strong> Chrome 90+, Firefox 88+</li>
                    <li><strong>Safari:</strong> 14+</li>
                    <li><strong>Edge:</strong> 90+</li>
                    <li><strong>Mobile:</strong> iOS Safari 14+, Chrome Mobile 90+</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Performance</h3>
                <ul>
                    <li><strong>Bundle Size:</strong> Optimized for production</li>
                    <li><strong>Loading Speed:</strong> Fast initial load</li>
                    <li><strong>Runtime:</strong> Efficient memory usage</li>
                    <li><strong>SEO:</strong> Server-side rendering ready</li>
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
                <div class="use-case-icon">💼</div>
                <h3>Business Applications</h3>
                <p>Modern business applications with rich user interfaces and real-time data</p>
                <ul>
                    <li>Dashboard applications</li>
                    <li>Admin panels</li>
                    <li>Data visualization</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🛒</div>
                <h3>E-commerce Platforms</h3>
                <p>Fast and responsive e-commerce solutions with modern UX</p>
                <ul>
                    <li>Product catalogs</li>
                    <li>Shopping carts</li>
                    <li>User accounts</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📊</div>
                <h3>Data Visualization</h3>
                <p>Interactive data visualization and analytics dashboards</p>
                <ul>
                    <li>Charts and graphs</li>
                    <li>Real-time monitoring</li>
                    <li>Interactive reports</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🎮</div>
                <h3>Interactive Applications</h3>
                <p>Highly interactive applications with smooth animations</p>
                <ul>
                    <li>Gaming interfaces</li>
                    <li>Interactive forms</li>
                    <li>Real-time collaboration</li>
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
                <a href="https://github.com/happysoft2018/vue3-app" class="btn btn-primary" target="_blank">
                    View on GitHub
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">📋</div>
                <h3>Documentation</h3>
                <p>Comprehensive user manual and API reference</p>
                <a href="https://github.com/happysoft2018/vue3-app/blob/main/README.md" class="btn btn-secondary" target="_blank">
                    View Documentation
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">🔧</div>
                <h3>Quick Start</h3>
                <p>Get started in minutes with our quick start guide</p>
                <a href="https://github.com/happysoft2018/vue3-app#quick-start" class="btn btn-outline" target="_blank">
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
                <p>Complete guide to using Vue3 Web App for frontend development</p>
                <a href="https://github.com/happysoft2018/vue3-app/blob/main/README.md" target="_blank">Read Manual</a>
            </div>
            
            <div class="doc-card">
                <h3>API Reference</h3>
                <p>Detailed API documentation and component reference</p>
                <a href="https://github.com/happysoft2018/vue3-app/blob/main/API.md" target="_blank">View API</a>
            </div>
            
            <div class="doc-card">
                <h3>Examples</h3>
                <p>Practical examples and sample components</p>
                <a href="https://github.com/happysoft2018/vue3-app/tree/main/examples" target="_blank">View Examples</a>
            </div>
            
            <div class="doc-card">
                <h3>Changelog</h3>
                <p>Version history and feature updates</p>
                <a href="https://github.com/happysoft2018/vue3-app/blob/main/CHANGELOG.md" target="_blank">View Changelog</a>
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
                <a href="mailto:vue3.app@gmail.com" class="btn btn-outline">Contact Support</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>Issue Reporting</h3>
                <p>Report bugs and request new features</p>
                <a href="https://github.com/happysoft2018/vue3-app/issues" class="btn btn-outline" target="_blank">Report Issue</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">💬</div>
                <h3>Community</h3>
                <p>Join our community for discussions and help</p>
                <a href="https://github.com/happysoft2018/vue3-app/discussions" class="btn btn-outline" target="_blank">Join Discussion</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 