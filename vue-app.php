<?php
$pageTitle = "Vue3 Web App - 모던 프론트엔드 애플리케이션";
$currentPage = "vue-app";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="solution-hero">
    <div class="container">
        <div class="solution-hero-content">
            <div>
                <div class="solution-badge">💎 모던 프론트엔드 애플리케이션</div>
                <h1>Vue3 Web App</h1>
                <div class="version">v1.0.0</div>
                <p class="solution-tagline">
                    Vue 3 Composition API 기반의 현대적인 웹 애플리케이션<br>
                    Tailwind CSS와 Vite를 활용한 빠르고 아름다운 사용자 인터페이스
                </p>
                
                <div class="solution-stats">
                    <div class="stat">
                        <div class="stat-number">Vue 3</div>
                        <div class="stat-label">프레임워크</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Tailwind</div>
                        <div class="stat-label">스타일링</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">Vite</div>
                        <div class="stat-label">빌드 도구</div>
                    </div>
                </div>
                
                <div class="solution-actions">
                    <a href="#download" class="btn btn-primary">다운로드</a>
                    <a href="#documentation" class="btn btn-secondary">문서 보기</a>
                    <a href="https://github.com/mrjung72/vue3-app" target="_blank" class="btn btn-github">
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
        <h2 class="section-title">주요 기능</h2>
        <p class="section-subtitle">Vue 3의 최신 기능들을 활용한 현대적인 웹 애플리케이션</p>
        
        <div class="features-grid">
            <!-- Vue 3 Composition API -->
            <div class="feature-card featured">
                <div class="feature-icon">⚡</div>
                <h3>Vue 3 Composition API</h3>
                <p>Vue 3의 혁신적인 Composition API를 활용한 반응형 컴포넌트 개발</p>
                <ul class="feature-details">
                    <li>setup() 함수 기반 컴포넌트</li>
                    <li>ref()와 reactive() 반응형 시스템</li>
                    <li>computed()와 watch() 효과</li>
                    <li>Composables 패턴 활용</li>
                </ul>
            </div>
            
            <!-- Tailwind CSS -->
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Tailwind CSS</h3>
                <p>유틸리티 퍼스트 CSS 프레임워크로 빠르고 일관된 디자인 시스템</p>
                <ul class="feature-details">
                    <li>유틸리티 클래스 기반 스타일링</li>
                    <li>반응형 디자인 지원</li>
                    <li>다크 모드 지원</li>
                    <li>커스텀 테마 설정</li>
                </ul>
            </div>
            
            <!-- Vite Build System -->
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Vite 빌드 시스템</h3>
                <p>ES modules 기반의 초고속 개발 서버와 빌드 도구</p>
                <ul class="feature-details">
                    <li>Hot Module Replacement (HMR)</li>
                    <li>ES modules 기반 개발 서버</li>
                    <li>Rollup 기반 프로덕션 빌드</li>
                    <li>플러그인 시스템</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section class="tech-specs">
    <div class="container">
        <h2 class="section-title">기술 사양</h2>
        <p class="section-subtitle">Vue3 Web App의 상세한 기술 정보</p>
        
        <div class="specs-grid">
            <div class="spec-category">
                <h3>프론트엔드</h3>
                <div class="spec-item">
                    <span class="spec-label">프레임워크</span>
                    <span class="spec-value">Vue.js 3.3+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">API 스타일</span>
                    <span class="spec-value">Composition API</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">스타일링</span>
                    <span class="spec-value">Tailwind CSS 3.3+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">타입스크립트</span>
                    <span class="spec-value">지원</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>빌드 도구</h3>
                <div class="spec-item">
                    <span class="spec-label">개발 서버</span>
                    <span class="spec-value">Vite 4.4+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">번들러</span>
                    <span class="spec-value">Rollup</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">HMR</span>
                    <span class="spec-value">지원</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">최적화</span>
                    <span class="spec-value">Tree Shaking</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>개발 도구</h3>
                <div class="spec-item">
                    <span class="spec-label">패키지 매니저</span>
                    <span class="spec-value">npm/yarn/pnpm</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">린터</span>
                    <span class="spec-value">ESLint</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">포매터</span>
                    <span class="spec-value">Prettier</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">Git Hooks</span>
                    <span class="spec-value">Husky</span>
                </div>
            </div>
            
            <div class="spec-category">
                <h3>성능</h3>
                <div class="spec-item">
                    <span class="spec-label">번들 크기</span>
                    <span class="spec-value">~200KB (gzipped)</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">로딩 시간</span>
                    <span class="spec-value">&lt;2초</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">Lighthouse 점수</span>
                    <span class="spec-value">90+</span>
                </div>
                <div class="spec-item">
                    <span class="spec-label">브라우저 지원</span>
                    <span class="spec-value">ES2015+</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Code Examples -->
<section class="code-examples">
    <div class="container">
        <h2 class="section-title">코드 예제</h2>
        <p class="section-subtitle">Vue3 Web App의 핵심 기능들을 코드로 확인해보세요</p>
        
        <div class="example-tabs">
            <div class="tab-nav">
                <button class="tab-btn active" data-tab="composition">Composition API</button>
                <button class="tab-btn" data-tab="tailwind">Tailwind CSS</button>
                <button class="tab-btn" data-tab="vite">Vite 설정</button>
            </div>
            
            <div class="tab-content active" id="composition">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">Vue.js</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code>&lt;template&gt;
  &lt;div class="counter"&gt;
    &lt;h2&gt;{{ title }}&lt;/h2&gt;
    &lt;p&gt;Count: {{ count }}&lt;/p&gt;
    &lt;button @click="increment"&gt;Increment&lt;/button&gt;
    &lt;button @click="decrement"&gt;Decrement&lt;/button&gt;
  &lt;/div&gt;
&lt;/template&gt;

&lt;script setup&gt;
import { ref, computed } from 'vue'

// 반응형 데이터
const count = ref(0)
const title = ref('Vue 3 Counter')

// 계산된 속성
const doubleCount = computed(() => count.value * 2)

// 메서드
const increment = () => {
  count.value++
}

const decrement = () => {
  count.value--
}
&lt;/script&gt;

&lt;style scoped&gt;
.counter {
  text-align: center;
  padding: 2rem;
}
&lt;/style&gt;</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="tailwind">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">Vue.js + Tailwind</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code>&lt;template&gt;
  &lt;div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100"&gt;
    &lt;div class="container mx-auto px-4 py-8"&gt;
      &lt;div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden"&gt;
        &lt;div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-6 py-4"&gt;
          &lt;h1 class="text-white text-xl font-semibold"&gt;Vue 3 App&lt;/h1&gt;
        &lt;/div&gt;
        
        &lt;div class="p-6"&gt;
          &lt;div class="text-center mb-6"&gt;
            &lt;h2 class="text-2xl font-bold text-gray-800 mb-2"&gt;{{ count }}&lt;/h2&gt;
            &lt;p class="text-gray-600"&gt;Click the buttons below&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class="flex space-x-4"&gt;
            &lt;button 
              @click="decrement"
              class="flex-1 bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg transition-colors"&gt;
              Decrease
            &lt;/button&gt;
            &lt;button 
              @click="increment"
              class="flex-1 bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition-colors"&gt;
              Increase
            &lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/template&gt;</code></pre>
                </div>
            </div>
            
            <div class="tab-content" id="vite">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">JavaScript</span>
                        <button class="copy-btn">복사</button>
                    </div>
                    <pre><code>// vite.config.js
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import { resolve } from 'path'

export default defineConfig({
  plugins: [vue()],
  
  resolve: {
    alias: {
      '@': resolve(__dirname, 'src')
    }
  },
  
  server: {
    port: 3000,
    open: true,
    cors: true
  },
  
  build: {
    outDir: 'dist',
    sourcemap: true,
    rollupOptions: {
      output: {
        manualChunks: {
          vendor: ['vue', 'vue-router'],
          utils: ['lodash-es']
        }
      }
    }
  },
  
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import "@/styles/variables.scss";`
      }
    }
  }
})</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section">
    <div class="container">
        <h2 class="section-title">다운로드</h2>
        <p class="section-subtitle">Vue3 Web App의 최신 버전을 다운로드하세요</p>
        
        <div class="download-options">
            <div class="download-card featured">
                <div class="download-header">
                    <h3>Vue3 Web App v1.0.0</h3>
                    <span class="download-badge">최신</span>
                </div>
                
                <div class="version-info">
                    <p class="version-date">릴리즈 날짜: 2024-01-15</p>
                    <p class="version-size">파일 크기: 5.2MB</p>
                </div>
                
                <ul class="version-features">
                    <li>Vue 3.3+ Composition API</li>
                    <li>Tailwind CSS 3.3+ 통합</li>
                    <li>Vite 4.4+ 빌드 시스템</li>
                    <li>TypeScript 지원</li>
                    <li>ESLint + Prettier 설정</li>
                    <li>반응형 디자인</li>
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
                            <strong>브라우저</strong>
                            <span>Chrome 90+, Firefox 88+, Safari 14+</span>
                        </div>
                        <div class="requirement-item">
                            <strong>메모리</strong>
                            <span>최소 2GB RAM</span>
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
        <p class="section-subtitle">Vue3 Web App 사용을 위한 상세한 문서</p>
        
        <div class="docs-grid">
            <div class="doc-card">
                <div class="doc-icon">🚀</div>
                <h3>시작하기</h3>
                <p>Vue3 Web App 설치 및 기본 사용법을 알아보세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">⚡</div>
                <h3>Composition API</h3>
                <p>Vue 3의 Composition API 사용법과 모범 사례를 확인하세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🎨</div>
                <h3>Tailwind CSS</h3>
                <p>Tailwind CSS를 활용한 스타일링 가이드와 컴포넌트 예제입니다.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
            
            <div class="doc-card">
                <div class="doc-icon">🔧</div>
                <h3>배포 가이드</h3>
                <p>Vite를 활용한 프로덕션 빌드 및 배포 방법을 알아보세요.</p>
                <a href="#" class="btn btn-outline">자세히 보기</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">문의하기</h2>
        <p class="section-subtitle">Vue3 Web App에 대한 문의사항이 있으시면 언제든 연락주세요</p>
        
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
                <div class="contact-item">
                    <div class="contact-icon">🕐</div>
                    <div>
                        <strong>업무 시간</strong><br>
                        평일 09:00 - 18:00 (KST)
                    </div>
                </div>
            </div>
            
            <form class="contact-form" action="send-message.php" method="POST">
                <input type="hidden" name="solution" value="vue-app">
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

<?php include 'includes/footer.php'; ?> 