<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) : the_post();

    get_template_part( 'templates/content/content-single' );

    if ( is_attachment() ) {
        // Parent post navigation.
        the_post_navigation(
            array(
                /* translators: %s: Parent post link. */
                'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'hardangerfjordmagasinet' ), '%title' ),
            )
        );
    }

    // If comments are open or there is at least one comment, load up the comment template.
    //if ( comments_open() || get_comments_number() ) {
    //    comments_template();
    //}

endwhile; // End of the loop. ?>

<section class="my-12 pt-12 border-t border-primary-lighter max-w-5xl">
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="frontpage-article-list">
        <?php
        $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 2 ) );
        if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
        ?>
        <li class="col">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'article-list-image', array('class' => 'w-full') ); ?></a>
            <div class="p-4 md:p-0">
                <h2 class="mt-2 mb-3 text-xl"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <?php the_excerpt() ?>
            </div>
        </li>
        <?php
        endwhile;endif;
        ?>
    </ul>
</section>

<?php get_footer();
