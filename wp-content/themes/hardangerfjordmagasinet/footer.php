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
        </div>
        <footer id="site-footer" class="md:-mx-2 lg:-mx-4 xl:-mx-6 flex-0 min-w-full border-t-2 border-b-2 border-primary-lighter" role="contentinfo">
            <div class="md:px-2 lg:px-4 xl:px-6 bg-primary-lighter">
                <div class="max-w-5xl mx-auto py-4 my-1" id="site-footer-content">
                    <div class="flex flex-wrap">

                        <div class="w-full px-4 mb-10 md:w-1/3">
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_col_1") ) : ?><?php endif;?>
                        </div>

                        <div class="w-1/2 px-4 md:w-1/3">
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_col_2") ) : ?><?php endif;?>
                        </div>

                        <div class="w-1/2 px-4 md:w-1/3">
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_col_3") ) : ?><?php endif;?>
                            <div class="flex">
                                <a href="https://www.facebook.com/HardangerfjordMagasinet" target="_blank" class="pr-3 mr-2">
                                    <img class="w-auto h-6" src="<?php echo get_template_directory_uri() . '/img/facebook-logo.svg'; ?>" alt="">
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer><!-- #colophon -->

</div><!-- end #content-container -->

<?php wp_footer(); ?>

</body>
</html>
