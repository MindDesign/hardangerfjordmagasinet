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
        <header class="mr-0 lg:pt-4 xl:pt-6 flex-0 max-w-5xl relative" id="site-header">
            <div class="mb-8 w-full h-28 bg-gray-50" id="site-header-banner">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_horizontal_banner") ) : ?><?php endif;?>
            </div>

            <div class="mb-8 flex justify-between items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
                    <img class="w-96 h-auto" src="<?php echo get_stylesheet_directory_uri() . '/img/hardangerfjordmagasinet-logo.svg' ?>" alt="">
                </a>
                <div class="hidden h-full w-full top-0 bottom-0 bg-white z-50 lg:z-auto lg:static lg:flex lg:flex-col lg:items-end lg:bg-transparent">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_search") ) : ?><?php endif;?>
                    <?php get_template_part( 'templates/header/site-nav' ); ?>
                </div>
                <div class="lg:hidden">
                    <a href="javascript:" class="text-3xl">&#9776;</a>
                </div>
            </div>

            <div id="side-banner" class="absolute hidden xl:block top-0 lg:top-4 xl:top-6 bg-primary">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header_vertical_banner") ) : ?><?php endif;?>
            </div>
        </header>
