<?php
/**
 * Footer Template
 *
 * @package DJI_Store_Theme
 */
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <div class="footer-logo">Tech<span>Store</span></div>
                <p class="footer-description">
                    Your premier destination for cutting-edge technology products.
                    We bring you the latest in drones, cameras, and smart devices.
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="YouTube">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/>
                            <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#fff"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Shop Column -->
            <div class="footer-column">
                <h4>Shop</h4>
                <nav class="footer-links">
                    <a href="<?php echo esc_url(home_url('/product-category/drones')); ?>">Drones</a>
                    <a href="<?php echo esc_url(home_url('/product-category/handhelds')); ?>">Handhelds</a>
                    <a href="<?php echo esc_url(home_url('/product-category/cameras')); ?>">Cameras</a>
                    <a href="<?php echo esc_url(home_url('/product-category/accessories')); ?>">Accessories</a>
                    <a href="<?php echo esc_url(home_url('/products')); ?>">All Products</a>
                </nav>
            </div>

            <!-- Support Column -->
            <div class="footer-column">
                <h4>Support</h4>
                <nav class="footer-links">
                    <a href="#">Help Center</a>
                    <a href="#">Order Tracking</a>
                    <a href="#">Warranty Info</a>
                    <a href="#">Repair Service</a>
                    <a href="#">Contact Us</a>
                </nav>
            </div>

            <!-- Newsletter Column -->
            <div class="footer-column">
                <h4>Stay Updated</h4>
                <p style="font-size: 0.9375rem; opacity: 0.7; margin-bottom: var(--space-md);">
                    Subscribe for exclusive offers and the latest tech news.
                </p>
                <form class="newsletter-form" action="#" method="post">
                    <input type="email" class="newsletter-input" placeholder="Your email" required>
                    <button type="submit" class="newsletter-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"/>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p class="footer-copyright">
                &copy; <?php echo date('Y'); ?> TechStore. All rights reserved.
            </p>
            <div class="footer-payments">
                <span style="font-size: 0.875rem; opacity: 0.6;">We Accept:</span>
                <svg width="40" height="24" viewBox="0 0 40 24" fill="none">
                    <rect width="40" height="24" rx="4" fill="#1A1F71"/>
                    <text x="20" y="15" text-anchor="middle" fill="#fff" font-size="8" font-weight="bold">VISA</text>
                </svg>
                <svg width="40" height="24" viewBox="0 0 40 24" fill="none">
                    <rect width="40" height="24" rx="4" fill="#EB001B"/>
                    <circle cx="15" cy="12" r="7" fill="#EB001B"/>
                    <circle cx="25" cy="12" r="7" fill="#F79E1B"/>
                </svg>
                <svg width="40" height="24" viewBox="0 0 40 24" fill="none">
                    <rect width="40" height="24" rx="4" fill="#00579F"/>
                    <text x="20" y="15" text-anchor="middle" fill="#fff" font-size="6" font-weight="bold">AMEX</text>
                </svg>
                <svg width="40" height="24" viewBox="0 0 40 24" fill="none">
                    <rect width="40" height="24" rx="4" fill="#003087"/>
                    <text x="20" y="15" text-anchor="middle" fill="#fff" font-size="6" font-weight="bold">PayPal</text>
                </svg>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
