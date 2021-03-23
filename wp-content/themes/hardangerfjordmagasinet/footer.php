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

    <footer id="site-footer" class="lg:-mx-4 xl:-mx-6 flex-0 min-w-full border-t-2 border-b-2 border-primary-lighter" role="contentinfo">
        <div class="bg-primary-lighter">
            <div class="max-w-5xl p-0 lg:p-4 xl:p-6 my-1" id="site-footer-content">
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
                            <div class="mr-2">
                                <svg class="w-auto h-6" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                    <g id="XMLID_834_">
                                        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
                                            c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
                                            V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
                                            C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
                                            c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="">
                                <svg class="w-auto h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="552.77px" height="552.77px" viewBox="0 0 552.77 552.77" style="enable-background:new 0 0 552.77 552.77;"
                                     xml:space="preserve">
                                    <g>
                                        <path d="M17.95,528.854h71.861c9.914,0,17.95-8.037,17.95-17.951V196.8c0-9.915-8.036-17.95-17.95-17.95H17.95
                                            C8.035,178.85,0,186.885,0,196.8v314.103C0,520.816,8.035,528.854,17.95,528.854z"/>
                                        <path d="M17.95,123.629h71.861c9.914,0,17.95-8.036,17.95-17.95V41.866c0-9.914-8.036-17.95-17.95-17.95H17.95
                                            C8.035,23.916,0,31.952,0,41.866v63.813C0,115.593,8.035,123.629,17.95,123.629z"/>
                                        <path d="M525.732,215.282c-10.098-13.292-24.988-24.223-44.676-32.791c-19.688-8.562-41.42-12.846-65.197-12.846
                                            c-48.268,0-89.168,18.421-122.699,55.27c-6.672,7.332-11.523,5.729-11.523-4.186V196.8c0-9.915-8.037-17.95-17.951-17.95h-64.192
                                            c-9.915,0-17.95,8.035-17.95,17.95v314.103c0,9.914,8.036,17.951,17.95,17.951h71.861c9.915,0,17.95-8.037,17.95-17.951V401.666
                                            c0-45.508,2.748-76.701,8.244-93.574c5.494-16.873,15.66-30.422,30.488-40.649c14.83-10.227,31.574-15.343,50.24-15.343
                                            c14.572,0,27.037,3.58,37.393,10.741c10.355,7.16,17.834,17.19,22.436,30.104c4.604,12.912,6.904,41.354,6.904,85.33v132.627
                                            c0,9.914,8.035,17.951,17.949,17.951h71.861c9.914,0,17.949-8.037,17.949-17.951V333.02c0-31.445-1.982-55.607-5.941-72.48
                                            S535.836,228.581,525.732,215.282z"/>
                                    </g>
                                </svg>
                            </div>
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
