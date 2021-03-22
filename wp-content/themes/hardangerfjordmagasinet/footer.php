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

</div><!-- end #content-container -->

<footer id="site-footer" class="w-full border-t-2 border-b-2 border-primary-lighter" role="contentinfo">
    <div class="bg-primary-lighter">
        <div class="max-w-5xl p-0 lg:p-4 xl:p-6 my-1">
            <div class="grid grid-cols-3 gap-8">
                <div class="col">
                    <img class="" src="<?php echo get_stylesheet_directory_uri() . '/img/hardangerfjordmagasinet-logo.svg'; ?>" alt="">
                </div>
                <div class="col">
                    <h4 class="font-bold">Kontakt oss</h4>
                    <p>Adresse kommer her</p>
                    <p>Telefon: 00 00 00 00</p>
                    <p>E-post: post@domene.no</p>
                    <a href="#">Personvern & informasjonskapsler</a>
                </div>
                <div class="col">
                    <h4 class="font-bold">Sosiale medier</h4>
                    <div class="flex">
                        <div class="mr-2">fb</div>
                        <div class="">in</div>
                    </div>
                </div>
            </div>
            <p>Footer</p>
            <p>Testing testing</p>
        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
