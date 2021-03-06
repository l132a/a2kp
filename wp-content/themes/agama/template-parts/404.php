<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @author  Theme Vision <support@theme-vision.com>
 * @package Agama
 * @since   1.0.0
 */

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>
    
<div id="primary" class="site-content <?php echo esc_attr( Agama::bs_class() ); ?>">
    <div id="content" role="main">

        <article id="post-0" class="post error404 no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title align-center"><?php esc_html_e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'agama' ); ?></h1>
            </header>

            <div class="entry-content">
                <p class="desc-404 align-center"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'agama' ); ?></p>
                <p class="num-404 align-center">404</p>
                <?php get_search_form(); ?>
            </div>
        </article>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
