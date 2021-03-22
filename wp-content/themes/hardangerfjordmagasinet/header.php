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
<html class="h-full" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'h-full' ); ?>>

    <?php wp_body_open(); ?>

    <div class="min-h-full flex flex-col items-stretch lg:px-4 xl:px-6" id="content-container">
        <header class="lg:pt-4 xl:pt-6 flex-0 max-w-5xl relative" id="site-header">
            <div class="mb-8 w-full h-32 bg-primary" id="site-header-banner"> Banner </div>

            <div class="mb-8 flex justify-between items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
                    <img class="w-96 h-auto" src="<?php echo get_stylesheet_directory_uri() . '/img/hardangerfjordmagasinet-logo.svg' ?>" alt="">
                </a>
                <div class="flex flex-col items-end">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_search") ) : ?><?php endif;?>
                    <?php get_template_part( 'templates/header/site-nav' ); ?>
                </div>
            </div>

            <div class="absolute hidden lg:block top-0 lg:top-4 xl:top-6 -right-80 w-72 bg-primary h-96">
                Banner
            </div>
        </header>
