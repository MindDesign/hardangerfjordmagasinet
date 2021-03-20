<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>

<body <?php body_class('p-0 lg:p-4 xl:p-6'); ?>>
<?php wp_body_open(); ?>

    <header class="max-w-5xl" id="site-header">
        <div class="mb-8 w-full h-32 bg-green-400" id="site-header-banner"> Banner </div>

        <div class="mb-8 flex justify-between items-center">
            <img class="w-96 h-auto" src="<?php echo get_stylesheet_directory_uri() . '/img/hardangerfjordmagasinet-logo.svg' ?>" alt="">
            <div class="flex flex-col items-end">
                <div class="px-4 py-2 mb-3 w-44 bg-gray-100">Søk</div>
                <nav class="">
                    <a href="#" class="pr-4 text-xl text-green-400 uppercase">Artikler</a>
                    <a href="#" class="pr-4 text-xl text-green-400 uppercase">Annonsere</a>
                    <a href="#" class="pr-4 text-xl text-green-400 uppercase">Om oss</a>
                    <a href="#" class="text-xl text-green-400 uppercase">Kontakt oss</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="max-w-5xl relative" id="frontpage-featured">
        <img src="https://via.placeholder.com/970x370.png" class="w-full h-auto" alt="">
        <div class="max-w-xl absolute left-5 bottom-5">
            <h1 class="mb-3 text-shadow text-4xl text-white">Overskrift på artikkel</h1>
            <p class="text-white text-xl">Ingress på artikkel kommer her. Ingress på artikkel kommer her. Ingress på artikkel kommer her. Ingress på artikkel kommer her.</p>
        </div>
    </section>