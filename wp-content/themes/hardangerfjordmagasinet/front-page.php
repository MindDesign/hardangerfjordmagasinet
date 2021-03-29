<?php
/**
 * The frontpage template file
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

<?php
$sticky = get_option( 'sticky_posts' );
$args = array(
    'posts_per_page'      => 1,
    'post__in'            => $sticky,
    'ignore_sticky_posts' => 1,
);
$the_query = new WP_Query( $args );
if ( $sticky[0] ) { ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <section class="max-w-5xl" id="frontpage-featured">
            <div class="relative">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'frontpage-featured-image', array('class' => 'w-full h-auto')); ?></a>
                <div class="p-2 static md:absolute lg:w-full lg:max-w-xl left-8 top-8 md:bg-black md:bg-opacity-60">
                    <h1 class="mb-3 md:text-shadow text-3xl md:text-white"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="md:text-white text-md">
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt() ?></a>
                    </div>
                </div>
            </div>
            <div class="my-4" style="height: 40px; width: 100%; background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/featured-border.png' ?>); background-repeat: repeat-x"></div>
        </section>
    <?php endwhile; wp_reset_postdata();
}
?>


<section class="mt-4 md:mt-0 max-w-5xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="frontpage-article-list">
        <?php
        $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => get_option( 'sticky_posts' ) ) );
        if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

            <?php get_template_part ( "templates/content/content-excerpt"); ?>

        <?php endwhile;endif; ?>
    </div>
    <div class="mt-8 pr-2 text-right">
        <a href="/artikler/" class="text-xl text-right uppercase underline">Sjå fleire artiklar</a>
    </div>
</section>

<section class="my-20 max-w-5xl">
    <h2 class="my-4 text-2xl font-bold text-center">Kommuner</h2>

    <?php get_template_part( 'templates/content/logo-cloud' ); ?>
</section>

<?php get_footer ();