<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Women of color conference
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function women_of_color_conference_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'women_of_color_conference_jetpack_setup' );
