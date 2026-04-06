<?php
/**
 * DJI Store Theme Functions
 *
 * @package DJI_Store_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function dji_store_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus.
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'dji-store-theme'),
        'footer'    => __('Footer Menu', 'dji-store-theme'),
        'mobile'    => __('Mobile Menu', 'dji-store-theme'),
    ));

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Add support for wide alignment.
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'dji_store_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function dji_store_scripts() {
    // Google Fonts - Inter & DM Sans
    wp_enqueue_style(
        'dji-store-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'dji-store-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'dji-store-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Pass PHP data to JavaScript
    wp_localize_script('dji-store-main', 'djiStore', array(
        'ajaxUrl'   => admin_url('admin-ajax.php'),
        'homeUrl'   => home_url('/'),
        'themeUrl'  => get_template_directory_uri(),
        'nonce'     => wp_create_nonce('dji_store_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'dji_store_scripts');

/**
 * Register widget areas.
 */
function dji_store_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'dji-store-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'dji-store-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Footer widget areas
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array(
            'name'          => sprintf(__('Footer Column %d', 'dji-store-theme'), $i),
            'id'            => 'footer-' . $i,
            'description'   => sprintf(__('Widgets for footer column %d.', 'dji-store-theme'), $i),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ));
    }
}
add_action('widgets_init', 'dji_store_widgets_init');

/**
 * Custom Product Post Type
 */
function dji_store_register_post_types() {
    // Products Custom Post Type
    $labels = array(
        'name'                  => _x('Products', 'Post Type General Name', 'dji-store-theme'),
        'singular_name'         => _x('Product', 'Post Type Singular Name', 'dji-store-theme'),
        'menu_name'             => __('Products', 'dji-store-theme'),
        'name_admin_bar'        => __('Product', 'dji-store-theme'),
        'archives'              => __('Product Archives', 'dji-store-theme'),
        'attributes'            => __('Product Attributes', 'dji-store-theme'),
        'parent_item_colon'     => __('Parent Product:', 'dji-store-theme'),
        'all_items'             => __('All Products', 'dji-store-theme'),
        'add_new_item'          => __('Add New Product', 'dji-store-theme'),
        'add_new'               => __('Add New', 'dji-store-theme'),
        'new_item'              => __('New Product', 'dji-store-theme'),
        'edit_item'             => __('Edit Product', 'dji-store-theme'),
        'update_item'           => __('Update Product', 'dji-store-theme'),
        'view_item'             => __('View Product', 'dji-store-theme'),
        'view_items'            => __('View Products', 'dji-store-theme'),
        'search_items'          => __('Search Product', 'dji-store-theme'),
        'not_found'             => __('Not found', 'dji-store-theme'),
        'not_found_in_trash'    => __('Not found in Trash', 'dji-store-theme'),
        'featured_image'        => __('Product Image', 'dji-store-theme'),
        'set_featured_image'    => __('Set product image', 'dji-store-theme'),
        'remove_featured_image' => __('Remove product image', 'dji-store-theme'),
        'use_featured_image'   => __('Use as product image', 'dji-store-theme'),
    );

    $args = array(
        'label'               => __('Product', 'dji-store-theme'),
        'description'         => __('E-commerce products', 'dji-store-theme'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'       => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'products'),
    );

    register_post_type('product', $args);

    // Product Categories Taxonomy
    $cat_labels = array(
        'name'              => _x('Product Categories', 'Taxonomy General Name', 'dji-store-theme'),
        'singular_name'     => _x('Product Category', 'Taxonomy Singular Name', 'dji-store-theme'),
        'menu_name'         => __('Categories', 'dji-store-theme'),
        'all_items'         => __('All Categories', 'dji-store-theme'),
        'parent_item'       => __('Parent Category', 'dji-store-theme'),
        'parent_item_colon' => __('Parent Category:', 'dji-store-theme'),
        'new_item_name'     => __('New Category Name', 'dji-store-theme'),
        'add_new_item'      => __('Add New Category', 'dji-store-theme'),
        'edit_item'         => __('Edit Category', 'dji-store-theme'),
        'update_item'       => __('Update Category', 'dji-store-theme'),
        'view_item'         => __('View Category', 'dji-store-theme'),
        'separate_items_with_commas' => __('Separate categories with commas', 'dji-store-theme'),
        'add_or_remove_items' => __('Add or remove categories', 'dji-store-theme'),
        'choose_from_most_used' => __('Choose from the most used', 'dji-store-theme'),
        'popular_items'     => __('Popular Categories', 'dji-store-theme'),
        'search_items'      => __('Search Categories', 'dji-store-theme'),
        'not_found'         => __('Not Found', 'dji-store-theme'),
    );

    $cat_args = array(
        'labels'             => $cat_labels,
        'hierarchical'       => true,
        'public'             => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'           => array('slug' => 'product-category'),
    );

    register_taxonomy('product_category', array('product'), $cat_args);
}
add_action('init', 'dji_store_register_post_types');

/**
 * Product Meta Boxes
 */
function dji_store_add_meta_boxes() {
    add_meta_box(
        'product_details',
        __('Product Details', 'dji-store-theme'),
        'dji_store_product_meta_box',
        'product',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'dji_store_add_meta_boxes');

function dji_store_product_meta_box($post) {
    wp_nonce_field('dji_store_product_meta', 'dji_store_product_nonce');

    $price = get_post_meta($post->ID, '_price', true);
    $sale_price = get_post_meta($post->ID, '_sale_price', true);
    $sku = get_post_meta($post->ID, '_sku', true);
    $stock = get_post_meta($post->ID, '_stock', true);
    ?>
    <p>
        <label for="product_price"><?php _e('Price ($)', 'dji-store-theme'); ?></label>
        <input type="number" id="product_price" name="_price" value="<?php echo esc_attr($price); ?>" step="0.01" style="width: 100%;">
    </p>
    <p>
        <label for="product_sale_price"><?php _e('Sale Price ($)', 'dji-store-theme'); ?></label>
        <input type="number" id="product_sale_price" name="_sale_price" value="<?php echo esc_attr($sale_price); ?>" step="0.01" style="width: 100%;">
    </p>
    <p>
        <label for="product_sku"><?php _e('SKU', 'dji-store-theme'); ?></label>
        <input type="text" id="product_sku" name="_sku" value="<?php echo esc_attr($sku); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="product_stock"><?php _e('Stock Quantity', 'dji-store-theme'); ?></label>
        <input type="number" id="product_stock" name="_stock" value="<?php echo esc_attr($stock); ?>" style="width: 100%;">
    </p>
    <?php
}

function dji_store_save_meta($post_id) {
    if (!isset($_POST['dji_store_product_nonce']) || !wp_verify_nonce($_POST['dji_store_product_nonce'], 'dji_store_product_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array('_price', '_sale_price', '_sku', '_stock');
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'dji_store_save_meta');

/**
 * Get Products
 */
function dji_store_get_products($args = array()) {
    $defaults = array(
        'post_type'      => 'product',
        'posts_per_page' => 8,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $args = wp_parse_args($args, $defaults);
    return new WP_Query($args);
}

/**
 * Get Product Price HTML
 */
function dji_store_get_price_html($post_id) {
    $price = get_post_meta($post_id, '_price', true);
    $sale_price = get_post_meta($post_id, '_sale_price', true);

    if ($sale_price && $sale_price < $price) {
        return sprintf(
            '<span class="price-current">$%s</span><span class="price-original">$%s</span>',
            number_format((float)$sale_price, 2),
            number_format((float)$price, 2)
        );
    }

    return sprintf('<span class="price-current">$%s</span>', number_format((float)$price, 2));
}

/**
 * Get Product Badge
 */
function dji_store_get_product_badge($post_id) {
    $sale_price = get_post_meta($post_id, '_sale_price', true);
    $price = get_post_meta($post_id, '_price', true);

    if ($sale_price && $sale_price < $price) {
        return '<span class="product-badge sale">Sale</span>';
    }

    $post_date = get_post_time('U', false, $post_id);
    $week_ago = time() - (7 * 24 * 60 * 60);

    if ($post_date > $week_ago) {
        return '<span class="product-badge new">New</span>';
    }

    return '';
}

/**
 * AJAX Handlers
 */
function dji_store_add_to_cart() {
    check_ajax_referer('dji_store_nonce', 'nonce');

    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

    if (!$product_id) {
        wp_send_json_error(array('message' => 'Invalid product'));
    }

    // Cart functionality would go here
    wp_send_json_success(array(
        'message' => 'Product added to cart',
        'cart_count' => 1
    ));
}
add_action('wp_ajax_add_to_cart', 'dji_store_add_to_cart');
add_action('wp_ajax_nopriv_add_to_cart', 'dji_store_add_to_cart');
