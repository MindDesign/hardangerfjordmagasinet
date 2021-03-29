<?php
/**
 * functions.php
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

/**
 *
 */
if ( ! function_exists( 'hardangerfjordmagasinet_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @return void
     * @since HardangerFjordMagasinet 1.0
     *
     */
    function hardangerfjordmagasinet_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        //load_theme_textdomain( 'hardangerfjordmagasinet', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * This theme does not use a hard-coded <title> tag in the document head,
         * WordPress will provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Add post-formats support.
         */
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1568, 9999);
        add_image_size( 'frontpage-featured-image', 1000, 380, true );
        add_image_size( 'article-list-image', 400, 220, true );

        register_nav_menus(
            array(
                'primary' => esc_html__('Primary menu', 'hardangerfjordmagasinet'),
                'footer' => __('Secondary menu', 'hardangerfjordmagasinet'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        //$logo_width  = 300;
        //$logo_height = 100;

        //add_theme_support(
        //    'custom-logo',
        //    array(
        //        'height'               => $logo_height,
        //        'width'                => $logo_width,
        //        'flex-width'           => true,
        //        'flex-height'          => true,
        //        'unlink-homepage-logo' => true,
        //    )
        //);

        // Add theme support for selective refresh for widgets.
        //add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        //add_theme_support( 'editor-styles' );
        //$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
        //if ( 127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
        //    add_theme_support( 'dark-editor-style' );
        //}

        //$editor_stylesheet_path = './assets/css/style-editor.css';

        // Enqueue editor styles.
        //add_editor_style( $editor_stylesheet_path );

    }

    add_action('after_setup_theme', 'hardangerfjordmagasinet_setup');
}

/**
 * Load theme scripts and CSS
 */
function hardangerfjordmagasinet_scripts()
{
    $css_cache_buster = date("YmdHi", filemtime( get_stylesheet_directory() . '/css/tailwind.css'));
    $js_cache_buster = date("YmdHi", filemtime( get_stylesheet_directory() . '/js/hardangermagasinet.js'));
    wp_enqueue_style('hardangerfjordmagasinet-style', get_template_directory_uri() . '/style.css', array(), $css_cache_buster);
    wp_enqueue_script( 'hardangerfjordmagasinet-script', get_template_directory_uri() . '/js/hardangermagasinet.js', array(), $js_cache_buster, true );
}
add_action( 'wp_enqueue_scripts', 'hardangerfjordmagasinet_scripts' );


/**
 * Register theme sidebars
 */
if ( function_exists('register_sidebar') ) {
    /**
     *
     */
    register_sidebar ( array (
            'name' => 'header_search',
            'before_widget' => '<div class = "">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );

    register_sidebar ( array (
            'name' => 'header_horizontal_banner',
            'before_widget' => '<div class = "">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );

    register_sidebar ( array (
            'name' => 'header_vertical_banner',
            'before_widget' => '<div class = "">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );

    register_sidebar ( array (
            'name' => 'footer_col_1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h4 class="pb-2 font-bold leading-none uppercase">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar ( array (
            'name' => 'footer_col_2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h4 class="pb-2 font-bold leading-none uppercase">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar ( array (
            'name' => 'footer_col_3',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h4 class="pb-2 font-bold leading-none uppercase">',
            'after_title' => '</h4>',
        )
    );
}



if ( ! function_exists( 'hardangerfjordmagasinet_post_thumbnail' ) ) {
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     *
     * @since HardangerFjordMagasinet 1.0
     *
     * @return void
     */
    function hardangerfjordmagasinet_post_thumbnail() {
        if ( ! hardangerfjordmagasinet_can_show_post_thumbnail() ) {
            return;
        }
        ?>

        <?php if ( is_singular() ) : ?>

            <figure class="post-thumbnail">
                <?php
                // Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
                the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
                ?>
                <?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
                    <figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
                <?php endif; ?>
            </figure><!-- .post-thumbnail -->

        <?php else : ?>

            <figure class="post-thumbnail">
                <a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php the_post_thumbnail( 'post-thumbnail' ); ?>
                </a>
                <?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
                    <figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
                <?php endif; ?>
            </figure>

        <?php endif; ?>
        <?php
    }
}

/**
 * Determines if post thumbnail can be displayed.
 *
 * @since HardangerFjordMagasinet 1.0
 *
 * @return bool
 */
function hardangerfjordmagasinet_can_show_post_thumbnail():bool
{
    return apply_filters(
        'hardangerfjordmagasinet_can_show_post_thumbnail',
        ! post_password_required() && ! is_attachment() && has_post_thumbnail()
    );
}