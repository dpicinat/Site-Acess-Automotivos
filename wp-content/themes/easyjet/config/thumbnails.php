<?php
/**
 * Thumbnails configuration.
 *
 * @package Easyjet
 */

add_action( 'after_setup_theme', 'easyjet_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function easyjet_register_image_sizes() {
	set_post_thumbnail_size( 370, 213, true );

	// Registers a new image sizes.
	add_image_size( 'easyjet-thumb-s-2', 120, 84, true );
	add_image_size( 'easyjet-thumb-s', 150, 150, true );
	add_image_size( 'easyjet-thumb-m', 460, 460, true );
	add_image_size( 'easyjet-thumb-l', 770, 443, true );
	add_image_size( 'easyjet-thumb-l-2', 766, 203, true );
	add_image_size( 'easyjet-thumb-xl', 1160, 508, true );

	add_image_size( 'easyjet-thumb-justify-5', 470, 270, true );
	add_image_size( 'easyjet-thumb-justify-7', 668, 270, true );
	add_image_size( 'easyjet-thumb-masonry', 560, 9999 );

	add_image_size( 'easyjet-slider-thumb', 150, 86, true );

	add_image_size( 'easyjet-thumb-260-147', 260, 147, true );
	add_image_size( 'easyjet-thumb-480-271', 480, 271, true );
	add_image_size( 'easyjet-thumb-560-315', 560, 315, true );
	add_image_size( 'easyjet-thumb-760-571', 760, 571, true );
}
