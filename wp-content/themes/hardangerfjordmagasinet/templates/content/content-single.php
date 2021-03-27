<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('-mt-4 px-2 md:px-0 max-w-5xl'); ?>>

    <div class="my-4" style="height: 40px; width: 100%; background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/featured-border.png' ?>); background-repeat: repeat-x"></div>

    <header class="entry-header alignwide">
		<?php the_title( '<h1 class="mb-4 text-3xl md:text-4xl lg:text-5xl font-medium">', '</h1>' ); ?>
        <div class="mb-4 text-xl md:text-2xl font-light">
            <?php the_excerpt() ?>
        </div>
		<?php the_post_thumbnail('full', array('class' => 'w-full h-auto')); ?>
        <div class="px-2 mt-2 mb-4 leading-5 font-light italic"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'hardangerfjordmagasinet' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'hardangerfjordmagasinet' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php //twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php //if ( ! is_singular( 'attachment' ) ) : ?>
		<?php //get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php //endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
