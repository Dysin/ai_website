<?php
/**
 * Page Template
 *
 * @package DJI_Store_Theme
 */

get_header();

while (have_posts()) :
    the_post();
?>

<main class="site-main page-content" style="padding-top: var(--header-height); min-height: 80vh;">
    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (!is_front_page() && has_post_thumbnail()) : ?>
            <div class="page-hero" style="height: 300px; position: relative; overflow: hidden;">
                <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.5) 100%);"></div>
                <div class="container" style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 100%; padding: var(--space-xl);">
                    <h1 class="page-title" style="color: #fff; margin: 0;"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php elseif (!is_front_page()) : ?>
            <div style="background: var(--color-bg-secondary); padding: var(--space-2xl) 0;">
                <div class="container">
                    <h1 class="page-title" style="text-align: center;"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="page-content-wrapper" style="max-width: 800px; margin: 0 auto; padding: var(--space-2xl) 0;">
                <?php if (!is_front_page()) : ?>
                    <div class="page-meta" style="display: flex; align-items: center; gap: var(--space-md); margin-bottom: var(--space-lg); color: var(--color-text-muted); font-size: 0.875rem;">
                        <time datetime="<?php echo get_the_date('c'); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                        <?php if (get_the_author()) : ?>
                            <span>|</span>
                            <span><?php the_author(); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="line-height: 1.8; color: var(--color-text-secondary);">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: var(--space-lg); padding-top: var(--space-lg); border-top: 1px solid var(--color-border);">' . esc_html__('Pages:', 'dji-store-theme'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="comments-section" style="margin-top: var(--space-2xl); padding-top: var(--space-xl); border-top: 1px solid var(--color-border);">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </article>
</main>

<?php
endwhile;
get_footer();
