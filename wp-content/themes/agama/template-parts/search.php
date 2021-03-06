<?php
/**
 * The template for displaying Search Results pages
 *
 * @author      Theme Vision <support@theme-vision.com>
 * @package     Agama
 * @since       1.0.0
 */

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>
    
<section id="primary" class="site-content <?php echo esc_attr( Agama::bs_class() ); ?>">

    <?php if( have_posts() ): ?>
    <header class="page-header">
        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'agama' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header>
    <?php endif; ?>

    <!-- Content -->
    <div id="content" role="main" <?php if( get_theme_mod('agama_blog_layout', 'list') == 'grid' && ! is_singular() ): ?>class="js-isotope"  data-isotope-options='{ "itemSelector": ".article-wrapper" }'<?php endif; ?>>

    <?php if ( have_posts() ) : ?>

        <?php agama_content_nav( 'nav-above' ); ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

        <?php endwhile; ?>

    <?php else : ?>

        <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php _e( 'Nothing Found', 'agama' ); ?></h1>
            </header>

            <div class="entry-content">
                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'agama' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>

    <?php endif; ?>

    </div><!-- #content -->

    <?php agama_content_nav( 'nav-below' ); ?>
    <?php Agama_Helper::get_infinite_scroll_load_more_btn(); ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>