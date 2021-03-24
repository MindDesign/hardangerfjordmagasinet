<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

get_header(); ?>

<div class="flex-1">

    <div class="my-4" style="height: 40px; width: 100%; background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/featured-border.png' ?>); background-repeat: repeat-x"></div>

    <?php while ( have_posts() ) :
        the_post();
        get_template_part( 'templates/content/content-page' );

        // If comments are open or there is at least one comment, load up the comment template.
        //if ( comments_open() || get_comments_number() ) {
        //	comments_template();
        //}
    endwhile; // End of the loop. ?>

</div>

<?php get_footer();
