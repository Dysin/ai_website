<?php
/**
 * Main Index Template
 *
 * @package DJI_Store_Theme
 */

get_header();
?>

<main class="site-main">
    <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
            <section class="section">
                <div class="container">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </div>
            </section>
        <?php endif; ?>

        <section class="section">
            <div class="container">
                <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: var(--space-lg);">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> style="background: var(--color-bg-primary); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-image" style="aspect-ratio: 16/9; overflow: hidden;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="post-content" style="padding: var(--space-md);">
                                <header class="post-header" style="margin-bottom: var(--space-sm);">
                                    <span class="post-date" style="font-size: 0.875rem; color: var(--color-text-muted);">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </header>
                                <h2 class="post-title" style="font-size: 1.25rem; margin-bottom: var(--space-xs);">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-excerpt" style="color: var(--color-text-secondary); font-size: 0.9375rem;">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="pagination" style="margin-top: var(--space-xl); text-align: center;">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('Previous', 'dji-store-theme'),
                        'next_text' => __('Next', 'dji-store-theme'),
                    ));
                    ?>
                </div>
            </div>
        </section>

    <?php else : ?>
        <section class="section">
            <div class="container">
                <div style="text-align: center; padding: var(--space-3xl) 0;">
                    <h1 style="margin-bottom: var(--space-md);"><?php esc_html_e('No content found', 'dji-store-theme'); ?></h1>
                    <p style="color: var(--color-text-secondary); margin-bottom: var(--space-lg);">
                        <?php esc_html_e('Sorry, no posts were found. Try a different search or browse our products.', 'dji-store-theme'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
