<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

?>

    <footer id="site-footer" class="md:-mx-2 lg:-mx-4 xl:-mx-6 flex-0 min-w-full border-t-2 border-b-2 border-primary-lighter" role="contentinfo">
        <div class="bg-primary-lighter">
            <div class="max-w-5xl p-4 md:p-2 lg:p-4 xl:p-6 my-1" id="site-footer-content">
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_col_1") ) : ?><?php endif;?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_col_2") ) : ?><?php endif;?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_col_3") ) : ?><?php endif;?>

                </div>
            </div>
        </div>
    </footer><!-- #colophon -->

</div><!-- end #content-container -->

<?php wp_footer(); ?>

</body>
</html>
