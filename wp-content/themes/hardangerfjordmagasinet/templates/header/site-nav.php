<?php
/**
 * Displays the site navigation.
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav id="site-navigation" class="" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'hardangerfjordmagasinet' ); ?>">
        <?php $items = wp_get_nav_menu_items('Hovedmeny'); ?>
        <?php if ( !empty ( $items ) ) : ?>
            <?php foreach ( $items as $item ) : ?>
                <?php $current = ( $item->object_id == get_queried_object_id() ) ? 'font-bold' : ''; ?>
                <a href="<?php echo $item->url; ?>" class="pb-4 pt-3 block w-full text-center lg:py-auto lg:inline-block lg:w-auto lg:text-left lg:pl-4 text-xl text-primary uppercase <?php echo $current; ?>"><?php echo $item->title; ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </nav><!-- #site-navigation -->
<?php endif; ?>
