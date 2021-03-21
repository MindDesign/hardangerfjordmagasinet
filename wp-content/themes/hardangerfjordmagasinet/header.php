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

    <header class="max-w-5xl relative" id="site-header">
        <div class="mb-8 w-full h-32 bg-primary" id="site-header-banner"> Banner </div>

        <div class="mb-8 flex justify-between items-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
                <img class="w-96 h-auto" src="<?php echo get_stylesheet_directory_uri() . '/img/hardangerfjordmagasinet-logo.svg' ?>" alt="">
            </a>
            <div class="flex flex-col items-end">
                <div class="px-4 py-2 mb-3 w-44 bg-gray-100">Søk</div>
                <nav class="">
                    <a href="#" class="pr-4 text-xl text-primary uppercase">Artikler</a>
                    <a href="#" class="pr-4 text-xl text-primary uppercase">Annonsere</a>
                    <a href="#" class="pr-4 text-xl text-primary uppercase">Om oss</a>
                    <a href="#" class="text-xl text-primary uppercase">Kontakt oss</a>
                </nav>
            </div>
        </div>

        <div class="absolute top-0 -right-80 w-72 bg-primary h-96">
            Banner
        </div>
    </header>
