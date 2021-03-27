<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

get_header(); ?>

<div class="mb-12 max-w-5xl flex-1">

    <h1 class="px-2 md:px-0 mb-4 text-5xl">Artikler</h1>

    <?php if ( have_posts() ) : ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="frontpage-article-list">

        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>

            <?php get_template_part ( "templates/content/content-excerpt"); ?>

        <?php endwhile; ?>

        </div>

    <?php endif; ?>

</div>

    <?php get_footer(); ?>
