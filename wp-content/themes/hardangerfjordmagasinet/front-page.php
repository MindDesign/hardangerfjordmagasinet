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
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array('class' => 'w-full h-auto')); ?></a>
                <div class="max-w-xl absolute left-5 bottom-5">
                    <h1 class="mb-3 text-shadow text-4xl text-white"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="text-white text-xl">
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt() ?></a>
                    </div>
                </div>
            </div>
            <div class="my-4" style="height: 40px; width: 100%; background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/featured-border.png' ?>); background-repeat: repeat-x"></div>
        </section>
    <?php endwhile; wp_reset_postdata();
}
?>


<section class="max-w-5xl">
    <ul class="grid grid-cols-3 gap-8" id="frontpage-article-list">
        <?php
        $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => get_option( 'sticky_posts' ) ) );
        if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
        ?>
        <li class="col">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( get_the_ID(), 'full' ); ?></a>
            <div class="">
                <h2 class="mt-2 mb-3 text-xl"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <?php the_excerpt() ?>
            </div>
        </li>
        <?php
        endwhile;endif;
        ?>
    </ul>
</section>

<section class="my-20 max-w-5xl">
    <h2 class="my-4 text-2xl font-bold text-center">Kommuner</h2>

    <div class="logo-wrapper max-w-5xl overflow-hidden">
        <ul id="thumbnail-carousel" class="relative text-center">
            <li class="absolute left-0 h-full flex items-center">
                <a href="#" class="">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                    </svg>
                </a>
            </li>
            <li class="mx-10 inline-block">
                <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
            </li>
            <li class="mx-10 inline-block">
                <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
            </li>
            <li class="mx-10 inline-block">
                <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
            </li>
            <li class="mx-10 inline-block">
                <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
            </li>
            <li class="absolute right-0 top-0 h-full flex items-center">
                <a href="#" class="">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</section>

<?php get_footer ();