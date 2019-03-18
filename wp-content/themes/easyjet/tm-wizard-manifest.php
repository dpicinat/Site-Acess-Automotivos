<?php
/**
 * TM-Wizard configuration.
 *
 * @var array
 *
 * @package Easyjet
 */

$plugins = array(
	'elementor' => array(
		'name'   => esc_html__( 'Elementor Page Builder', 'easyjet' ),
		'access' => 'skins',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'easyjet' ),
		'access' => 'skins',
	),
	'cherry-data-importer' => array(
		'name'   => esc_html__( 'Cherry Data Importer', 'easyjet' ),
		'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
		'access' => 'skins',
	),
	'jet-elements' => array(
		'name'   => esc_html__( 'Jet Elements addon For Elementor', 'easyjet' ),
		'source' => 'local',
		'path'   => EASYJET_THEME_DIR . '/assets/includes/plugins/jet-elements.zip',
		'access' => 'skins',
	),
);

/**
 * Skins configuration.
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
		'elementor',
		'jet-elements',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'contact-form-7',
			),
			'lite'  => false,
			'demo'  => 'http://ld-wp2.template-help.com/wptheme/easyjet/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default-thumb.png',
			'name'  => esc_html__( 'Easyjet', 'easyjet' ),
		),
	),
);

$texts = array(
	'theme-name' => esc_html__( 'Easyjet', 'easyjet' ),
);
