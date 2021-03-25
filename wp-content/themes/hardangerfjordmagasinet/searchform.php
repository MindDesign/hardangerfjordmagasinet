<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$hardangerfjordmagasinet_unique_id = wp_unique_id( 'search-form-' );

$hardangerfjordmagasinet_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form class="px-12 py-2 mt-12 lg:px-0 lg:py-0 lg:mt-0" id="header-search-form" role="search" <?php echo $hardangerfjordmagasinet_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="<?php echo esc_attr( $hardangerfjordmagasinet_unique_id ); ?>">Søk</label>
	<input type="search"
           id="<?php echo esc_attr( $hardangerfjordmagasinet_unique_id ); ?>"
           class="py-2 lg:px-4 lg:mb-3 w-full lg:w-44 border-b border-gray lg:border-none placeholder-gray-200 lg:placeholder-black text-white lg:text-black bg-transparent lg:bg-gray-100"
           placeholder="Søk"
           value="<?php echo get_search_query(); ?>"
           name="s" />
	<input type="submit" class="sr-only" value="<?php echo esc_attr_x( 'Søk', 'submit button', 'hardangerfjordmagasinet' ); ?>" />
</form>
