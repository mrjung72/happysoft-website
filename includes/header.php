<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : 'HappySoft - Developer Solutions Portfolio' ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="SQL to Excel, query to excel, excel generation, db migration, sql to db, query to db, sql2db, query2db, sql2excel, query2excel">
    <meta name="keywords" content="SQL to Excel, query to excel, excel generation, db migration, sql to db, query to db, sql2db, query2db, sql2excel, query2excel">
    <meta name="author" content="HappySoft">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="subject" content="Developer Tools and Solutions">
    <meta name="category" content="Software Development">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle : 'HappySoft - Developer Solutions Portfolio' ?>">
    <meta property="og:description" content="Professional developer solutions for SQL data migration, Excel generation, and database tools. Enterprise-ready Node.js, Vue.js, and Express.js solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://happysoft.kr">
    <meta property="og:site_name" content="HappySoft">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="https://happysoft.kr/assets/images/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="HappySoft Developer Solutions">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($pageTitle) ? $pageTitle : 'HappySoft - Developer Solutions Portfolio' ?>">
    <meta name="twitter:description" content="Professional developer solutions for SQL data migration, Excel generation, and database tools. Enterprise-ready Node.js, Vue.js, and Express.js solutions.">
    <meta name="twitter:image" content="https://happysoft.kr/assets/images/og-image.png">
    <meta name="twitter:image:alt" content="HappySoft Developer Solutions">
    <meta name="twitter:site" content="@happysoft">
    <meta name="twitter:creator" content="@happysoft">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- jQuery and Animation Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/animations.js" defer></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-brand">
                <a href="index.php">
                    <span class="brand-icon">⚙️</span>
                    <span class="brand-text">HappySoft</span>
                </a>
            </div>
            
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="sql2db.php" class="nav-link <?= $currentPage === 'sql2db' ? 'active' : '' ?>">SQL2DB</a>
                    </li>
                    <li class="nav-item">
                        <a href="sql2excel.php" class="nav-link <?= $currentPage === 'sql2excel' ? 'active' : '' ?>">SQL2Excel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= in_array($currentPage, ['client-util', 'vue-app', 'express-server']) ? 'active' : '' ?>">
                            Other Solutions
                            <span class="dropdown-arrow">▼</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="client-util.php" class="dropdown-link">🛠️ Client Util App</a></li>
                            <li><a href="vue-app.php" class="dropdown-link">🎨 Vue3 Web App</a></li>
                            <li><a href="express-server.php" class="dropdown-link">⚡ Express Server</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>

                </ul>
            </div>
            
            <div class="nav-actions">
                <a href="https://github.com/happysoft2018" target="_blank" class="btn btn-github">
                    <span class="github-icon">📦</span>
                    GitHub
                </a>
                <a href="index_kr.php" class="btn btn-language" title="한국어">
                    🇰🇷
                </a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle" id="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
