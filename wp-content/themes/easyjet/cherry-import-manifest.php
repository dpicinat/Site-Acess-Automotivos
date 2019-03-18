<?php
/**
 * Default manifest file
 *
 * @var array
 *
 * @package Easyjet
 */

$settings = array(
	'xml' => false,
	'advanced_import' => array(
		'default' => array(
			'label'    => esc_html__( 'Easyjet', 'easyjet' ),
			'full'     => get_template_directory() . '/assets/demo-content/default-full.xml',
			'thumb'    => get_template_directory_uri() . '/assets/demo-content/default-thumb.png',
			'demo_url' => 'http://ld-wp2.template-help.com/wptheme/easyjet/',
		),

	),
	'import' => array(
		'chunk_size' => 3,
	),
	'slider' => array(
		'path' => 'https://raw.githubusercontent.com/JetImpex/wizard-slides/master/slides.json',
	),
	'export' => array(
		'options' => array(
			'elementor_default_generic_fonts',
			'elementor_container_width',
			'elementor_cpt_support',
			'elementor_disable_color_schemes',
			'elementor_disable_typography_schemes',
			'elementor_css_print_method',
			'elementor_editor_break_lines',
			'elementor_global_image_lightbox',
			'site_icon',
			'jet-elements-settings',
		),
	),
);
