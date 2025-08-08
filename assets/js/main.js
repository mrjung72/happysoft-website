/**
 * Main JavaScript file for Developer Solutions Website
 * Handles all interactive features and animations
 */

(function() {
    'use strict';

    // DOM elements
    const navbar = document.getElementById('navbar');
    const mobileToggle = document.getElementById('mobile-toggle');
    const navMenu = document.getElementById('nav-menu');
    const backToTopBtn = document.getElementById('back-to-top');
    
    // Initialize all features when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initializeNavigation();
        initializeScrollEffects();
        initializeAnimations();
        initializeFormHandling();
        initializeTooltips();
        initializeCounters();
        initializeLazyLoading();
    });

    /**
     * Navigation functionality
     */
    function initializeNavigation() {
        // Mobile menu toggle
        if (mobileToggle && navMenu) {
            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                navbar.classList.toggle('mobile-active');
                
                // Update aria-expanded attribute for accessibility
                const isExpanded = navMenu.classList.contains('active');
                mobileToggle.setAttribute('aria-expanded', isExpanded);
            });
        }

        // Dropdown menus
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const dropdown = this.closest('.dropdown');
                const menu = dropdown.querySelector('.dropdown-menu');
                const isActive = menu.classList.contains('active');
                
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(function(otherMenu) {
                    if (otherMenu !== menu) {
                        otherMenu.classList.remove('active');
                    }
                });
                
                // Toggle current dropdown
                menu.classList.toggle('active', !isActive);
                
                // Update aria-expanded
                this.setAttribute('aria-expanded', !isActive);
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                    menu.classList.remove('active');
                });
                document.querySelectorAll('.dropdown-toggle').forEach(function(toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                });
            }
        });

        // Close mobile menu when clicking on links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 767) {
                    navMenu.classList.remove('active');
                    navbar.classList.remove('mobile-active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                }
            });
        });

        // Handle escape key for dropdowns and mobile menu
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                // Close dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                    menu.classList.remove('active');
                });
                
                // Close mobile menu
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navbar.classList.remove('mobile-active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    }

    /**
     * Scroll effects and navbar behavior
     */
    function initializeScrollEffects() {
        let ticking = false;

        function updateScrollEffects() {
            const scrollY = window.pageYOffset;
            
            // Navbar background on scroll
            if (navbar) {
                if (scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }

            // Back to top button
            if (backToTopBtn) {
                if (scrollY > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            }

            // Parallax effect for hero section
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                const speed = 0.5;
                const yPos = -(scrollY * speed);
                heroSection.style.transform = `translate3d(0, ${yPos}px, 0)`;
            }

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateScrollEffects);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });

        // Back to top functionality
        if (backToTopBtn) {
            backToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Intersection Observer for animations
     */
    function initializeAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    
                    // Special handling for counter animations
                    if (entry.target.classList.contains('stat-number')) {
                        animateCounter(entry.target);
                    }
                }
            });
        }, observerOptions);

        // Observe elements for animation
        const animateElements = document.querySelectorAll(
            '.solution-card, .feature-item, .tech-category, .stat, .contact-item'
        );
        
        animateElements.forEach(function(el) {
            observer.observe(el);
        });

        // Stagger animations for solution cards
        const solutionCards = document.querySelectorAll('.solution-card');
        solutionCards.forEach(function(card, index) {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    }

    /**
     * Counter animation for statistics
     */
    function animateCounter(element) {
        const target = parseInt(element.textContent.replace(/\D/g, ''));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(function() {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            const suffix = element.textContent.includes('+') ? '+' : '';
            element.textContent = Math.floor(current) + suffix;
        }, 16);
    }

    /**
     * Form handling and validation
     */
    function initializeFormHandling() {
        const contactForm = document.querySelector('.contact-form');
        if (!contactForm) return;

        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.textContent;

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const requiredFields = contactForm.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isValid = false;
                    showFieldError(field, '이 필드는 필수입니다.');
                } else {
                    clearFieldError(field);
                }
            });

            // Email validation
            const emailField = contactForm.querySelector('[type="email"]');
            if (emailField && emailField.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value)) {
                    isValid = false;
                    showFieldError(emailField, '올바른 이메일 주소를 입력해주세요.');
                }
            }

            if (isValid) {
                // Show loading state
                submitButton.textContent = '전송 중...';
                submitButton.disabled = true;

                // Simulate form submission (replace with actual submission)
                setTimeout(function() {
                    showSuccessMessage();
                    contactForm.reset();
                    submitButton.textContent = originalButtonText;
                    submitButton.disabled = false;
                }, 2000);
            }
        });

        // Real-time validation
        const formFields = contactForm.querySelectorAll('input, textarea, select');
        formFields.forEach(function(field) {
            field.addEventListener('blur', function() {
                validateField(this);
            });

            field.addEventListener('input', function() {
                clearFieldError(this);
            });
        });
    }

    function validateField(field) {
        if (field.hasAttribute('required') && !field.value.trim()) {
            showFieldError(field, '이 필드는 필수입니다.');
            return false;
        }

        if (field.type === 'email' && field.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(field.value)) {
                showFieldError(field, '올바른 이메일 주소를 입력해주세요.');
                return false;
            }
        }

        clearFieldError(field);
        return true;
    }

    function showFieldError(field, message) {
        clearFieldError(field);
        
        field.classList.add('error');
        const errorElement = document.createElement('div');
        errorElement.className = 'field-error';
        errorElement.textContent = message;
        field.parentNode.appendChild(errorElement);
    }

    function clearFieldError(field) {
        field.classList.remove('error');
        const existingError = field.parentNode.querySelector('.field-error');
        if (existingError) {
            existingError.remove();
        }
    }

    function showSuccessMessage() {
        const successMessage = document.createElement('div');
        successMessage.className = 'success-message';
        successMessage.innerHTML = `
            <div class="success-content">
                <span class="success-icon">✅</span>
                <span>메시지가 성공적으로 전송되었습니다!</span>
            </div>
        `;
        
        document.body.appendChild(successMessage);
        
        setTimeout(function() {
            successMessage.classList.add('show');
        }, 100);
        
        setTimeout(function() {
            successMessage.classList.remove('show');
            setTimeout(function() {
                successMessage.remove();
            }, 300);
        }, 3000);
    }

    /**
     * Initialize tooltips
     */
    function initializeTooltips() {
        const elementsWithTooltips = document.querySelectorAll('[data-tooltip]');
        
        elementsWithTooltips.forEach(function(element) {
            element.addEventListener('mouseenter', function() {
                showTooltip(this);
            });
            
            element.addEventListener('mouseleave', function() {
                hideTooltip();
            });
        });
    }

    function showTooltip(element) {
        const tooltip = document.createElement('div');
        tooltip.className = 'tooltip';
        tooltip.textContent = element.getAttribute('data-tooltip');
        
        document.body.appendChild(tooltip);
        
        const rect = element.getBoundingClientRect();
        tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
        tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
        
        setTimeout(function() {
            tooltip.classList.add('show');
        }, 10);
    }

    function hideTooltip() {
        const tooltip = document.querySelector('.tooltip');
        if (tooltip) {
            tooltip.classList.remove('show');
            setTimeout(function() {
                tooltip.remove();
            }, 200);
        }
    }

    /**
     * Initialize counter functionality
     */
    function initializeCounters() {
        // This function is called by the intersection observer
        // when stat elements come into view
    }

    /**
     * Lazy loading for images (if any are added later)
     */
    function initializeLazyLoading() {
        const images = document.querySelectorAll('img[data-src]');
        
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(function(img) {
                imageObserver.observe(img);
            });
        } else {
            // Fallback for older browsers
            images.forEach(function(img) {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            });
        }
    }

    /**
     * Utility functions
     */
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    function debounce(func, wait, immediate) {
        let timeout;
        return function() {
            const context = this, args = arguments;
            const later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    // Expose utilities to global scope if needed
    window.DeveloperSolutions = {
        throttle: throttle,
        debounce: debounce
    };

})();
