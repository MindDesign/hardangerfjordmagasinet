<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( "col" ); ?>>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'article-list-image', array('class' => 'px-2 md:px-0 w-full') ); ?></a>
    <div class="px-2 md:px-0">
        <h2 class="my-2 text-2xl font-light"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_excerpt() ?>
    </div>
</article>
