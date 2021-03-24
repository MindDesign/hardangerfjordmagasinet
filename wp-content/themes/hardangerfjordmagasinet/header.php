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

    <div class="min-h-full flex flex-col items-stretch md:px-2 lg:px-4 xl:px-6" id="content-container">
        <header class="mb-8 lg:mb-0 mr-0 lg:pt-4 xl:pt-6 flex-0 max-w-5xl relative" id="site-header">
            <div class="mb-8 w-full h-28 bg-gray-50" id="site-header-banner">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_horizontal_banner") ) : ?><?php endif;?>
            </div>

            <div class="flex justify-between items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
                    <img class="px-2 w-72 md:w-96 h-auto" src="<?php echo get_stylesheet_directory_uri() . '/img/hardangerfjordmagasinet-logo.svg' ?>" alt="">
                </a>
                <div class="hidden lg:z-auto lg:static lg:flex lg:flex-col lg:items-end">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_search") ) : ?><?php endif;?>
                    <?php get_template_part( 'templates/header/site-nav' ); ?>
                </div>
                <div class="lg:hidden">
                    <a id="menu-button" href="javascript:" class="text-3xl px-2">&#9776;</a>
                </div>
            </div>

            <div id="side-banner" class="absolute hidden xl:block top-0 lg:top-4 xl:top-6 bg-primary">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_vertical_banner") ) : ?><?php endif;?>
            </div>

            <div id="mobile-menu-wrapper" class="hidden fixed h-full left-0 w-full max-w-md top-0 bottom-0 bg-white z-50 shadow-2xl">
                <button id="close-menu" type="button" class="absolute z-50 top-0 right-0 p-6">LUKK</button>
                <div class="h-full w-full flex flex-col justify-center">
                    <div class="">
                        <?php get_template_part( 'templates/header/site-nav' ); ?>
                    </div>
                    <div class="">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_search") ) : ?><?php endif;?>
                    </div>
                </div>
            </div>
        </header>
