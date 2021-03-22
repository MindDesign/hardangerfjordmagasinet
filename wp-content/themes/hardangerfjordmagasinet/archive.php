<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

    <section class="mt-12 pt-12 border-t border-primary-lighter max-w-5xl">
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
    </section>

	<?php //twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php //get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
