<?php
/**
 * Front Page Template
 *
 * @package DJI_Store_Theme
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="hero-slide active">
            <div class="hero-slide-bg" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);">
                <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=1920&q=80') center/cover; opacity: 0.3;"></div>
            </div>
            <div class="container">
                <div class="hero-content animate-fade-in-up">
                    <span class="hero-tag">New Release</span>
                    <h1 class="hero-title">Mavic 4 Pro</h1>
                    <p class="hero-description">Capture stunning aerial footage with our most advanced drone yet. 4K/120fps, 50MP Hasselblad camera.</p>
                    <div class="hero-price">
                        <span class="original">$2,199</span>
                        <span>$1,899</span>
                    </div>
                    <div class="hero-actions">
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                        <a href="#" class="btn btn-secondary btn-lg" style="border-color: #fff; color: #fff;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <div class="hero-slide-bg" style="background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 100%);">
                <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=1920&q=80') center/cover; opacity: 0.3;"></div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <span class="hero-tag">Limited Edition</span>
                    <h1 class="hero-title">Osmo Action 5</h1>
                    <p class="hero-description">Rugged 4K action camera with front-facing display. Waterproof to 60m.</p>
                    <div class="hero-price">
                        <span>$399</span>
                    </div>
                    <div class="hero-actions">
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                        <a href="#" class="btn btn-secondary btn-lg" style="border-color: #fff; color: #fff;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
            <div class="hero-slide-bg" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
                <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=1920&q=80') center/cover; opacity: 0.3;"></div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <span class="hero-tag">Sale</span>
                    <h1 class="hero-title">Phantom X5 Pro</h1>
                    <p class="hero-description">Professional cinematography drone with 8K recording and 45min flight time.</p>
                    <div class="hero-price">
                        <span class="original">$3,999</span>
                        <span>$2,999</span>
                    </div>
                    <div class="hero-actions">
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                        <a href="#" class="btn btn-secondary btn-lg" style="border-color: #fff; color: #fff;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Navigation -->
    <div class="hero-nav">
        <button class="hero-dot active" data-slide="0"></button>
        <button class="hero-dot" data-slide="1"></button>
        <button class="hero-dot" data-slide="2"></button>
    </div>

    <!-- Hero Arrows -->
    <div class="hero-arrows">
        <button class="hero-arrow" id="hero-prev">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>
        <button class="hero-arrow" id="hero-next">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </button>
    </div>
</section>

<!-- Categories Section -->
<section class="categories section">
    <div class="container">
        <div class="section-header">
            <h2>Shop by Category</h2>
            <p>Find the perfect device for your creative journey</p>
        </div>

        <div class="category-grid">
            <a href="#" class="category-item">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <span class="category-name">Drones</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <span class="category-name">Handhelds</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                        <circle cx="12" cy="13" r="4"/>
                    </svg>
                </div>
                <span class="category-name">Cameras</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"/>
                        <rect x="9" y="9" width="6" height="6"/>
                        <line x1="9" y1="1" x2="9" y2="4"/>
                        <line x1="15" y1="1" x2="15" y2="4"/>
                        <line x1="9" y1="20" x2="9" y2="23"/>
                        <line x1="15" y1="20" x2="15" y2="23"/>
                    </svg>
                </div>
                <span class="category-name">Education</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <span class="category-name">Accessories</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <span class="category-name">Parts</span>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2>Featured Products</h2>
            <p>Our most popular tech innovations</p>
        </div>

        <div class="products-grid">
            <!-- Product 1 -->
            <article class="product-card animate-fade-in-up stagger-1">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=600&q=80" alt="Mavic 4 Pro Drone" loading="lazy">
                    <span class="product-badge hot">Hot</span>
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Drones</span>
                    <h3 class="product-title"><a href="#">Mavic 4 Pro - Professional Drone</a></h3>
                    <div class="product-price">
                        <span class="price-current">$1,899</span>
                        <span class="price-original">$2,199</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>

            <!-- Product 2 -->
            <article class="product-card animate-fade-in-up stagger-2">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&q=80" alt="Osmo Action Camera" loading="lazy">
                    <span class="product-badge new">New</span>
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Action Cam</span>
                    <h3 class="product-title"><a href="#">Osmo Action 5 Pro</a></h3>
                    <div class="product-price">
                        <span class="price-current">$399</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>

            <!-- Product 3 -->
            <article class="product-card animate-fade-in-up stagger-3">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&q=80" alt="Phantom Drone" loading="lazy">
                    <span class="product-badge sale">-25%</span>
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Drones</span>
                    <h3 class="product-title"><a href="#">Phantom X5 Pro</a></h3>
                    <div class="product-price">
                        <span class="price-current">$2,999</span>
                        <span class="price-original">$3,999</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>

            <!-- Product 4 -->
            <article class="product-card animate-fade-in-up stagger-4">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&q=80" alt="Mirrorless Camera" loading="lazy">
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Cameras</span>
                    <h3 class="product-title"><a href="#">Zenmuse X5S Mirrorless</a></h3>
                    <div class="product-price">
                        <span class="price-current">$1,249</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>
        </div>

        <div style="text-align: center; margin-top: var(--space-xl);">
            <a href="#" class="btn btn-secondary">View All Products</a>
        </div>
    </div>
</section>

<!-- Promo Banner -->
<section class="promo-banner">
    <div class="container">
        <div class="promo-content animate-fade-in-up">
            <span class="promo-tag">Spring Sale</span>
            <h2 class="promo-title">Up to 30% Off<br>Selected Items</h2>
            <p class="promo-description">Don't miss out on our biggest sale of the season. Premium tech at unbeatable prices.</p>
            <a href="#" class="btn btn-primary btn-lg">Shop the Sale</a>
        </div>
        <div class="promo-image">
            <img src="https://images.unsplash.com/photo-1527977966376-1c8408f9f108?w=600&q=80" alt="Sale Products" style="border-radius: var(--radius-lg);">
        </div>
    </div>
</section>

<!-- More Products Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2>New Arrivals</h2>
            <p>Fresh tech just landed in our store</p>
        </div>

        <div class="products-grid">
            <!-- Product 5 -->
            <article class="product-card animate-fade-in-up stagger-1">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&q=80" alt="Smart Gimbal" loading="lazy">
                    <span class="product-badge new">New</span>
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Gimbals</span>
                    <h3 class="product-title"><a href="#">RS 4 Pro Gimbal</a></h3>
                    <div class="product-price">
                        <span class="price-current">$599</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>

            <!-- Product 6 -->
            <article class="product-card animate-fade-in-up stagger-2">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1512790182412-b19e6d62bc39?w=600&q=80" alt="Drone Controller" loading="lazy">
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Accessories</span>
                    <h3 class="product-title"><a href="#">RC Plus Controller</a></h3>
                    <div class="product-price">
                        <span class="price-current">$349</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>

            <!-- Product 7 -->
            <article class="product-card animate-fade-in-up stagger-3">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=600&q=80" alt="Camera Lens" loading="lazy">
                    <span class="product-badge sale">-15%</span>
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Lenses</span>
                    <h3 class="product-title"><a href="#">24mm f/2.8 Lens</a></h3>
                    <div class="product-price">
                        <span class="price-current">$849</span>
                        <span class="price-original">$999</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>

            <!-- Product 8 -->
            <article class="product-card animate-fade-in-up stagger-4">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&q=80" alt="Laptop Stand" loading="lazy">
                    <div class="product-actions">
                        <button class="product-action-btn" aria-label="Quick view">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                        <button class="product-action-btn" aria-label="Add to wishlist">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <span class="product-category">Accessories</span>
                    <h3 class="product-title"><a href="#">Portable Laptop Stand</a></h3>
                    <div class="product-price">
                        <span class="price-current">$79</span>
                    </div>
                    <button class="btn btn-primary product-btn">Add to Cart</button>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section" style="background: var(--color-bg-secondary);">
    <div class="container">
        <div class="features-grid">
            <div class="feature-item animate-fade-in-up stagger-1">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="1" y="3" width="15" height="13"/>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                        <circle cx="5.5" cy="18.5" r="2.5"/>
                        <circle cx="18.5" cy="18.5" r="2.5"/>
                    </svg>
                </div>
                <h4 class="feature-title">Free Shipping</h4>
                <p class="feature-description">On orders over $100. Fast and reliable delivery worldwide.</p>
            </div>

            <div class="feature-item animate-fade-in-up stagger-2">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h4 class="feature-title">2 Year Warranty</h4>
                <p class="feature-description">Comprehensive warranty coverage for peace of mind.</p>
            </div>

            <div class="feature-item animate-fade-in-up stagger-3">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <polyline points="23 4 23 10 17 10"/>
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/>
                    </svg>
                </div>
                <h4 class="feature-title">30-Day Returns</h4>
                <p class="feature-description">Not satisfied? Return within 30 days for a full refund.</p>
            </div>

            <div class="feature-item animate-fade-in-up stagger-4">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
                <h4 class="feature-title">24/7 Support</h4>
                <p class="feature-description">Our expert team is always here to help you.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
