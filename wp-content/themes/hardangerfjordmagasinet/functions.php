<?php



function hardangerfjordmagasinet_scripts() {
    wp_enqueue_style( 'hardangerfjordmagasinet-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

    // Print styles.
    //wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

    // Main navigation scripts.
    if ( has_nav_menu( 'primary' ) ) {
        wp_enqueue_script(
            'hardangerfjordmagasinet-primary-navigation-script',
            get_template_directory_uri() . '/js/primary-navigation.js',
            array( ),
            wp_get_theme()->get( 'Version' ),
            true
        );
    }

}
add_action( 'wp_enqueue_scripts', 'hardangerfjordmagasinet_scripts' );