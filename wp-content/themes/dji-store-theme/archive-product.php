<?php
/**
 * Product Archive Template
 *
 * @package DJI_Store_Theme
 */

get_header();

// Get query vars
$term = get_queried_object();
$page_title = is_tax() ? $term->name : 'All Products';
?>

<main class="site-main products-archive" style="padding-top: calc(var(--header-height) + var(--space-xl)); min-height: 100vh;">
    <div class="container">
        <!-- Page Header -->
        <div class="archive-header" style="text-align: center; margin-bottom: var(--space-2xl);">
            <h1 class="archive-title" style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: var(--space-sm);">
                <?php echo esc_html($page_title); ?>
            </h1>
            <?php if (is_tax()) : ?>
                <p class="archive-description" style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto;">
                    <?php echo esc_html($term->description ?: 'Browse our selection of high-quality products.'); ?>
                </p>
            <?php else : ?>
                <p class="archive-description" style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto;">
                    Discover our full range of cutting-edge technology products.
                </p>
            <?php endif; ?>
        </div>

        <?php if (have_posts()) : ?>
            <!-- Products Grid -->
            <div class="products-grid" style="margin-bottom: var(--space-2xl);">
                <?php while (have_posts()) : the_post();
                    $product_id = get_the_ID();
                    $price = get_post_meta($product_id, '_price', true);
                    $sale_price = get_post_meta($product_id, '_sale_price', true);
                    $terms = get_the_terms($product_id, 'product_category');
                ?>
                    <article class="product-card">
                        <div class="product-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                </a>
                            <?php else : ?>
                                <div style="aspect-ratio: 1; background: var(--color-bg-secondary); display: flex; align-items: center; justify-content: center;">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--color-text-muted)" stroke-width="1">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5"/>
                                        <polyline points="21 15 16 10 5 21"/>
                                    </svg>
                                </div>
                            <?php endif; ?>

                            <?php if ($sale_price && $sale_price < $price) : ?>
                                <span class="product-badge sale">Sale</span>
                            <?php elseif (get_post_time('U') > time() - (7 * 24 * 60 * 60)) : ?>
                                <span class="product-badge new">New</span>
                            <?php endif; ?>

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
                            <?php if ($terms && !is_wp_error($terms)) : ?>
                                <span class="product-category"><?php echo esc_html($terms[0]->name); ?></span>
                            <?php endif; ?>

                            <h3 class="product-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <div class="product-price">
                                <?php if ($sale_price && $sale_price < $price) : ?>
                                    <span class="price-current">$<?php echo number_format((float)$sale_price, 2); ?></span>
                                    <span class="price-original">$<?php echo number_format((float)$price, 2); ?></span>
                                <?php elseif ($price) : ?>
                                    <span class="price-current">$<?php echo number_format((float)$price, 2); ?></span>
                                <?php else : ?>
                                    <span class="price-current">Price TBD</span>
                                <?php endif; ?>
                            </div>

                            <button class="btn btn-primary product-btn">Add to Cart</button>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination" style="text-align: center; margin-bottom: var(--space-2xl);">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => sprintf(
                        '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg> %s',
                        __('Previous', 'dji-store-theme')
                    ),
                    'next_text' => sprintf(
                        '%s <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>',
                        __('Next', 'dji-store-theme')
                    ),
                ));
                ?>
            </div>

        <?php else : ?>
            <!-- No Products Found -->
            <div style="text-align: center; padding: var(--space-3xl) 0;">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="var(--color-text-muted)" stroke-width="1" style="margin-bottom: var(--space-md);">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
                <h2 style="margin-bottom: var(--space-sm);">No Products Found</h2>
                <p style="color: var(--color-text-secondary); margin-bottom: var(--space-lg);">
                    We couldn't find any products in this category. Try browsing all products.
                </p>
                <a href="<?php echo esc_url(home_url('/products')); ?>" class="btn btn-primary">View All Products</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
.products-archive .product-card {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.6s ease forwards;
}

.products-archive .product-card:nth-child(1) { animation-delay: 100ms; }
.products-archive .product-card:nth-child(2) { animation-delay: 200ms; }
.products-archive .product-card:nth-child(3) { animation-delay: 300ms; }
.products-archive .product-card:nth-child(4) { animation-delay: 400ms; }
.products-archive .product-card:nth-child(5) { animation-delay: 500ms; }
.products-archive .product-card:nth-child(6) { animation-delay: 600ms; }
.products-archive .product-card:nth-child(7) { animation-delay: 700ms; }
.products-archive .product-card:nth-child(8) { animation-delay: 800ms; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.archive-header {
    padding-top: var(--space-xl);
}
</style>

<?php get_footer(); ?>
