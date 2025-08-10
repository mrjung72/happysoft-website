<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : 'HappySoft - 개발자 솔루션 포트폴리오' ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="SQL 데이터 마이그레이션, 엑셀 생성, 유틸리티 도구 등 개발자를 위한 실용적인 솔루션을 제공합니다.">
    <meta name="keywords" content="SQL, 데이터마이그레이션, 엑셀생성, Node.js, Vue.js, 개발도구, 데이터베이스">
    <meta name="author" content="HappySoft">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle : 'HappySoft - 개발자 솔루션 포트폴리오' ?>">
    <meta property="og:description" content="실무에서 검증된 데이터 처리 및 개발 도구 솔루션">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://happysoft.com">
    
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
                        <a href="index.php" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">홈</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= in_array($currentPage, ['sql2db', 'sql2excel', 'client-util', 'vue-app', 'express-server']) ? 'active' : '' ?>">
                            솔루션
                            <span class="dropdown-arrow">▼</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="sql2db.php" class="dropdown-link">🔄 SQL2DB - 데이터 마이그레이션</a></li>
                            <li><a href="sql2excel.php" class="dropdown-link">📊 SQL2Excel - 엑셀 생성</a></li>
                            <li><a href="client-util.php" class="dropdown-link">🛠️ Client Util App</a></li>
                            <li><a href="vue-app.php" class="dropdown-link">🎨 Vue3 Web App</a></li>
                            <li><a href="express-server.php" class="dropdown-link">⚡ Express Server</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="documentation.php" class="nav-link <?= $currentPage === 'documentation' ? 'active' : '' ?>">문서</a>
                    </li>
                    <li class="nav-item">
                        <a href="download.php" class="nav-link <?= $currentPage === 'download' ? 'active' : '' ?>">다운로드</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">문의</a>
                    </li>
                </ul>
            </div>
            
            <div class="nav-actions">
                <a href="https://github.com/mrjung72" target="_blank" class="btn btn-github">
                    <span class="github-icon">📦</span>
                    GitHub
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
