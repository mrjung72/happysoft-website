<?php
$pageTitle = "SQL2Excel - Excel Generation Solution";
$currentPage = "sql2excel";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero excel-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div class="solution-hero-text">
                <div class="solution-badge">📊 Excel Generation Tool</div>
                <h1>SQL2Excel <span class="version">v1.2.3</span></h1>
                <p class="solution-tagline">Professional tool for converting SQL query results into advanced styled and templated multi-sheet Excel files with enhanced dynamic variables</p>
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">7</div>
                        <div class="stat-label">Template Styles</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Enhanced</div>
                        <div class="stat-label">Dynamic Variables</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Separate</div>
                        <div class="stat-label">TOC Generation</div>
                    </div>
                </div>
                <div class="solution-actions">
                    <a href="https://github.com/happysoft2018/sql2excel/releases/" class="btn btn-primary">Download</a>
                    <a href="sql2excel-manual.php" class="btn btn-secondary">View Documentation</a>
                    <a href="https://github.com/happysoft2018/sql2excel" class="btn btn-github" target="_blank">
                        <span class="github-icon">📦</span> GitHub
                    </a>
                </div>
            </div>
            <div class="solution-hero-demo">
                <div class="excel-preview">
                    <div class="excel-header">
                        <div class="excel-tabs">
                            <div class="excel-tab active">Table of Contents</div>
                            <div class="excel-tab">Sales Report</div>
                            <div class="excel-tab">Order Analysis</div>
                            <div class="excel-tab">Customer Stats</div>
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
                            <div class="excel-cell link">📊 Sales Report</div>
                            <div class="excel-cell">1,250</div>
                            <div class="excel-cell">[Region] Seoul:450, Busan:320...</div>
                        </div>
                        <div class="excel-row">
                            <div class="excel-cell">2</div>
                            <div class="excel-cell link">📈 Order Analysis</div>
                            <div class="excel-cell">2,840</div>
                            <div class="excel-cell">[Status] Completed:2100, Pending:740</div>
                        </div>
                        <div class="excel-row">
                            <div class="excel-cell">3</div>
                            <div class="excel-cell link">👥 Customer Stats</div>
                            <div class="excel-cell">856</div>
                            <div class="excel-cell">[Grade] VIP:156, Regular:700</div>
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
        <h2 class="section-title">Key Features</h2>
        <div class="features-grid">
            <div class="feature-card featured">
                <div class="feature-icon">🎨</div>
                <h3>Template Style System</h3>
                <p>7 pre-defined Excel style templates for consistent design and professional report generation</p>
                <ul class="feature-details">
                    <li>Default, Modern, Dark, Colorful, Minimal, Business, Premium styles</li>
                    <li>Global and sheet-specific style application</li>
                    <li>Template style customization</li>
                    <li>Style listing via CLI</li>
                </ul>
            </div>
            
            <div class="feature-card featured">
                <div class="feature-icon">🔄</div>
                <h3>Enhanced Dynamic Variables</h3>
                <p>Extract values from database in real-time with advanced processing and key-value pairs support</p>
                <ul class="feature-details">
                    <li>column_identified and key_value_pairs types</li>
                    <li>Pre-execution variable processing and caching</li>
                    <li>Debug mode for variable substitution verification</li>
                    <li>Error handling and empty result replacement</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>Separate Table of Contents</h3>
                <p>Generate independent table of contents Excel files for enhanced report management and sharing</p>
                <ul class="feature-details">
                    <li>Automatic separate TOC file generation</li>
                    <li>Sheet-specific record count display</li>
                    <li>Timestamped filenames</li>
                    <li>XML/CLI option control</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>File Validation System</h3>
                <p>Automatic filename validation and Korean character warnings for stable execution environment</p>
                <ul class="feature-details">
                    <li>Korean filename auto-detection and warnings</li>
                    <li>English filename recommendations</li>
                    <li>File path validity checks</li>
                    <li>User-friendly error messages</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Multi-sheet Excel Generation</h3>
                <p>Organize multiple SQL query results into separate sheets within a single Excel file for systematic reporting</p>
                <ul class="feature-details">
                    <li>Independent query execution per sheet</li>
                    <li>Individual sheet enable/disable settings</li>
                    <li>Dynamic sheet names (variable support)</li>
                    <li>Maximum record limit per query</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔗</div>
                <h3>SQL Server Database Support</h3>
                <p>Connect to SQL Server database systems and execute queries from different sources</p>
                <p>(More database will be added in the future ...)</p>
                <ul class="feature-details">
                    <li>SQL Server</li>
                    <li>Connection pooling</li>
                    <li>Transaction support</li>
                    <li>Error handling</li>
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
                    <li><strong>Platform:</strong> Node.js 16.0+</li>
                    <li><strong>Excel Library:</strong> ExcelJS</li>
                    <li><strong>OS Support:</strong> Windows, Linux, macOS</li>
                    <li><strong>Architecture:</strong> Cross-platform</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Excel Generation</h3>
                <ul>
                    <li><strong>Template Styles:</strong> 7 pre-defined styles</li>
                    <li><strong>Multi-sheet Support:</strong> Unlimited sheets per file</li>
                    <li><strong>File Validation:</strong> Korean character detection</li>
                    <li><strong>Separate TOC:</strong> Independent table of contents</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Configuration & Variables</h3>
                <ul>
                    <li><strong>Format:</strong> XML, JSON</li>
                    <li><strong>Validation:</strong> Built-in configuration validation</li>
                    <li><strong>Dynamic Variables:</strong> Real-time data extraction</li>
                    <li><strong>CLI Interface:</strong> Command-line execution</li>
                </ul>
            </div>
            
            <div class="spec-category">
                <h3>Database Support</h3>
                <ul>
                    <li><strong>SQL Server:</strong> Full support with encryption</li>
                    <li><strong>Connection Pooling:</strong></li>
                    <li><strong>Transaction Support</strong></li>
                    <li><strong>Exception Handling</strong></li>
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
                <div class="use-case-icon">📊</div>
                <h3>Business Reporting</h3>
                <p>Generate comprehensive business reports with multiple data sources and professional styling</p>
                <ul>
                    <li>Sales and revenue reports with templates</li>
                    <li>Customer analytics with dynamic variables</li>
                    <li>Performance dashboards with multi-sheets</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📈</div>
                <h3>Data Analysis</h3>
                <p>Transform raw database data into structured Excel files for analysis with enhanced formatting</p>
                <ul>
                    <li>Statistical analysis with aggregation</li>
                    <li>Trend identification with charts</li>
                    <li>Data visualization with custom styles</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">📋</div>
                <h3>Documentation & Reference</h3>
                <p>Create documentation and reference materials from database queries with table of contents</p>
                <ul>
                    <li>Data dictionaries with separate TOC</li>
                    <li>Reference tables with validation</li>
                    <li>Audit reports with file validation</li>
                </ul>
            </div>
            
            <div class="use-case-card">
                <div class="use-case-icon">🔄</div>
                <h3>Automated Reporting</h3>
                <p>Automate regular report generation with scheduled execution and dynamic content</p>
                <ul>
                    <li>Daily/weekly reports with variables</li>
                    <li>Automated distribution with CLI</li>
                    <li>Template-based generation with styles</li>
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
                <a href="https://github.com/happysoft2018/sql2excel" class="btn btn-primary" target="_blank">
                    View on GitHub
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">📋</div>
                <h3>Documentation</h3>
                <p>Comprehensive user manual and API reference</p>
                <a href="sql2excel-manual.php" class="btn btn-secondary" target="_blank">
                    View Documentation
                </a>
            </div>
            
            <div class="download-card">
                <div class="download-icon">🔧</div>
                <h3>Quick Start</h3>
                <p>Get started in minutes with our quick start guide</p>
                <a href="https://github.com/happysoft2018/sql2excel#quick-start" class="btn btn-outline" target="_blank">
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
                <p>Complete guide to using SQL2Excel for Excel generation projects</p>
                <a href="sql2excel-manual.php" target="_blank">Read Manual</a>
            </div>
            
            <div class="doc-card">
                <h3>API Reference</h3>
                <p>Detailed API documentation and configuration options</p>
                <a href="https://github.com/happysoft2018/sql2excel/blob/main/README.md" target="_blank">View API</a>
            </div>
            
            <div class="doc-card">
                <h3>Examples</h3>
                <p>Practical examples and sample configurations</p>
                <a href="https://github.com/happysoft2018/sql2excel/tree/main/queries" target="_blank">View Examples</a>
            </div>
            
            <div class="doc-card">
                <h3>Changelog</h3>
                <p>Version history and feature updates</p>
                <a href="https://github.com/happysoft2018/sql2excel/blob/main/CHANGELOG.md" target="_blank">View Changelog</a>
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
                <a href="mailto:sql2excel.nodejs@gmail.com" class="btn btn-outline">Contact Support</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>Issue Reporting</h3>
                <p>Report bugs and request new features</p>
                <a href="https://github.com/happysoft2018/sql2excel/issues" class="btn btn-outline" target="_blank">Report Issue</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">💬</div>
                <h3>Community</h3>
                <p>Join our community for discussions and help</p>
                <a href="https://github.com/happysoft2018/sql2excel/discussions" class="btn btn-outline" target="_blank">Join Discussion</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
