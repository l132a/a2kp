<?php
/**
 * The template for displaying all pages
 *
 * @author Theme Vision <support@theme-vision.com>
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

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>