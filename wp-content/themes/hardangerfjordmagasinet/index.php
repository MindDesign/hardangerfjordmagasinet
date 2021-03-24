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

    <h1 class="mb-4 text-5xl">Artikler</h1>

    <?php if ( have_posts() ) : ?>

        <ul class="grid grid-cols-3 gap-8" id="frontpage-article-list">

        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <li class="col">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'article-list-image' ); ?></a>
                <div class="">
                    <h2 class="mt-2 mb-3 text-xl"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <?php the_excerpt() ?>
                </div>
            </li>
        <?php endwhile; ?>

        </ul>

    <?php endif; ?>

</div>

    <?php get_footer(); ?>
