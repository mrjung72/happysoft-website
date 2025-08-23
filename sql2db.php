<?php
$pageTitle = "SQL2DB - Data Migration Solution";
$currentPage = "sql2db";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div class="solution-hero-text">
                <div class="solution-badge">🔄 Data Migration</div>
                <h1>SQL2DB <span class="version">v2.3.0</span></h1>
                <p class="solution-tagline">Professional SQL data migration tool with real-time monitoring and advanced variable system</p>
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Migration Features</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Real-time</div>
                        <div class="stat-label">Progress Monitoring</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Display Modes</div>
                    </div>
                </div>
                <div class="solution-actions">
                    <a href="https://github.com/happysoft2018/sql2db/releases/tag/v2.3.0" class="btn btn-primary">Download</a>
                    <a href="sql2db-manual.php" class="btn btn-secondary">View Documentation</a>
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
                        <div class="terminal-title">SQL2DB Real-time Monitoring</div>
                    </div>
                    <div class="terminal-content">
                        <div class="terminal-line">$ node src/migrate-cli.js migrate config.xml</div>
                        <div class="terminal-line">🔄 SQL2DB migration started...</div>
                        <div class="terminal-line">📊 Progress: [████████████████████] 100% (1,250/1,250)</div>
                        <div class="terminal-line">⏱️  Duration: 00:02:34 | Avg Speed: 8.1 rows/sec</div>
                        <div class="terminal-line">✅ Migration completed! Total 1,250 records processed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="features-showcase">
    <div class="container">
        <h2 class="section-title">Key Features</h2>
        <div class="features-grid">
            <div class="feature-card featured">
                <div class="feature-icon">📊</div>
                <h3>Real-time Interactive Monitoring</h3>
                <p>Intuitive monitoring of migration progress through 5 display modes with keyboard interaction and real-time charts</p>
                <ul class="feature-details">
                    <li>Simple, Detailed, Error Log, Statistics, Log Stream modes</li>
                    <li>Real-time text-based charts and graphs</li>
                    <li>Smart notifications and threshold settings</li>
                    <li>Quick mode switching with keyboard shortcuts</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>SELECT * Auto Expansion</h3>
                <p>Automatically expand SELECT * statements to actual column names in pre/post-processing scripts for explicit and safe query execution</p>
                <ul class="feature-details">
                    <li>Table alias support</li>
                    <li>JOIN, WHERE, GROUP BY clause consideration</li>
                    <li>Feature control through environment variables</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>Pre/Post-processing Column Override</h3>
                <p>Automatically apply column override settings to INSERT and UPDATE statements to automate data transformation and enrichment</p>
                <ul class="feature-details">
                    <li>INSERT VALUES and INSERT SELECT statement support</li>
                    <li>UPDATE SET clause auto addition/modification</li>
                    <li>SQL functions and expressions support</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📝</div>
                <h3>Advanced SQL Parsing</h3>
                <p>Intelligent SQL parsing with comment processing and complex statement support for robust migration execution</p>
                <ul class="feature-details">
                    <li>Multi-line comment support</li>
                    <li>Complex SQL statement parsing</li>
                    <li>Error handling and recovery</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Dynamic Variables System</h3>
                <p>Extract and utilize data at runtime with flexible variable types for dynamic query generation</p>
                <ul class="feature-details">
                    <li>Column-identified and key-value pair types</li>
                    <li>Runtime data extraction</li>
                    <li>Variable substitution in queries</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Transaction Management</h3>
                <p>Comprehensive transaction support with automatic rollback and error recovery for data consistency</p>
                <ul class="feature-details">
                    <li>Automatic transaction management</li>
                    <li>Rollback on error</li>
                    <li>Isolation level configuration</li>
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
                <h3>Platform & Runtime</h3>
                <ul>
                    <li><strong>Platform:</strong> Node.js 14.0+</li>
                    <li><strong>Database:</strong> Microsoft SQL Server 2012+</li>
                    <li><strong>OS Support:</strong> Windows, Linux, macOS</li>
                    <li><strong>Architecture:</strong> Cross-platform</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Performance</h3>
                <ul>
                    <li><strong>Batch Size:</strong> Configurable (default: 1000)</li>
                    <li><strong>Memory Usage:</strong> Optimized for large datasets</li>
                    <li><strong>Connection Pool:</strong> Configurable pool management</li>
                    <li><strong>Monitoring:</strong> Real-time performance metrics</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Configuration</h3>
                <ul>
                    <li><strong>Format:</strong> XML, JSON</li>
                    <li><strong>Validation:</strong> Built-in configuration validation</li>
                    <li><strong>Environment:</strong> Environment variable support</li>
                    <li><strong>Logging:</strong> 5-level logging system</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Security</h3>
                <ul>
                    <li><strong>Authentication:</strong> SQL Server authentication</li>
                    <li><strong>Encryption:</strong> TLS/SSL support</li>
                    <li><strong>Input Validation:</strong> SQL injection prevention</li>
                    <li><strong>Access Control:</strong> Database permission management</li>
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
                <h3>Enterprise Data Migration</h3>
                <p>Large-scale data migration between different SQL Server instances with real-time monitoring and error handling.</p>
                <ul>
                    <li>Legacy system modernization</li>
                    <li>Database consolidation</li>
                    <li>Cloud migration projects</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📊</div>
                <h3>Data Warehouse ETL</h3>
                <p>Extract, transform, and load processes for data warehouse construction with advanced data transformation capabilities.</p>
                <ul>
                    <li>Data transformation</li>
                    <li>Aggregation processing</li>
                    <li>Incremental loading</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🔄</div>
                <h3>System Integration</h3>
                <p>Integration between different systems with data synchronization and transformation requirements.</p>
                <ul>
                    <li>API data synchronization</li>
                    <li>Third-party system integration</li>
                    <li>Data format conversion</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🛠️</div>
                <h3>Development & Testing</h3>
                <p>Development environment setup and testing data management with flexible configuration options.</p>
                <ul>
                    <li>Test data generation</li>
                    <li>Environment synchronization</li>
                    <li>Development workflow automation</li>
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
                <a href="https://github.com/happysoft2018/sql2db" class="btn btn-primary" target="_blank">
                    View on GitHub
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">📋</div>
                <h3>Documentation</h3>
                <p>Comprehensive user manual and API reference</p>
                <a href="https://github.com/happysoft2018/sql2db/blob/main/README.md" class="btn btn-secondary" target="_blank">
                    View Documentation
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">🔧</div>
                <h3>Quick Start</h3>
                <p>Get started in minutes with our quick start guide</p>
                <a href="https://github.com/happysoft2018/sql2db#quick-start" class="btn btn-outline" target="_blank">
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
                <p>Complete guide to using SQL2DB for data migration projects</p>
                <a href="sql2db-manual.php" target="_blank">Read Manual</a>
            </div>
            
            <div class="doc-card">
                <h3>API Reference</h3>
                <p>Detailed API documentation and configuration options</p>
                <a href="https://github.com/happysoft2018/sql2db/blob/main/README.md" target="_blank">View API</a>
            </div>
            
            <div class="doc-card">
                <h3>Examples</h3>
                <p>Practical examples and sample configurations</p>
                <a href="https://github.com/happysoft2018/sql2db/tree/main/queries" target="_blank">View Examples</a>
            </div>
            
            <div class="doc-card">
                <h3>Changelog</h3>
                <p>Version history and feature updates</p>
                <a href="https://github.com/happysoft2018/sql2db/blob/main/CHANGELOG.md" target="_blank">View Changelog</a>
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
                <a href="mailto:sql2db.nodejs@gmail.com" class="btn btn-outline">Contact Support</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>Issue Reporting</h3>
                <p>Report bugs and request new features</p>
                <a href="https://github.com/happysoft2018/sql2db/issues" class="btn btn-outline" target="_blank">Report Issue</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">💬</div>
                <h3>Community</h3>
                <p>Join our community for discussions and help</p>
                <a href="https://github.com/happysoft2018/sql2db/discussions" class="btn btn-outline" target="_blank">Join Discussion</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
