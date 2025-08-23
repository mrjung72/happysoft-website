<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : 'HappySoft - 개발자 솔루션 포트폴리오' ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="SQL 데이터 마이그레이션, 엑셀 생성, 데이터베이스 도구, 유틸리티 애플리케이션을 위한 전문 개발자 솔루션. 엔터프라이즈급 Node.js, Vue.js, Express.js 솔루션을 제공합니다.">
    <meta name="keywords" content="SQL 데이터 마이그레이션, 엑셀 생성, Node.js 도구, Vue.js 개발, Express 서버, 데이터베이스 유틸리티, MSSQL 도구, CLI 애플리케이션, 데이터 처리, 개발자 도구, 엔터프라이즈 솔루션, 데이터 내보내기, SQL to Excel, 데이터베이스 마이그레이션, 유틸리티 소프트웨어, 웹 개발, 백엔드 개발, API 개발, 데이터 변환, 비즈니스 인텔리전스 도구, 자동화 도구">
    <meta name="author" content="HappySoft">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Korean">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="subject" content="개발자 도구 및 솔루션">
    <meta name="category" content="소프트웨어 개발">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle : 'HappySoft - 개발자 솔루션 포트폴리오' ?>">
    <meta property="og:description" content="SQL 데이터 마이그레이션, 엑셀 생성, 데이터베이스 도구를 위한 전문 개발자 솔루션. 엔터프라이즈급 Node.js, Vue.js, Express.js 솔루션을 제공합니다.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://happysoft.kr">
    <meta property="og:site_name" content="HappySoft">
    <meta property="og:locale" content="ko_KR">
    <meta property="og:image" content="https://happysoft.kr/assets/images/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="HappySoft 개발자 솔루션">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($pageTitle) ? $pageTitle : 'HappySoft - 개발자 솔루션 포트폴리오' ?>">
    <meta name="twitter:description" content="SQL 데이터 마이그레이션, 엑셀 생성, 데이터베이스 도구를 위한 전문 개발자 솔루션. 엔터프라이즈급 Node.js, Vue.js, Express.js 솔루션을 제공합니다.">
    <meta name="twitter:image" content="https://happysoft.kr/assets/images/og-image.png">
    <meta name="twitter:image:alt" content="HappySoft 개발자 솔루션">
    <meta name="twitter:site" content="@happysoft">
    <meta name="twitter:creator" content="@happysoft">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    
    <!-- jQuery and Animation Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/animations.js" defer></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-brand">
                <a href="index_kr.php">
                    <span class="brand-icon">⚙️</span>
                    <span class="brand-text">HappySoft</span>
                </a>
            </div>
            
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index_kr.php" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">홈</a>
                    </li>
                    <li class="nav-item">
                        <a href="sql2db_kr.php" class="nav-link <?= $currentPage === 'sql2db' ? 'active' : '' ?>">SQL2DB</a>
                    </li>
                    <li class="nav-item">
                        <a href="sql2excel_kr.php" class="nav-link <?= $currentPage === 'sql2excel' ? 'active' : '' ?>">SQL2Excel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= in_array($currentPage, ['client-util', 'vue-app', 'express-server']) ? 'active' : '' ?>">
                            기타 솔루션
                            <span class="dropdown-arrow">▼</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="client-util_kr.php" class="dropdown-link">🛠️ Client Util App</a></li>
                            <li><a href="vue-app_kr.php" class="dropdown-link">🎨 Vue3 Web App</a></li>
                            <li><a href="express-server_kr.php" class="dropdown-link">⚡ Express Server</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">문의</a>
                    </li>
                </ul>
            </div>
            
            <div class="nav-actions">
                <a href="https://github.com/happysoft2018" target="_blank" class="btn btn-github">
                    <span class="github-icon">📦</span>
                    GitHub
                </a>
                <a href="../index.php" class="btn btn-language" title="English">
                    🇺🇸
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
