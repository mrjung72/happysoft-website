<?php
$pageTitle = "Express Server - Node.js 백엔드 서버";
$currentPage = "express-server";
include 'includes/header_kr.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div>
                <div class="solution-badge">⚡ Node.js 백엔드 서버</div>
                <h1>Express Server</h1>
                <div class="version">v1.0.0</div>
                <p class="solution-tagline">
                    Express.js 기반의 확장 가능한 백엔드 서버<br>
                    RESTful API, 미들웨어 구조, 보안 기능을 갖춘 프로덕션 레디 서버
                </p>
                
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">RESTful</div>
                        <div class="stat-label">API</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Express</div>
                        <div class="stat-label">프레임워크</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Node.js</div>
                        <div class="stat-label">런타임</div>
                    </div>
                </div>
                
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">다운로드</a>
                    <a href="#documentation" class="btn btn-secondary">문서 보기</a>
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
                    <div class="terminal-line">$ npm install</div>
                    <div class="terminal-line">$ npm run dev</div>
                    <div class="terminal-line">✓ Server running on port 3000</div>
                    <div class="terminal-line">✓ API endpoints available</div>
                    <div class="terminal-line">✓ Database connected</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Showcase -->
<section class="features-showcase">
    <div class="container">
        <h2 class="section-title">주요 기능</h2>
        <p class="section-subtitle">Express.js의 강력한 기능들을 활용한 현대적인 백엔드 서버</p>
        
        <div class="features-grid">
            <!-- RESTful API -->
            <div class="feature-card featured">
                <div class="feature-icon">🌐</div>
                <h3>RESTful API</h3>
                <p>표준 HTTP 메서드를 활용한 RESTful API 엔드포인트 제공</p>
                <ul class="feature-details">
                    <li>GET, POST, PUT, DELETE 메서드</li>
                    <li>JSON 응답 형식</li>
                    <li>상태 코드 관리</li>
                    <li>API 버전 관리</li>
                </ul>
            </div>
            
            <!-- Middleware Architecture -->
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>미들웨어 구조</h3>
                <p>요청 처리 파이프라인을 구성하는 유연한 미들웨어 시스템</p>
                <ul class="feature-details">
                    <li>인증 및 권한 확인</li>
                    <li>요청 로깅</li>
                    <li>에러 핸들링</li>
                    <li>CORS 설정</li>
                </ul>
            </div>
            
            <!-- Scalable Architecture -->
            <div class="feature-card">
                <div class="feature-icon">📈</div>
                <h3>확장 가능한 아키텍처</h3>
                <p>모듈화된 구조로 유지보수와 확장이 용이한 서버 설계</p>
                <ul class="feature-details">
                    <li>라우터 분리</li>
                    <li>컨트롤러 패턴</li>
                    <li>서비스 레이어</li>
                    <li>데이터베이스 추상화</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section class="tech-specs">
    <div class="container">
        <h2 class="section-title">기술 사양</h2>
        <p class="section-subtitle">Express Server의 상세한 기술 정보</p>
        
        <div class="specs-grid">
            <div class="spec-category">
                <h3>서버 환경</h3>
                <div class="spec-item">
                    <span class="spec-label">런타임</span>
                    <span class="spec-value">Node.js 16.0+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">프레임워크</span>
                    <span class="spec-value">Express.js 4.18+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">패키지 매니저</span>
                    <span class="spec-value">npm/yarn</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">개발 서버</span>
                    <span class="spec-value">nodemon</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>데이터베이스</h3>
                <div class="spec-item">
                    <span class="spec-label">ORM</span>
                    <span class="spec-value">Sequelize</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">지원 DB</span>
                    <span class="spec-value">MySQL, PostgreSQL, SQLite</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">연결 풀</span>
                    <span class="spec-value">지원</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">마이그레이션</span>
                    <span class="spec-value">자동화</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>보안</h3>
                <div class="spec-item">
                    <span class="spec-label">인증</span>
                    <span class="spec-value">JWT</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">암호화</span>
                    <span class="spec-value">bcrypt</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">CORS</span>
                    <span class="spec-value">설정 가능</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">Rate Limiting</span>
                    <span class="spec-value">express-rate-limit</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>성능</h3>
                <div class="spec-item">
                    <span class="spec-label">동시 연결</span>
                    <span class="spec-value">1000+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">응답 시간</span>
                    <span class="spec-value">&lt;100ms</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">메모리 사용량</span>
                    <span class="spec-value">~50MB</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">로깅</span>
                    <span class="spec-value">Winston</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Code Examples -->
<section class="code-examples">
    <div class="container">
        <h2 class="section-title">코드 예제</h2>
        <p class="section-subtitle">Express Server의 핵심 기능들을 코드로 확인해보세요</p>
        
        <div class="example-tabs">
            <div class="tab-nav">
                <button class="tab-btn active" data-tab="server">서버 설정</button>
                <button class="tab-btn" data-tab="routes">라우터</button>
                <button class="tab-btn" data-tab="middleware">미들웨어</button>
            </div>
            
            <div class="tab-content active" id="server">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">JavaScript</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code>// app.js
const express = require('express');
const cors = require('cors');
const helmet = require('helmet');
const rateLimit = require('express-rate-limit');

const app = express();
const PORT = process.env.PORT || 3000;

// 미들웨어 설정
app.use(helmet());
app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Rate limiting
const limiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15분
  max: 100 // IP당 최대 요청 수
});
app.use(limiter);

// 라우터 설정
app.use('/api/v1/users', require('./routes/users'));
app.use('/api/v1/products', require('./routes/products'));

// 에러 핸들링
app.use((err, req, res, next) => {
  console.error(err.stack);
  res.status(500).json({ error: 'Something went wrong!' });
});

app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="routes">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">JavaScript</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code>// routes/users.js
const express = require('express');
const router = express.Router();
const { authenticateToken } = require('../middleware/auth');
const UserController = require('../controllers/UserController');

// GET /api/v1/users
router.get('/', authenticateToken, UserController.getAllUsers);

// GET /api/v1/users/:id
router.get('/:id', authenticateToken, UserController.getUserById);

// POST /api/v1/users
router.post('/', UserController.createUser);

// PUT /api/v1/users/:id
router.put('/:id', authenticateToken, UserController.updateUser);

// DELETE /api/v1/users/:id
router.delete('/:id', authenticateToken, UserController.deleteUser);

module.exports = router;

// controllers/UserController.js
const UserService = require('../services/UserService');

class UserController {
  static async getAllUsers(req, res) {
    try {
      const users = await UserService.getAllUsers();
      res.json({ success: true, data: users });
    } catch (error) {
      res.status(500).json({ success: false, error: error.message });
    }
  }

  static async createUser(req, res) {
    try {
      const user = await UserService.createUser(req.body);
      res.status(201).json({ success: true, data: user });
    } catch (error) {
      res.status(400).json({ success: false, error: error.message });
    }
  }
}</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="middleware">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">JavaScript</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code>// middleware/auth.js
const jwt = require('jsonwebtoken');

const authenticateToken = (req, res, next) => {
  const authHeader = req.headers['authorization'];
  const token = authHeader && authHeader.split(' ')[1];

  if (!token) {
    return res.status(401).json({ error: 'Access token required' });
  }

  jwt.verify(token, process.env.JWT_SECRET, (err, user) => {
    if (err) {
      return res.status(403).json({ error: 'Invalid token' });
    }
    req.user = user;
    next();
  });
};

// middleware/logger.js
const winston = require('winston');

const logger = winston.createLogger({
  level: 'info',
  format: winston.format.combine(
    winston.format.timestamp(),
    winston.format.json()
  ),
  transports: [
    new winston.transports.File({ filename: 'error.log', level: 'error' }),
    new winston.transports.File({ filename: 'combined.log' })
  ]
});

const requestLogger = (req, res, next) => {
  logger.info({
    method: req.method,
    url: req.url,
    ip: req.ip,
    userAgent: req.get('User-Agent')
  });
  next();
};

module.exports = { authenticateToken, requestLogger };</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section">
    <div class="container">
        <h2 class="section-title">다운로드</h2>
        <p class="section-subtitle">Express Server의 최신 버전을 다운로드하세요</p>
        
        <div class="download-options">
            <div class="download-card featured">
                <div class="download-header">
                    <h3>Express Server v1.0.0</h3>
                    <span class="download-badge">최신</span>
                </div>
                
                <div class="version-info">
                    <p class="version-date">릴리즈 날짜: 2024-01-15</p>
                    <p class="version-size">파일 크기: 3.8MB</p>
                </div>
                
                <ul class="version-features">
                    <li>Express.js 4.18+ 기반</li>
                    <li>RESTful API 구조</li>
                    <li>JWT 인증 시스템</li>
                    <li>데이터베이스 연동</li>
                    <li>보안 미들웨어</li>
                    <li>로깅 시스템</li>
                </ul>
                
                <div class="download-actions">
                    <a href="#" class="btn btn-primary">📦 GitHub 릴리즈</a>
                    <a href="#" class="btn btn-secondary">📖 사용자 매뉴얼</a>
                </div>
            </div>
            
            <div class="download-card">
                <div class="download-header">
                    <h3>시스템 요구사항</h3>
                </div>
                
                <div class="system-requirements">
                    <div class="requirements-grid">
                        <div class="requirement-item">
                            <strong>Node.js</strong>
                            <span>v16.0.0 이상</span>
                        </div>
                        <div class="requirement-item">
                            <strong>npm</strong>
                            <span>v8.0.0 이상</span>
                        </div>
                        <div class="requirement-item">
                            <strong>데이터베이스</strong>
                            <span>MySQL 8.0+ 또는 PostgreSQL 13+</span>
                        </div>
                        <div class="requirement-item">
                            <strong>메모리</strong>
                            <span>최소 512MB RAM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documentation Section -->
<section id="documentation" class="documentation-section">
    <div class="container">
        <h2 class="section-title">문서</h2>
        <p class="section-subtitle">Express Server 사용을 위한 상세한 문서</p>
        
        <div class="docs-grid">
            <div class="doc-card">
                <div class="doc-icon">🚀</div>
                <h3>시작하기</h3>
                <p>Express Server 설치 및 기본 설정 방법을 알아보세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🌐</div>
                <h3>API 가이드</h3>
                <p>RESTful API 설계 및 구현 방법에 대한 상세한 가이드입니다.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🔧</div>
                <h3>미들웨어</h3>
                <p>Express.js 미들웨어 사용법과 커스텀 미들웨어 개발 가이드입니다.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🔒</div>
                <h3>보안 가이드</h3>
                <p>JWT 인증, 암호화, CORS 등 보안 관련 설정 방법을 알아보세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">문의하기</h2>
        <p class="section-subtitle">Express Server에 대한 문의사항이 있으시면 언제든 연락주세요</p>
        
        <div class="contact-content">
            <div class="contact-info">
                <h3>연락처 정보</h3>
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <strong>이메일</strong><br>
                        happysoftinfodesk@gmail.com
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🌐</div>
                    <div>
                        <strong>웹사이트</strong><br>
                        happysoft.kr
                    </div>
                </div>
            </div>
            
            <form class="contact-form" action="send-message.php" method="POST">
                <input type="hidden" name="solution" value="express-server">
                <div class="form-group">
                    <label for="name">이름 *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">이메일 *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="company">회사명</label>
                    <input type="text" id="company" name="company">
                </div>
                <div class="form-group">
                    <label for="message">문의내용 *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">문의하기</button>
            </form>
        </div>
    </div>
</section>

<script>
// Tab functionality
document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        
        // Add active class to clicked tab
        button.classList.add('active');
        
        // Show corresponding content
        const tabId = button.getAttribute('data-tab');
        document.getElementById(tabId).classList.add('active');
    });
});

// Copy button functionality
document.querySelectorAll('.copy-btn').forEach(button => {
    button.addEventListener('click', () => {
        const codeBlock = button.closest('.code-block');
        const code = codeBlock.querySelector('code').textContent;
        
        navigator.clipboard.writeText(code).then(() => {
            const originalText = button.textContent;
            button.textContent = '복사됨!';
            button.style.background = '#10b981';
            
            setTimeout(() => {
                button.textContent = originalText;
                button.style.background = '';
            }, 2000);
        });
    });
});
</script>

<?php include 'includes/footer_kr.php'; ?> 