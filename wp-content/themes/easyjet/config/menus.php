<?php
/**
 * Menus configuration.
 *
 * @package Easyjet
 */

add_action( 'after_setup_theme', 'easyjet_register_menus', 5 );
/**
 * Register menus.
 */
function easyjet_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'easyjet' ),
		'main'         => esc_html__( 'Main', 'easyjet' ),
		'main_landing' => esc_html__( 'Landing Main', 'easyjet' ),
		'footer'       => esc_html__( 'Footer', 'easyjet' ),
		'social'       => esc_html__( 'Social', 'easyjet' ),
	) );
}
