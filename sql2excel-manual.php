<?php
$pageTitle = "SQL2Excel User Manual - Complete Guide";
$currentPage = "sql2excel-manual";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="manual-hero">
    <div class="container">
        <div class="manual-hero-content">
            <div class="manual-hero-text">
                <div class="manual-badge">📖 User Manual</div>
                <h1>SQL2Excel User Manual</h1>
                <p class="manual-tagline">Complete guide covering all SQL2Excel features from installation to advanced functionality</p>
              
            </div>
        </div>
    </div>
</section>

<!-- Table of Contents -->
<section class="manual-toc">
    <div class="container">
        <h2 class="section-title">📖 Table of Contents</h2>
        <div class="toc-grid">
            <div class="toc-card">
                <h3>🎯 Overview</h3>
                <ul>
                    <li><a href="#overview">SQL2Excel Introduction</a></li>
                    <li><a href="#features">Key Features</a></li>
                    <li><a href="#architecture">Architecture</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🛠️ Installation & Setup</h3>
                <ul>
                    <li><a href="#requirements">System Requirements</a></li>
                    <li><a href="#installation">Installation</a></li>
                    <li><a href="#configuration">Database Configuration</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🚀 Basic Usage</h3>
                <ul>
                    <li><a href="#cli-basics">CLI Commands</a></li>
                    <li><a href="#xml-format">XML Configuration</a></li>
                    <li><a href="#json-format">JSON Configuration</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🎨 Advanced Features</h3>
                <ul>
                    <li><a href="#template-styles">Template Styles</a></li>
                    <li><a href="#dynamic-variables">Dynamic Variables</a></li>
                    <li><a href="#separate-toc">TOC Sheet</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>📋 Examples</h3>
                <ul>
                    <li><a href="#basic-examples">Basic Examples</a></li>
                    <li><a href="#advanced-examples">Advanced Examples</a></li>
                    <li><a href="#real-world">Real-world Examples</a></li>
                </ul>
            </div>
            
            <div class="toc-card">
                <h3>🔧 Troubleshooting</h3>
                <ul>
                    <li><a href="#troubleshooting">Common Issues</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#support">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="overview" class="manual-section">
    <div class="container">
        <h2 class="section-title">🎯 Overview</h2>
        
        <div class="overview-content">
            <div class="overview-text">
                <h3>What is SQL2Excel?</h3>
                <p>SQL2Excel is a Node.js-based tool for converting SQL query results into Excel files with advanced styling and template support features. It helps developers and data analysts easily transform database information into Excel format for reports and analysis materials.</p>
                
                <h3>Key Features</h3>
                <ul>
                    <li><strong>Multi-sheet Support</strong>: Store multiple SQL query results in separate sheets within a single Excel file</li>
                    <li><strong>Template Style System</strong>: Pre-defined Excel styling templates for consistent design</li>
                    <li><strong>Multiple DB Connections</strong>: Use different database connections for each sheet</li>
                    <li><strong>Enhanced Dynamic Variables</strong>: Extract values from database in real-time for advanced processing</li>
                    <li><strong>File Validation</strong>: Automatic filename validation and Korean character warnings</li>
                </ul>
            </div>
            
            <div class="overview-visual">
                <div class="feature-diagram">
                    <div class="diagram-step">
                        <div class="step-icon">📊</div>
                        <div class="step-text">SQL Query</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">⚙️</div>
                        <div class="step-text">SQL2Excel</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">📋</div>
                        <div class="step-text">Excel File</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Installation Section -->
<section id="installation" class="manual-section">
    <div class="container">
        <h2 class="section-title">🛠️ Installation & Setup</h2>
        
        <div class="installation-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>System Requirements</h3>
                <ul>
                    <li>Node.js 16.0 or higher</li>
                    <li>SQL Server 2012 or higher</li>
                    <li>Appropriate database permissions</li>
                    <li>Windows, Linux, macOS support</li>
                </ul>
            </div>
            
            <div class="step-card">
                <div class="step-number">2</div>
                <h3>Package Installation</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">bash</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code># Clone repository
git clone https://github.com/happysoft2018/sql2excel.git
cd sql2excel

# Install dependencies
npm install</code></pre>
                </div>
            </div>
            
            <div class="step-card">
                <div class="step-number">3</div>
                <h3>Database Configuration</h3>
                <p>Create config/dbinfo.json file and configure database connection information:</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>{
  "dbs": {
    "sampleDB": {
      "server": "localhost",
      "port": 1433,
      "database": "SampleDB",
      "user": "sa",
      "password": "yourpassword",
      "options": {
        "encrypt": false,
        "trustServerCertificate": true
      }
    }
  }
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Basic Usage Section -->
<section id="basic-usage" class="manual-section">
    <div class="container">
        <h2 class="section-title">🚀 Basic Usage</h2>
        
        <div class="usage-tabs">
            <div class="tab-nav">
                <button class="tab-btn active" data-tab="cli">CLI Commands</button>
                <button class="tab-btn" data-tab="xml">XML Configuration</button>
                <button class="tab-btn" data-tab="json">JSON Configuration</button>
            </div>
            
            <div class="tab-content active" id="cli">
                <h3>Basic CLI Command Usage</h3>
                
                <div class="command-examples">
                    <div class="command-card">
                        <h4>Basic Excel Generation</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/excel-cli.js export --xml ./queries/sample-queries.xml</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>Using Template Styles</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/excel-cli.js export --xml ./queries/sample-queries.xml --style modern</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>List Available Styles</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/excel-cli.js list-styles</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="xml">
                <h3>XML Configuration File Structure</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;queries maxRows="10000"&gt;
  &lt;!-- Excel file configuration --&gt;
  &lt;excel db="sampleDB" output="output/report.xlsx" style="modern"&gt;
    &lt;header&gt;
      &lt;font name="Arial" size="12" color="FFFFFF" bold="true"/&gt;
      &lt;fill color="4F81BD"/&gt;
      &lt;alignment horizontal="center" vertical="middle"/&gt;
    &lt;/header&gt;
    &lt;body&gt;
      &lt;font name="Arial" size="11" color="000000"/&gt;
      &lt;fill color="FFFFCC"/&gt;
    &lt;/body&gt;
  &lt;/excel&gt;
  
  &lt;!-- Variable definitions --&gt;
  &lt;vars&gt;
    &lt;var name="year"&gt;2024&lt;/var&gt;
    &lt;var name="month"&gt;12&lt;/var&gt;
  &lt;/vars&gt;
  
  &lt;!-- Sheet definitions --&gt;
  &lt;sheet name="SalesReport" use="true" aggregateColumn="Region"&gt;
    &lt;![CDATA[
      SELECT Region, SUM(Amount) as TotalAmount
      FROM Sales 
      WHERE YEAR(Date) = ${year}
      GROUP BY Region
    ]]&gt;
  &lt;/sheet&gt;
&lt;/queries&gt;</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="json">
                <h3>JSON Configuration File Structure</h3>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>{
  "excel": {
    "db": "sampleDB",
    "output": "output/report.xlsx",
    "style": "modern",
    "header": {
      "font": { "name": "Arial", "size": 12, "color": "FFFFFF", "bold": true },
      "fill": { "color": "4F81BD" },
      "alignment": { "horizontal": "center", "vertical": "middle" }
    },
    "body": {
      "font": { "name": "Arial", "size": 11, "color": "000000" },
      "fill": { "color": "FFFFCC" }
    }
  },
  "vars": {
    "year": "2024",
    "month": "12"
  },
  "sheets": [
    {
      "name": "SalesReport",
      "use": true,
      "aggregateColumn": "Region",
      "query": "SELECT Region, SUM(Amount) as TotalAmount FROM Sales WHERE YEAR(Date) = ${year} GROUP BY Region"
    }
  ]
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Features Section -->
<section id="advanced-features" class="manual-section">
    <div class="container">
        <h2 class="section-title">🎨 Advanced Features</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Template Style System</h3>
                <p>Provides consistent design with 7 pre-defined styles.</p>
                <div class="style-list">
                    <span class="style-tag">Default</span>
                    <span class="style-tag">Modern</span>
                    <span class="style-tag">Dark</span>
                    <span class="style-tag">Colorful</span>
                    <span class="style-tag">Minimal</span>
                    <span class="style-tag">Business</span>
                    <span class="style-tag">Premium</span>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Enhanced Dynamic Variables</h3>
                <p>Supports advanced processing by extracting values from database in real-time.</p>
                <ul>
                    <li>column_identified type</li>
                    <li>key_value_pairs type</li>
                    <li>Pre-execution variable processing</li>
                    <li>Debug mode support</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>Separate Table of Contents</h3>
                <p>Enhances report management efficiency by generating independent TOC Excel files.</p>
                <ul>
                    <li>Automatic TOC file generation</li>
                    <li>Timestamped filenames</li>
                    <li>Sheet-specific record count display</li>
                    <li>XML/CLI option control</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>File Validation System</h3>
                <p>Provides stable execution environment with automatic filename validation and Korean character warnings.</p>
                <ul>
                    <li>Korean filename auto-detection</li>
                    <li>English filename recommendations</li>
                    <li>File path validity checks</li>
                    <li>User-friendly error messages</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Examples Section -->
<section id="examples" class="manual-section">
    <div class="container">
        <h2 class="section-title">📋 Practical Examples</h2>
        
        <div class="examples-grid">
            <div class="example-card">
                <h3>📊 Sales Report Generation</h3>
                <p>Example of generating Excel reports by analyzing monthly sales data.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>&lt;sheet name="MonthlySales_${year}" use="true" style="business"&gt;
  &lt;![CDATA[
    SELECT 
      MONTH(OrderDate) as Month,
      DATENAME(MONTH, OrderDate) as MonthName,
      COUNT(*) as OrderCount,
      SUM(TotalAmount) as TotalSales
    FROM Orders 
    WHERE YEAR(OrderDate) = ${year}
    GROUP BY MONTH(OrderDate), DATENAME(MONTH, OrderDate)
    ORDER BY Month
  ]]&gt;
&lt;/sheet&gt;</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>👥 Customer Analysis Report</h3>
                <p>Example of customer purchase pattern analysis report.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">json</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>{
  "name": "CustomerAnalysis",
  "use": true,
  "style": "premium",
  "query": "SELECT c.CustomerName, COUNT(o.OrderID) as OrderCount, SUM(o.TotalAmount) as TotalPurchase FROM Customers c LEFT JOIN Orders o ON c.CustomerID = o.CustomerID GROUP BY c.CustomerID, c.CustomerName ORDER BY TotalPurchase DESC"
}</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>🔄 Dynamic Variable Usage</h3>
                <p>Example of using values retrieved from database in real-time for queries.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>&lt;dynamicVars&gt;
  &lt;dynamicVar name="activeCustomers"&gt;
    &lt;![CDATA[
      SELECT CustomerID FROM Customers WHERE IsActive = 1
    ]]&gt;
  &lt;/dynamicVar&gt;
&lt;/dynamicVars&gt;

&lt;sheet name="ActiveCustomerOrders"&gt;
  &lt;![CDATA[
    SELECT * FROM Orders 
    WHERE CustomerID IN (${activeCustomers.CustomerID})
  ]]&gt;
&lt;/sheet&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Troubleshooting Section -->
<section id="troubleshooting" class="manual-section">
    <div class="container">
        <h2 class="section-title">🔧 Troubleshooting</h2>
        
        <div class="troubleshooting-grid">
            <div class="trouble-card">
                <h3>❌ Connection Error</h3>
                <p><strong>Issue:</strong> Database connection fails.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Check connection information in config/dbinfo.json file</li>
                    <li>Verify SQL Server service is running</li>
                    <li>Check firewall settings</li>
                    <li>Verify user permissions</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>⚠️ Korean Filename Warning</h3>
                <p><strong>Issue:</strong> Warning appears when using Korean filenames.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Use English filenames when possible</li>
                    <li>Avoid special characters in filenames</li>
                    <li>Use underscore(_) instead of spaces</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>🔍 Variable Substitution Error</h3>
                <p><strong>Issue:</strong> Dynamic variables are not properly substituted.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Set DEBUG_VARIABLES=true environment variable</li>
                    <li>Check variable query results</li>
                    <li>Verify variable names and usage</li>
                    <li>Check database permissions</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>📊 Large Data Processing</h3>
                <p><strong>Issue:</strong> Memory shortage error occurs when processing large data.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Limit row count using maxRows property</li>
                    <li>Optimize queries</li>
                    <li>Utilize indexes</li>
                    <li>Consider batch processing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="manual-section">
    <div class="container">
        <h2 class="section-title">❓ Frequently Asked Questions</h2>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: What databases does SQL2Excel support?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: Currently supports SQL Server 2012 and above. Support for other databases like MySQL and PostgreSQL is planned for the future.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: Can I customize template styles?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: Yes, you can modify the templates/excel-styles.xml file to add new styles or modify existing ones.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: How is performance with large data processing?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: You can limit the number of rows to process using the maxRows property, and memory efficiency is improved through streaming processing.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: Is automated report generation possible?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: Yes, you can automate regular report generation using Windows batch files or schedulers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section id="support" class="manual-section">
    <div class="container">
        <h2 class="section-title">📞 Support & Contact</h2>
        
        <div class="support-grid">
            <div class="support-card">
                <div class="support-icon">📧</div>
                <h3>Email Support</h3>
                <p>For technical issues or inquiries, please contact us via email.</p>
                <a href="mailto:sql2excel.nodejs@gmail.com" class="btn btn-primary">Send Email</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>Issue Reporting</h3>
                <p>Report bugs or request features through GitHub issues.</p>
                <a href="https://github.com/happysoft2018/sql2excel/issues" class="btn btn-secondary" target="_blank">Report Issue</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">📚</div>
                <h3>Documentation & Examples</h3>
                <p>Find more detailed information and examples in the GitHub repository.</p>
                <a href="https://github.com/happysoft2018/sql2excel" class="btn btn-outline" target="_blank">Visit GitHub</a>
            </div>
        </div>
    </div>
</section>

<script>
// Tab functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});

// Copy code functionality
function copyCode(btn) {
    const codeBlock = btn.closest('.code-block').querySelector('code');
    const text = codeBlock.textContent;
    
    navigator.clipboard.writeText(text).then(function() {
        btn.textContent = 'Copied!';
        setTimeout(function() {
            btn.textContent = 'Copy';
        }, 2000);
    });
}

// FAQ toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const toggle = item.querySelector('.faq-toggle');
        
        question.addEventListener('click', function() {
            const isOpen = answer.style.display === 'block';
            
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.querySelector('.faq-answer').style.display = 'none';
                    otherItem.querySelector('.faq-toggle').textContent = '+';
                }
            });
            
            // Toggle current item
            answer.style.display = isOpen ? 'none' : 'block';
            toggle.textContent = isOpen ? '+' : '-';
        });
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
</script>

<?php include 'includes/footer.php'; ?>
