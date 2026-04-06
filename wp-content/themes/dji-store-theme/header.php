<?php
/**
 * Header Template
 *
 * @package DJI_Store_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header transparent" id="site-header">
    <div class="header-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            Tech<span>Store</span>
        </a>

        <!-- Main Navigation -->
        <nav class="main-nav" id="main-nav">
            <div class="nav-item">
                <a href="#" class="nav-link">
                    Products
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </a>
                <div class="nav-dropdown">
                    <a href="<?php echo esc_url(home_url('/product-category/drones')); ?>">Drones</a>
                    <a href="<?php echo esc_url(home_url('/product-category/handhelds')); ?>">Handhelds</a>
                    <a href="<?php echo esc_url(home_url('/product-category/cameras')); ?>">Cameras</a>
                    <a href="<?php echo esc_url(home_url('/product-category/accessories')); ?>">Accessories</a>
                </div>
            </div>

            <div class="nav-item">
                <a href="<?php echo esc_url(home_url('/products')); ?>" class="nav-link">Shop</a>
            </div>

            <div class="nav-item">
                <a href="#" class="nav-link">
                    Support
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </a>
                <div class="nav-dropdown">
                    <a href="#">FAQs</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Warranty</a>
                    <a href="#">Repair</a>
                </div>
            </div>

            <div class="nav-item">
                <a href="#" class="nav-link">About</a>
            </div>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
            <!-- Search -->
            <button class="header-icon" id="search-toggle" aria-label="Search">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
            </button>

            <!-- User Account -->
            <a href="<?php echo esc_url(home_url('/my-account')); ?>" class="header-icon" aria-label="Account">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </a>

            <!-- Cart -->
            <a href="<?php echo esc_url(home_url('/cart')); ?>" class="header-icon cart-icon" aria-label="Cart">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <path d="M16 10a4 4 0 0 1-8 0"/>
                </svg>
                <span class="cart-count" id="cart-count">0</span>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" id="menu-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Search Overlay -->
<div class="search-overlay" id="search-overlay">
    <div class="search-container">
        <button class="search-close" id="search-close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        <form action="<?php echo esc_url(home_url('/')); ?>" class="search-form" method="get">
            <input type="text" name="s" placeholder="Search products..." class="search-input" autocomplete="off">
            <button type="submit" class="search-submit">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
            </button>
        </form>
    </div>
</div>

<style>
.search-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.95);
    z-index: 2000;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding-top: 15vh;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.search-overlay.active {
    opacity: 1;
    visibility: visible;
}

.search-container {
    width: 100%;
    max-width: 600px;
    padding: 0 var(--space-md);
    position: relative;
}

.search-close {
    position: absolute;
    top: -48px;
    right: var(--space-md);
    color: #fff;
    opacity: 0.7;
    transition: opacity 0.2s;
}

.search-close:hover {
    opacity: 1;
}

.search-form {
    display: flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-md);
    overflow: hidden;
}

.search-input {
    flex: 1;
    padding: 20px 24px;
    font-size: 1.25rem;
    background: transparent;
    border: none;
    color: #fff;
}

.search-input::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.search-input:focus {
    outline: none;
}

.search-submit {
    padding: 20px 24px;
    color: #fff;
    transition: color 0.2s;
}

.search-submit:hover {
    color: var(--color-accent);
}
</style>
