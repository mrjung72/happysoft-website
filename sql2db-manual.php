<?php
$pageTitle = "SQL2DB User Manual - Complete Guide";
$currentPage = "sql2db-manual";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="manual-hero">
    <div class="container">
        <div class="manual-hero-content">
            <div class="manual-hero-text">
                <div class="manual-badge">📖 User Manual</div>
                <h1>SQL2DB User Manual</h1>
                <p class="manual-tagline">Complete guide covering all SQL2DB features from installation to advanced functionality</p>
              
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
                    <li><a href="#overview">SQL2DB Introduction</a></li>
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
                    <li><a href="#dynamic-variables">Dynamic Variables</a></li>
                    <li><a href="#monitoring">Real-time Monitoring</a></li>
                    <li><a href="#restart">Resume Migration</a></li>
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
                <h3>What is SQL2DB?</h3>
                <p>SQL2DB is a Node.js-based tool for efficiently performing data migration between Microsoft SQL Server instances. It provides advanced features such as large-scale data processing, real-time monitoring, and resume functionality to support stable and efficient data migration.</p>
                
                <h3>Key Features</h3>
                <ul>
                    <li><strong>Batch Data Migration</strong>: Optimized large-scale data processing</li>
                    <li><strong>Flexible Configuration</strong>: XML or JSON-based configuration</li>
                    <li><strong>Column Override</strong>: Modify/add specific column values during migration</li>
                    <li><strong>Pre/Post Processing</strong>: Execute SQL scripts before/after migration</li>
                    <li><strong>Dynamic Variables</strong>: Extract and utilize data at execution time</li>
                    <li><strong>Real-time Monitoring</strong>: Keyboard interactive monitoring and charts</li>
                    <li><strong>Resume Migration</strong>: Restart interrupted migration from the completed point</li>
                </ul>
            </div>
            
            <div class="overview-visual">
                <div class="feature-diagram">
                    <div class="diagram-step">
                        <div class="step-icon">📊</div>
                        <div class="step-text">Source DB</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">⚙️</div>
                        <div class="step-text">SQL2DB</div>
                    </div>
                    <div class="diagram-arrow">→</div>
                    <div class="diagram-step">
                        <div class="step-icon">🎯</div>
                        <div class="step-text">Target DB</div>
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
                    <li>Node.js 14.0 or higher</li>
                    <li>SQL Server 2012 or higher (source/target)</li>
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
git clone https://github.com/happysoft2018/sql2db.git
cd sql2db

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
    "sourceDB": {
      "server": "source-server.com",
      "port": 1433,
      "database": "source_database",
      "user": "username",
      "password": "password",
      "isWritable": false,
      "description": "Source database",
      "options": {
        "encrypt": true,
        "trustServerCertificate": true
      }
    },
    "targetDB": {
      "server": "target-server.com", 
      "port": 1433,
      "database": "target_database",
      "user": "username",
      "password": "password",
      "isWritable": true,
      "description": "Target database"
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
                        <h4>Validate Configuration</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/migrate-cli.js validate --query ./queries/migration-queries.xml</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>List Databases</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/migrate-cli.js list-dbs</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>Execute Data Migration</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/migrate-cli.js migrate --query ./queries/migration-queries.xml</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>Simulation Run (DRY RUN)</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/migrate-cli.js migrate --query ./queries/migration-queries.xml --dry-run</code></pre>
                        </div>
                    </div>
                    
                    <div class="command-card">
                        <h4>Resume Interrupted Migration</h4>
                        <div class="code-block">
                            <div class="code-header">
                                <span class="code-lang">bash</span>
                                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                            </div>
                            <pre><code>node src/migrate-cli.js migrate --query ./queries/migration-queries.xml --resume</code></pre>
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
&lt;migrations&gt;
  &lt;!-- Global settings --&gt;
  &lt;global&gt;
    &lt;batchSize&gt;1000&lt;/batchSize&gt;
    &lt;timeout&gt;30000&lt;/timeout&gt;
    &lt;retryCount&gt;3&lt;/retryCount&gt;
  &lt;/global&gt;
  
  &lt;!-- Dynamic variable definitions --&gt;
  &lt;dynamicVars&gt;
    &lt;dynamicVar name="currentDate"&gt;
      &lt;![CDATA[
        SELECT GETDATE() as CurrentDate
      ]]&gt;
    &lt;/dynamicVar&gt;
  &lt;/dynamicVars&gt;
  
  &lt;!-- Migration task definition --&gt;
  &lt;migration name="User_Data_Migration" use="true"&gt;
    &lt;source db="sourceDB"&gt;
      &lt;![CDATA[
        SELECT UserID, UserName, Email, CreatedDate
        FROM Users 
        WHERE CreatedDate >= '2024-01-01'
      ]]&gt;
    &lt;/source&gt;
    
    &lt;target db="targetDB" table="Users"&gt;
      &lt;columns&gt;
        &lt;column name="UserID" type="int" /&gt;
        &lt;column name="UserName" type="varchar(100)" /&gt;
        &lt;column name="Email" type="varchar(255)" /&gt;
        &lt;column name="CreatedDate" type="datetime" /&gt;
        &lt;column name="MigratedDate" type="datetime" override="true"&gt;${currentDate.CurrentDate}&lt;/column&gt;
      &lt;/columns&gt;
    &lt;/target&gt;
    
    &lt;!-- Pre-processing script --&gt;
    &lt;preProcess db="targetDB"&gt;
      &lt;![CDATA[
        DELETE FROM Users WHERE CreatedDate >= '2024-01-01'
      ]]&gt;
    &lt;/preProcess&gt;
    
    &lt;!-- Post-processing script --&gt;
    &lt;postProcess db="targetDB"&gt;
      &lt;![CDATA[
        UPDATE Users SET Status = 'Migrated' WHERE MigratedDate IS NOT NULL
      ]]&gt;
    &lt;/postProcess&gt;
  &lt;/migration&gt;
&lt;/migrations&gt;</code></pre>
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
  "global": {
    "batchSize": 1000,
    "timeout": 30000,
    "retryCount": 3
  },
  "dynamicVars": [
    {
      "name": "currentDate",
      "query": "SELECT GETDATE() as CurrentDate"
    }
  ],
  "migrations": [
    {
      "name": "User_Data_Migration",
      "use": true,
      "source": {
        "db": "sourceDB",
        "query": "SELECT UserID, UserName, Email, CreatedDate FROM Users WHERE CreatedDate >= '2024-01-01'"
      },
      "target": {
        "db": "targetDB",
        "table": "Users",
        "columns": [
          { "name": "UserID", "type": "int" },
          { "name": "UserName", "type": "varchar(100)" },
          { "name": "Email", "type": "varchar(255)" },
          { "name": "CreatedDate", "type": "datetime" },
          { "name": "MigratedDate", "type": "datetime", "override": true, "value": "${currentDate.CurrentDate}" }
        ]
      },
      "preProcess": {
        "db": "targetDB",
        "query": "DELETE FROM Users WHERE CreatedDate >= '2024-01-01'"
      },
      "postProcess": {
        "db": "targetDB",
        "query": "UPDATE Users SET Status = 'Migrated' WHERE MigratedDate IS NOT NULL"
      }
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
                <div class="feature-icon">🔄</div>
                <h3>Dynamic Variable System</h3>
                <p>Extract values from the database at execution time and utilize them in the migration process.</p>
                <ul>
                    <li>Real-time data extraction</li>
                    <li>Variable substitution and utilization</li>
                    <li>Complex query support</li>
                    <li>Debug mode support</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Real-time Monitoring</h3>
                <p>Track migration progress in real-time through keyboard interactive monitoring and charts.</p>
                <ul>
                    <li>Real-time progress display</li>
                    <li>Chart-based visualization</li>
                    <li>Keyboard interaction</li>
                    <li>Performance metrics display</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Resume Migration</h3>
                <p>Restart interrupted migration from the completed point due to network errors or other issues.</p>
                <ul>
                    <li>Progress state saving</li>
                    <li>Automatic restart support</li>
                    <li>Data consistency guarantee</li>
                    <li>Error recovery functionality</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>Pre/Post Processing</h3>
                <p>Execute SQL scripts before and after migration to perform data cleanup and validation.</p>
                <ul>
                    <li>Data cleanup scripts</li>
                    <li>Validation and verification</li>
                    <li>Index management</li>
                    <li>Statistics updates</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Column Override</h3>
                <p>Modify or add specific column values during migration.</p>
                <ul>
                    <li>Default value setting</li>
                    <li>Dynamic value assignment</li>
                    <li>Data transformation</li>
                    <li>Metadata addition</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📈</div>
                <h3>Batch Processing Optimization</h3>
                <p>Provides a batch processing system for efficient handling of large-scale data.</p>
                <ul>
                    <li>Memory efficiency</li>
                    <li>Performance optimization</li>
                    <li>Transaction management</li>
                    <li>Error handling</li>
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
                <h3>📊 User Data Migration</h3>
                <p>Basic example of migrating user table data from source to target.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>&lt;migration name="User_Migration" use="true"&gt;
  &lt;source db="sourceDB"&gt;
    &lt;![CDATA[
      SELECT UserID, UserName, Email, CreatedDate, Status
      FROM Users 
      WHERE Status = 'Active'
    ]]&gt;
  &lt;/source&gt;
  
  &lt;target db="targetDB" table="Users"&gt;
    &lt;columns&gt;
      &lt;column name="UserID" type="int" /&gt;
      &lt;column name="UserName" type="varchar(100)" /&gt;
      &lt;column name="Email" type="varchar(255)" /&gt;
      &lt;column name="CreatedDate" type="datetime" /&gt;
      &lt;column name="Status" type="varchar(20)" /&gt;
      &lt;column name="MigratedDate" type="datetime" override="true"&gt;${currentDate.CurrentDate}&lt;/column&gt;
    &lt;/columns&gt;
  &lt;/target&gt;
&lt;/migration&gt;</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>🔄 Dynamic Variable Usage</h3>
                <p>Example of extracting data at execution time and using it as migration conditions.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>&lt;dynamicVars&gt;
  &lt;dynamicVar name="lastSyncDate"&gt;
    &lt;![CDATA[
      SELECT MAX(LastModifiedDate) as LastSyncDate 
      FROM TargetDB.dbo.Products
    ]]&gt;
  &lt;/dynamicVar&gt;
&lt;/dynamicVars&gt;

&lt;migration name="Product_Migration"&gt;
  &lt;source db="sourceDB"&gt;
    &lt;![CDATA[
      SELECT ProductID, ProductName, Price, LastModifiedDate
      FROM Products 
      WHERE LastModifiedDate > ${lastSyncDate.LastSyncDate}
    ]]&gt;
  &lt;/source&gt;
&lt;/migration&gt;</code></pre>
                </div>
            </div>
            
            <div class="example-card">
                <h3>⚙️ Pre/Post Processing Usage</h3>
                <p>Example of performing data cleanup and validation before and after migration.</p>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">xml</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    </div>
                    <pre><code>&lt;migration name="Order_Migration"&gt;
  &lt;!-- Pre-processing: Clean existing data --&gt;
  &lt;preProcess db="targetDB"&gt;
    &lt;![CDATA[
      DELETE FROM Orders WHERE OrderDate >= '2024-01-01'
    ]]&gt;
  &lt;/preProcess&gt;
  
  &lt;source db="sourceDB"&gt;
    &lt;![CDATA[SELECT * FROM Orders WHERE OrderDate >= '2024-01-01']]&gt;
  &lt;/source&gt;
  
  &lt;target db="targetDB" table="Orders" /&gt;
  
  &lt;!-- Post-processing: Recreate indexes and update statistics --&gt;
  &lt;postProcess db="targetDB"&gt;
    &lt;![CDATA[
      CREATE INDEX IX_Orders_OrderDate ON Orders(OrderDate)
      UPDATE STATISTICS Orders
    ]]&gt;
  &lt;/postProcess&gt;
&lt;/migration&gt;</code></pre>
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
                <h3>⏱️ Timeout Error</h3>
                <p><strong>Issue:</strong> Query execution times out.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Increase timeout value in global settings</li>
                    <li>Decrease batch size (batchSize)</li>
                    <li>Optimize queries</li>
                    <li>Utilize indexes</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>🔄 Resume Migration Issue</h3>
                <p><strong>Issue:</strong> Failed to resume interrupted migration.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Check progress state file</li>
                    <li>Verify database status</li>
                    <li>Analyze log files</li>
                    <li>Use --resume option</li>
                </ul>
            </div>
            
            <div class="trouble-card">
                <h3>📊 Memory Insufficient</h3>
                <p><strong>Issue:</strong> Memory shortage error during large data processing.</p>
                <p><strong>Solution:</strong></p>
                <ul>
                    <li>Decrease batch size</li>
                    <li>Optimize queries</li>
                    <li>Utilize indexes</li>
                    <li>Check system resources</li>
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
                    <h3>Q: What databases does SQL2DB support?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: Currently supports Microsoft SQL Server 2012 or higher. Both source and target must be SQL Server.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: How is performance with large-scale data processing?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: Large-scale data can be processed efficiently through batch processing and real-time monitoring. Memory usage can be controlled by adjusting batch size.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: What happens if an error occurs during migration?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: You can resume migration from the completed point using the resume functionality. Use the --resume option.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: How do I use real-time monitoring?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: The monitoring screen is automatically displayed when migration is executed. You can check progress in real-time through keyboard interaction.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Q: What are dynamic variables used for?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A: You can extract values from the database at execution time and use them as migration conditions or column values. For example, you can perform incremental migration based on the last sync date.</p>
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
                <a href="mailto:sql2db.nodejs@gmail.com" class="btn btn-primary">Send Email</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">🐛</div>
                <h3>Issue Report</h3>
                <p>Report bugs or request features through GitHub issues.</p>
                <a href="https://github.com/happysoft2018/sql2db/issues" class="btn btn-secondary" target="_blank">Create Issue</a>
            </div>
            
            <div class="support-card">
                <div class="support-icon">📚</div>
                <h3>Documentation & Examples</h3>
                <p>For more detailed information and examples, visit the GitHub repository.</p>
                <a href="https://github.com/happysoft2018/sql2db" class="btn btn-outline" target="_blank">Visit GitHub</a>
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
