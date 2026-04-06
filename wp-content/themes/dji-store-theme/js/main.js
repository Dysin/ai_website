/**
 * DJI Store Theme JavaScript
 *
 * @package DJI_Store_Theme
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initHeader();
        initHeroSlider();
        initSearch();
        initAnimations();
        initProductActions();
    });

    /**
     * Header Scroll Effect
     */
    function initHeader() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScrollY = window.scrollY;
        const scrollThreshold = 50;

        function handleScroll() {
            const currentScrollY = window.scrollY;

            if (currentScrollY > scrollThreshold) {
                header.classList.remove('transparent');
                header.classList.add('scrolled');
            } else {
                header.classList.add('transparent');
                header.classList.remove('scrolled');
            }

            lastScrollY = currentScrollY;
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // Initial check
    }

    /**
     * Hero Slider
     */
    function initHeroSlider() {
        const slider = document.querySelector('.hero-slider');
        if (!slider) return;

        const slides = slider.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');
        const prevBtn = document.getElementById('hero-prev');
        const nextBtn = document.getElementById('hero-next');

        if (slides.length === 0) return;

        let currentSlide = 0;
        let autoplayInterval = null;
        const autoplayDelay = 5000;

        function showSlide(index) {
            // Wrap around
            if (index >= slides.length) index = 0;
            if (index < 0) index = slides.length - 1;

            // Update slides
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });

            // Update dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });

            currentSlide = index;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        function startAutoplay() {
            stopAutoplay();
            autoplayInterval = setInterval(nextSlide, autoplayDelay);
        }

        function stopAutoplay() {
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
                autoplayInterval = null;
            }
        }

        // Event listeners
        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                prevSlide();
                startAutoplay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                nextSlide();
                startAutoplay();
            });
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                showSlide(index);
                startAutoplay();
            });
        });

        // Pause on hover
        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        slider.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        slider.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                startAutoplay();
            }
        }, { passive: true });

        // Start autoplay
        startAutoplay();
    }

    /**
     * Search Overlay
     */
    function initSearch() {
        const searchToggle = document.getElementById('search-toggle');
        const searchOverlay = document.getElementById('search-overlay');
        const searchClose = document.getElementById('search-close');
        const searchInput = searchOverlay ? searchOverlay.querySelector('.search-input') : null;

        if (!searchToggle || !searchOverlay) return;

        function openSearch() {
            searchOverlay.classList.add('active');
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 300);
            }
            document.body.style.overflow = 'hidden';
        }

        function closeSearch() {
            searchOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        searchToggle.addEventListener('click', openSearch);

        if (searchClose) {
            searchClose.addEventListener('click', closeSearch);
        }

        // Close on ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
                closeSearch();
            }
        });

        // Close on background click
        searchOverlay.addEventListener('click', function(e) {
            if (e.target === searchOverlay) {
                closeSearch();
            }
        });
    }

    /**
     * Scroll Animations
     */
    function initAnimations() {
        // Intersection Observer for fade-in animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements that should animate on scroll
        const animateElements = document.querySelectorAll('.category-item, .feature-item');
        animateElements.forEach(function(el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    }

    /**
     * Product Card Actions
     */
    function initProductActions() {
        // Add to cart button
        document.querySelectorAll('.product-btn').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                const card = this.closest('.product-card');
                const productTitle = card.querySelector('.product-title a')?.textContent || 'Product';

                // Visual feedback
                this.textContent = 'Added!';
                this.classList.add('btn-dark');
                this.disabled = true;

                // Update cart count
                const cartCount = document.getElementById('cart-count');
                if (cartCount) {
                    const current = parseInt(cartCount.textContent) || 0;
                    cartCount.textContent = current + 1;
                    cartCount.style.animation = 'pulse 0.3s ease';
                }

                // Reset after delay
                setTimeout(() => {
                    this.textContent = 'Add to Cart';
                    this.classList.remove('btn-dark');
                    this.disabled = false;
                }, 2000);

                // AJAX call could go here
                console.log('Added to cart:', productTitle);
            });
        });

        // Quick view button
        document.querySelectorAll('.product-action-btn').forEach(function(btn) {
            const icon = btn.querySelector('svg');
            if (!icon) return;

            // Check if it's the wishlist button (heart icon)
            const isWishlist = icon.innerHTML.includes('path d="M20.84');
            const isQuickView = icon.innerHTML.includes('circle cx="12"');

            if (isWishlist) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.product-card');
                    const productTitle = card.querySelector('.product-title a')?.textContent || 'Product';

                    // Toggle wishlist state
                    const isActive = this.classList.toggle('active');

                    if (isActive) {
                        this.style.background = 'var(--color-error)';
                        this.style.color = '#fff';
                        console.log('Added to wishlist:', productTitle);
                    } else {
                        this.style.background = '';
                        this.style.color = '';
                        console.log('Removed from wishlist:', productTitle);
                    }
                });
            }
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerHeight = document.getElementById('site-header')?.offsetHeight || 72;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

})();
