<?php
/**
 * Single Product Template
 *
 * @package DJI_Store_Theme
 */

get_header();

while (have_posts()) :
    the_post();
    $product_id = get_the_ID();
    $price = get_post_meta($product_id, '_price', true);
    $sale_price = get_post_meta($product_id, '_sale_price', true);
    $sku = get_post_meta($product_id, '_sku', true);
    $stock = get_post_meta($product_id, '_stock', true);
?>

<main class="site-main product-page" style="padding-top: var(--header-height);">
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb" style="margin-bottom: var(--space-lg); font-size: 0.875rem; color: var(--color-text-muted);">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--color-text-secondary);">Home</a>
            <span style="margin: 0 8px;">/</span>
            <a href="<?php echo esc_url(home_url('/products')); ?>" style="color: var(--color-text-secondary);">Products</a>
            <span style="margin: 0 8px;">/</span>
            <span><?php the_title(); ?></span>
        </nav>

        <div class="product-detail" style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-2xl);">
            <!-- Product Gallery -->
            <div class="product-gallery">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="gallery-main" style="aspect-ratio: 1; background: var(--color-bg-secondary); border-radius: var(--radius-lg); overflow: hidden; margin-bottom: var(--space-md);">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                    </div>
                <?php else : ?>
                    <div class="gallery-placeholder" style="aspect-ratio: 1; background: var(--color-bg-secondary); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--color-text-muted)" stroke-width="1">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <polyline points="21 15 16 10 5 21"/>
                        </svg>
                    </div>
                <?php endif; ?>

                <div class="gallery-thumbs" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-sm);">
                    <?php
                    // Placeholder thumbnails
                    for ($i = 0; $i < 4; $i++) :
                    ?>
                        <div style="aspect-ratio: 1; background: var(--color-bg-secondary); border-radius: var(--radius-sm); cursor: pointer; transition: all 0.2s; border: 2px solid transparent;" onmouseover="this.style.borderColor='var(--color-accent)'" onmouseout="this.style.borderColor='transparent'"></div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <?php
                $terms = get_the_terms($product_id, 'product_category');
                if ($terms && !is_wp_error($terms)) :
                ?>
                    <span class="product-category" style="font-size: 0.875rem; color: var(--color-accent); text-transform: uppercase; letter-spacing: 0.05em;">
                        <?php echo esc_html($terms[0]->name); ?>
                    </span>
                <?php endif; ?>

                <h1 class="product-title" style="font-size: 2rem; margin: var(--space-sm) 0 var(--space-md);">
                    <?php the_title(); ?>
                </h1>

                <?php if ($sku) : ?>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); margin-bottom: var(--space-md);">
                        SKU: <?php echo esc_html($sku); ?>
                    </p>
                <?php endif; ?>

                <div class="product-price" style="margin-bottom: var(--space-lg);">
                    <?php if ($sale_price && $sale_price < $price) : ?>
                        <span class="price-current" style="font-size: 2rem; font-weight: 700; color: var(--color-accent);">
                            $<?php echo number_format((float)$sale_price, 2); ?>
                        </span>
                        <span class="price-original" style="font-size: 1.25rem; color: var(--color-text-muted); text-decoration: line-through; margin-left: var(--space-sm);">
                            $<?php echo number_format((float)$price, 2); ?>
                        </span>
                    <?php else : ?>
                        <span class="price-current" style="font-size: 2rem; font-weight: 700; color: var(--color-accent);">
                            $<?php echo number_format((float)$price, 2); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="product-description" style="margin-bottom: var(--space-lg); color: var(--color-text-secondary); line-height: 1.8;">
                    <?php the_content(); ?>
                </div>

                <?php if ($stock !== '' && $stock > 0) : ?>
                    <p style="color: var(--color-success); margin-bottom: var(--space-md);">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 4px;">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        In Stock (<?php echo esc_html($stock); ?> available)
                    </p>
                <?php elseif ($stock !== '' && $stock <= 0) : ?>
                    <p style="color: var(--color-error); margin-bottom: var(--space-md);">Out of Stock</p>
                <?php endif; ?>

                <div class="product-actions" style="display: flex; gap: var(--space-md); margin-bottom: var(--space-xl);">
                    <div class="quantity-selector" style="display: flex; align-items: center; border: 1px solid var(--color-border); border-radius: var(--radius-sm);">
                        <button class="qty-btn" style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;" onclick="updateQty(-1)">-</button>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="<?php echo esc_attr($stock ?: 99); ?>" style="width: 60px; height: 44px; text-align: center; border: none; font-size: 1rem; font-weight: 600;">
                        <button class="qty-btn" style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;" onclick="updateQty(1)">+</button>
                    </div>
                    <button class="btn btn-primary btn-lg" style="flex: 1;" onclick="addToCart(<?php echo $product_id; ?>)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                            <line x1="3" y1="6" x2="21" y2="6"/>
                            <path d="M16 10a4 4 0 0 1-8 0"/>
                        </svg>
                        Add to Cart
                    </button>
                </div>

                <div class="product-meta" style="padding-top: var(--space-lg); border-top: 1px solid var(--color-border);">
                    <p style="margin-bottom: var(--space-xs); font-size: 0.9375rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 8px; color: var(--color-text-muted);">
                            <rect x="1" y="3" width="15" height="13"/>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                            <circle cx="5.5" cy="18.5" r="2.5"/>
                            <circle cx="18.5" cy="18.5" r="2.5"/>
                        </svg>
                        Free shipping on orders over $100
                    </p>
                    <p style="margin-bottom: var(--space-xs); font-size: 0.9375rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 8px; color: var(--color-text-muted);">
                            <polyline points="23 4 23 10 17 10"/>
                            <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/>
                        </svg>
                        30-day hassle-free returns
                    </p>
                    <p style="font-size: 0.9375rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 8px; color: var(--color-text-muted);">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        2 year official warranty
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function updateQty(delta) {
    const input = document.getElementById('quantity');
    const newVal = parseInt(input.value) + delta;
    if (newVal >= 1 && newVal <= parseInt(input.max)) {
        input.value = newVal;
    }
}

function addToCart(productId) {
    const qty = document.getElementById('quantity').value;
    const btn = event.target.closest('button');
    const originalText = btn.innerHTML;

    btn.innerHTML = 'Added!';
    btn.disabled = true;

    // Update cart count
    const cartCount = document.getElementById('cart-count');
    if (cartCount) {
        cartCount.textContent = parseInt(cartCount.textContent || 0) + parseInt(qty);
    }

    setTimeout(() => {
        btn.innerHTML = originalText;
        btn.disabled = false;
    }, 2000);

    console.log('Added to cart:', productId, 'qty:', qty);
}
</script>

<?php
endwhile;
get_footer();
