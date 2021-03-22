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
                <a href="<?php echo $item->url; ?>" class="pl-4 text-xl text-primary uppercase"><?php echo $item->title; ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </nav><!-- #site-navigation -->
<?php endif; ?>
