<?php
/**
 * Theme Customizer.
 *
 * @package Easyjet
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */
function easyjet_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'easyjet_get_customizer_options' , array(
		'prefix'     => 'easyjet',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
		'options'    => array(

			/** `Site Identity` section */
			'show_tagline' => array(
				'title'    => esc_html__( 'Show tagline after logo', 'easyjet' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_visibility' => array(
				'title'    => esc_html__( 'Show ToTop button', 'easyjet' ),
				'section'  => 'title_tagline',
				'priority' => 61,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'easyjet' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),

			/** `General Site settings` panel */
			'general_settings' => array(
				'title'    => esc_html__( 'General Site settings', 'easyjet' ),
				'priority' => 40,
				'type'     => 'panel',
			),

			/** `Logo & Favicon` section */
			'logo_favicon' => array(
				'title'    => esc_html__( 'Logo &amp; Favicon', 'easyjet' ),
				'priority' => 25,
				'panel'    => 'general_settings',
				'type'     => 'section',
			),
			'header_logo_type' => array(
				'title'   => esc_html__( 'Logo Type', 'easyjet' ),
				'section' => 'logo_favicon',
				'default' => 'image',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'easyjet' ),
					'text'  => esc_html__( 'Text', 'easyjet' ),
				),
				'type' => 'control',
			),
			'header_logo_url' => array(
				'title'           => esc_html__( 'Logo Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload logo image', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_image',
			),
			'invert_header_logo_url' => array(
				'title'           => esc_html__( 'Invert Logo Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload logo image', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/invert-logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_image',
			),
			'retina_header_logo_url' => array(
				'title'           => esc_html__( 'Retina Logo Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'easyjet' ),
				'section'         => 'logo_favicon',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_image',
			),
			'invert_retina_header_logo_url' => array(
				'title'           => esc_html__( 'Invert Retina Logo Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => false,
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_image',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => 'Montserrat, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_text',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => easyjet_get_font_styles(),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_text',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => '600',
				'field'           => 'select',
				'choices'         => easyjet_get_font_weight(),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_text',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => '24',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_text',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'easyjet' ),
				'section'         => 'logo_favicon',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => easyjet_get_character_sets(),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_header_logo_text',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'easyjet' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title' => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'easyjet' ),
					'minified' => esc_html__( 'Minified', 'easyjet' ),
				),
				'type'    => 'control',
			),
			'breadcrumbs_bg_color' => array(
				'title'   => esc_html__( 'Breadcrumbs background color', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => '#f6f6f6',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'breadcrumbs_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'easyjet' ),
				'section' => 'breadcrumbs',
				'field'   => 'image',
				'default' => '%s/assets/images/texture.png',
				'type'    => 'control',
			),
			'breadcrumbs_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => easyjet_get_bg_repeat(),
				'type'    => 'control',
			),
			'breadcrumbs_bg_position' => array(
				'title'   => esc_html__( 'Background Position', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => 'center',
				'field'   => 'select',
				'choices' => easyjet_get_bg_position(),
				'type'    => 'control',
			),
			'breadcrumbs_bg_size' => array(
				'title'   => esc_html__( 'Background Size', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => 'auto',
				'field'   => 'select',
				'choices' => easyjet_get_bg_size(),
				'type'    => 'control',
			),
			'breadcrumbs_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'easyjet' ),
				'section' => 'breadcrumbs',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => easyjet_get_bg_attachment(),
				'type'    => 'control',
			),
			'breadcrumbs_bg_image_opacity' => array(
				'title'       => esc_html__( 'Background image opacity', 'easyjet' ),
				'section'     => 'breadcrumbs',
				'default'     => 1,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),

			/** `Social links` section */
			'social_links' => array(
				'title'    => esc_html__( 'Social links', 'easyjet' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links' => array(
				'title'   => esc_html__( 'Show social links in header', 'easyjet' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links' => array(
				'title'   => esc_html__( 'Show social links in footer', 'easyjet' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_share_buttons' => array(
				'title'   => esc_html__( 'Show social sharing to blog posts', 'easyjet' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_buttons' => array(
				'title'   => esc_html__( 'Show social sharing to single blog post', 'easyjet' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout' => array(
				'title'    => esc_html__( 'Page Layout', 'easyjet' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_container_type' => array(
				'title'   => esc_html__( 'Header type', 'easyjet' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'easyjet' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'easyjet' ),
				),
				'type' => 'control',
			),
			'content_container_type' => array(
				'title'   => esc_html__( 'Content type', 'easyjet' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'easyjet' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'easyjet' ),
				),
				'type' => 'control',
			),
			'footer_container_type' => array(
				'title'   => esc_html__( 'Footer type', 'easyjet' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'easyjet' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'easyjet' ),
				),
				'type' => 'control',
			),
			'container_width' => array(
				'title'       => esc_html__( 'Container width (px)', 'easyjet' ),
				'section'     => 'page_layout',
				'default'     => 1200,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 960,
					'max'  => 1920,
					'step' => 1,
				),
				'type' => 'control',
			),
			'sidebar_width' => array(
				'title'   => esc_html__( 'Sidebar width', 'easyjet' ),
				'section' => 'page_layout',
				'default' => '1/3',
				'field'   => 'select',
				'choices' => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'easyjet' ),
				'description' => esc_html__( 'Configure Color Scheme', 'easyjet' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Regular scheme` section */
			'regular_scheme' => array(
				'title'       => esc_html__( 'Regular scheme', 'easyjet' ),
				'priority'    => 10,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),
			'regular_accent_color_1' => array(
				'title'   => esc_html__( 'Accent color (1)', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#27bfe7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_2' => array(
				'title'   => esc_html__( 'Accent color (2)', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#bebebf',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_3' => array(
				'title'   => esc_html__( 'Accent color (3)', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#f6f6f6',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_text_color' => array(
				'title'   => esc_html__( 'Text color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#8d8d8d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_color' => array(
				'title'   => esc_html__( 'Link color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#27bfe7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#515151',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#515151',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#515151',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#515151',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#515151',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#27bfe7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'easyjet' ),
				'section' => 'regular_scheme',
				'default' => '#8d8d8d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Invert scheme` section */
			'invert_scheme' => array(
				'title'       => esc_html__( 'Invert scheme', 'easyjet' ),
				'priority'    => 20,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),
			'invert_accent_color_1' => array(
				'title'   => esc_html__( 'Accent color (1)', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Text color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_color' => array(
				'title'   => esc_html__( 'Link color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#27bfe7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'easyjet' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Greyscale colors` section */
			'grey_scheme' => array(
				'title'       => esc_html__( 'Greyscale colors', 'easyjet' ),
				'priority'    => 30,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),

			'grey_color_1' => array(
				'title'   => esc_html__( 'Grey color (1)', 'easyjet' ),
				'section' => 'grey_scheme',
				'default' => '#e8e8e8',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'grey_color_2' => array(
				'title'   => esc_html__( 'Grey color (2)', 'easyjet' ),
				'section' => 'grey_scheme',
				'default' => '#e8e8e8',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'grey_color_3' => array(
				'title'   => esc_html__( 'Grey color (3)', 'easyjet' ),
				'section' => 'grey_scheme',
				'default' => '#f6f6f6',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'easyjet' ),
				'description' => esc_html__( 'Configure typography settings', 'easyjet' ),
				'priority'    => 50,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body text', 'easyjet' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'body_typography',
				'default' => 'Raleway, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'body_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'body_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'body_typography',
				'default'     => '1.643',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'    => esc_html__( 'H1 Heading', 'easyjet' ),
				'priority' => 10,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'h1_typography',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'h1_typography',
				'default' => '200',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'h1_typography',
				'default'     => '50',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'h1_typography',
				'default'     => '1.19',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'    => esc_html__( 'H2 Heading', 'easyjet' ),
				'priority' => 15,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'h2_typography',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'h2_typography',
				'default' => '800',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'h2_typography',
				'default'     => '30',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'h2_typography',
				'default'     => '1.434',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'    => esc_html__( 'H3 Heading', 'easyjet' ),
				'priority' => 20,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h3_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'h3_typography',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'h3_typography',
				'default' => '800',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'h3_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'h3_typography',
				'default'     => '1.375',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'    => esc_html__( 'H4 Heading', 'easyjet' ),
				'priority' => 25,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'h4_typography',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'h4_typography',
				'default' => '800',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'h4_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'h4_typography',
				'default'     => '1.45',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'    => esc_html__( 'H5 Heading', 'easyjet' ),
				'priority' => 30,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'h5_typography',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'h5_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'h5_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'h5_typography',
				'default'     => '1.44',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'    => esc_html__( 'H6 Heading', 'easyjet' ),
				'priority' => 35,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'h6_typography',
				'default' => 'Raleway, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'h6_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'h6_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'h6_typography',
				'default'     => '1.44',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'easyjet' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => easyjet_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'easyjet' ),
				'priority' => 45,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'breadcrumbs_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Raleway, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'breadcrumbs_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.75',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'breadcrumbs_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'breadcrumbs_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),

			/** `Meta` section */
			'meta_typography' => array(
				'title'       => esc_html__( 'Meta', 'easyjet' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'meta_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'meta_typography',
				'default' => 'Raleway, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'meta_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'meta_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'meta_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'meta_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'meta_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'meta_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'meta_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'meta_typography',
				'default'     => '1.75',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'meta_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'meta_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'meta_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'meta_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),

			/** `Main menu` section */
			'main_menu_typography' => array(
				'title'       => esc_html__( 'Main menu', 'easyjet' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'main_menu_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'main_menu_typography',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'main_menu_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'easyjet' ),
				'section' => 'main_menu_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => easyjet_get_font_styles(),
				'type'    => 'control',
			),
			'main_menu_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'main_menu_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'main_menu_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'easyjet' ),
				'section'     => 'main_menu_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'main_menu_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'easyjet' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'easyjet' ),
				'section'     => 'main_menu_typography',
				'default'     => '1.643',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'main_menu_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'easyjet' ),
				'section'     => 'main_menu_typography',
				'default'     => '0.04',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'main_menu_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'easyjet' ),
				'section' => 'main_menu_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => easyjet_get_character_sets(),
				'type'    => 'control',
			),

			/** `Typography misc` section */
			'misc_styles' => array(
				'title'    => esc_html__( 'Misc', 'easyjet' ),
				'priority' => 60,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'word_wrap' => array(
				'title'   => esc_html__( 'Enable Word Wrap', 'easyjet' ),
				'section' => 'misc_styles',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'light_font_weight_family' => array(
				'title'   => esc_html__( 'Font Family', 'easyjet' ),
				'section' => 'misc_styles',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'light_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'easyjet' ),
				'section' => 'misc_styles',
				'default' => '300',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),
			'bold_font_weight_family' => array(
				'title'   => esc_html__( 'Bold Font Family', 'easyjet' ),
				'section' => 'misc_styles',
				'default' => 'Montserrat, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'bold_font_weight' => array(
				'title'   => esc_html__( 'Bold Font Weight', 'easyjet' ),
				'section' => 'misc_styles',
				'default' => '700',
				'field'   => 'select',
				'choices' => easyjet_get_font_weight(),
				'type'    => 'control',
			),

			/** `Header` panel */
			'header_options' => array(
				'title'    => esc_html__( 'Header', 'easyjet' ),
				'priority' => 60,
				'type'     => 'panel',
			),

			/** `Header styles` section */
			'header_styles' => array(
				'title'    => esc_html__( 'Styles', 'easyjet' ),
				'priority' => 5,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'easyjet' ),
				'section' => 'header_styles',
				'default' => 'style-1',
				'field'   => 'select',
				'choices' => easyjet_get_header_layout_options(),
				'type'    => 'control',
			),
			'header_transparent_layout' => array(
				'title'   => esc_html__( 'Header overlay', 'easyjet' ),
				'section' => 'header_styles',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_invert_color_scheme' => array(
				'title'   => esc_html__( 'Enable invert color scheme', 'easyjet' ),
				'section' => 'header_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'easyjet' ),
				'section' => 'header_styles',
				'field'   => 'hex_color',
				'default' => '#19191a',
				'type'    => 'control',
			),
			'header_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'easyjet' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
			),
			'header_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'easyjet' ),
				'section' => 'header_styles',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => easyjet_get_bg_repeat(),
				'type'    => 'control',
			),
			'header_bg_position' => array(
				'title'   => esc_html__( 'Background Position', 'easyjet' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => easyjet_get_bg_position(),
				'type'    => 'control',
			),
			'header_bg_size' => array(
				'title'   => esc_html__( 'Background Size', 'easyjet' ),
				'section' => 'header_styles',
				'default' => 'cover',
				'field'   => 'select',
				'choices' => easyjet_get_bg_size(),
				'type'    => 'control',
			),
			'header_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'easyjet' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => easyjet_get_bg_attachment(),
				'type'    => 'control',
			),

			/** `Header elements` section */
			'header_elements' => array(
				'title'       => esc_html__( 'Header Elements', 'easyjet' ),
				'priority'    => 15,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_search' => array(
				'title'   => esc_html__( 'Show search', 'easyjet' ),
				'section' => 'header_elements',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Top Panel` section */
			'header_top_panel' => array(
				'title'    => esc_html__( 'Top Panel', 'easyjet' ),
				'priority' => 20,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'top_panel_visibility' => array(
				'title'   => esc_html__( 'Enable top panel', 'easyjet' ),
				'section' => 'header_top_panel',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_text' => array(
				'title'           => esc_html__( 'Disclaimer Text', 'easyjet' ),
				'description'     => esc_html__( 'HTML formatting support', 'easyjet' ),
				'section'         => 'header_top_panel',
				'default'         => esc_html__( 'Lorem ipsum dolor sit', 'easyjet' ),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_top_panel_enable',
			),
			'top_panel_bg'        => array(
				'title'           => esc_html__( 'Background color', 'easyjet' ),
				'section'         => 'header_top_panel',
				'default'         => '#19191a',
				'field'           => 'hex_color',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_top_panel_enable',
			),

			/** `Main Menu` section */
			'header_main_menu' => array(
				'title'    => esc_html__( 'Main Menu', 'easyjet' ),
				'priority' => 30,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_menu_sticky' => array(
				'title'   => esc_html__( 'Enable sticky menu', 'easyjet' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes' => array(
				'title'   => esc_html__( 'Enable description', 'easyjet' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_style' => array(
				'title'   => esc_html__( 'Menu style', 'easyjet' ),
				'section' => 'header_main_menu',
				'default' => 'style-1',
				'field'   => 'radio',
				'choices' => array(
					'style-1' => esc_html__( 'Style 1', 'easyjet' ),
					'style-2' => esc_html__( 'Style 2', 'easyjet' ),
				),
				'type'    => 'control',
			),
			'more_button_type' => array(
				'title'   => esc_html__( 'More Menu Button Type', 'easyjet' ),
				'section' => 'header_main_menu',
				'default' => 'text',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'easyjet' ),
					'icon'  => esc_html__( 'Icon', 'easyjet' ),
					'text'  => esc_html__( 'Text', 'easyjet' ),
				),
				'type'    => 'control',
			),
			'more_button_text' => array(
				'title'           => esc_html__( 'More Menu Button Text', 'easyjet' ),
				'section'         => 'header_main_menu',
				'default'         => esc_html__( 'More', 'easyjet' ),
				'field'           => 'input',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_more_button_type_text',
			),
			'more_button_icon' => array(
				'title'           => esc_html__( 'More Menu Button Icon', 'easyjet' ),
				'section'         => 'header_main_menu',
				'field'           => 'iconpicker',
				'type'            => 'control',
				'default'         => 'arrows-1_minimal-down',
				'active_callback' => 'easyjet_is_more_button_type_icon',
				'icon_data'       => easyjet_get_nc_mini_icons_data(),
			),
			'more_button_image_url' => array(
				'title'           => esc_html__( 'More Button Image Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload More Button image', 'easyjet' ),
				'section'         => 'header_main_menu',
				'default'         => false,
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_more_button_type_image',
			),
			'retina_more_button_image_url' => array(
				'title'           => esc_html__( 'Retina More Button Image Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload More Button image for retina-ready devices', 'easyjet' ),
				'section'         => 'header_main_menu',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_more_button_type_image',
			),

			/** `Sidebar` section */
			'sidebar_settings' => array(
				'title'    => esc_html__( 'Sidebar', 'easyjet' ),
				'priority' => 105,
				'type'     => 'section',
			),
			'sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar Position', 'easyjet' ),
				'section' => 'sidebar_settings',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'easyjet' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'easyjet' ),
					'fullwidth'         => esc_html__( 'No sidebars', 'easyjet' ),
				),
				'type' => 'control',
			),

			/** `MailChimp` section */
			'mailchimp' => array(
				'title'       => esc_html__( 'MailChimp', 'easyjet' ),
				'description' => esc_html__( 'Setup MailChimp settings for subscribe widget', 'easyjet' ),
				'priority'    => 109,
				'type'        => 'section',
			),
			'mailchimp_api_key' => array(
				'title'   => esc_html__( 'MailChimp API key', 'easyjet' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'mailchimp_list_id' => array(
				'title'   => esc_html__( 'MailChimp list ID', 'easyjet' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),

			/** `Ads Management` panel */
			'ads_management' => array(
				'title'    => esc_html__( 'Ads Management', 'easyjet' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'ads_header' => array(
				'title'             => esc_html__( 'Header', 'easyjet' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => false,
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_home_before_loop' => array(
				'title'             => esc_html__( 'Front Page Before Loop', 'easyjet' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => false,
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_content' => array(
				'title'             => esc_html__( 'Post Before Content', 'easyjet' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => false,
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_comments' => array(
				'title'             => esc_html__( 'Post Before Comments', 'easyjet' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => false,
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),

			/** `Footer` panel */
			'footer_options' => array(
				'title'    => esc_html__( 'Footer', 'easyjet' ),
				'priority' => 110,
				'type'     => 'panel',
			),

			/** `Footer styles` section */
			'footer_styles' => array(
				'title'    => esc_html__( 'Footer Styles', 'easyjet' ),
				'priority' => 5,
				'panel'    => 'footer_options',
				'type'     => 'section',
			),
			'footer_logo_visibility' => array(
				'title'   => esc_html__( 'Show Footer Logo', 'easyjet' ),
				'section' => 'footer_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_logo_url' => array(
				'title'           => esc_html__( 'Logo upload', 'easyjet' ),
				'section'         => 'footer_styles',
				'field'           => 'image',
				'default'         => '%s/assets/images/footer-logo.png',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_footer_logo_enable',
			),
			'invert_footer_logo_url' => array(
				'title'           => esc_html__( 'Invert Logo Upload', 'easyjet' ),
				'description'     => esc_html__( 'Upload logo image', 'easyjet' ),
				'section'         => 'footer_styles',
				'default'         => '%s/assets/images/footer-logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_footer_logo_enable',
			),
			'footer_copyright' => array(
				'title'   => esc_html__( 'Copyright text', 'easyjet' ),
				'section' => 'footer_styles',
				'default' => easyjet_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'footer_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'easyjet' ),
				'section' => 'footer_styles',
				'default' => 'style-1',
				'field'   => 'select',
				'choices' => easyjet_get_footer_layout_options(),
				'type' => 'control',
			),
			'footer_bg_first' => array(
				'title'           => esc_html__( 'Footer Background first row color', 'easyjet' ),
				'section'         => 'footer_styles',
				'default'         => '#19191a',
				'field'           => 'hex_color',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_footer_style_1_enable',
			),
			'footer_bg' => array(
				'title'   => esc_html__( 'Footer Background color', 'easyjet' ),
				'section' => 'footer_styles',
				'default' => '#19191a',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_widget_area_visibility' => array(
				'title'   => esc_html__( 'Show Footer Widgets Area', 'easyjet' ),
				'section' => 'footer_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_widget_columns' => array(
				'title'           => esc_html__( 'Widget Area Columns', 'easyjet' ),
				'section'         => 'footer_styles',
				'default'         => '4',
				'field'           => 'select',
				'choices'         => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_footer_area_enable',
			),
			'footer_widgets_bg' => array(
				'title'           => esc_html__( 'Footer Widgets Area Background color', 'easyjet' ),
				'section'         => 'footer_styles',
				'default'         => '#f6f6f6',
				'field'           => 'hex_color',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_footer_area_enable',
			),
			'footer_menu_visibility' => array(
				'title'   => esc_html__( 'Show Footer Menu', 'easyjet' ),
				'section' => 'footer_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title'    => esc_html__( 'Blog Settings', 'easyjet' ),
				'priority' => 115,
				'type'     => 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title'           => esc_html__( 'Blog', 'easyjet' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'easyjet' ),
				'section' => 'blog',
				'default' => 'default',
				'field'   => 'select',
				'choices' => array(
					'default'          => esc_html__( 'Listing', 'easyjet' ),
					'grid'             => esc_html__( 'Grid', 'easyjet' ),
					'masonry'          => esc_html__( 'Masonry', 'easyjet' ),
					'vertical-justify' => esc_html__( 'Vertical Justify', 'easyjet' ),
				),
				'type' => 'control',
			),
			'blog_layout_columns' => array(
				'title'           => esc_html__( 'Columns', 'easyjet' ),
				'section'         => 'blog',
				'default'         => '3-cols',
				'field'           => 'select',
				'choices'         => array(
					'2-cols' => esc_html__( '2 columns', 'easyjet' ),
					'3-cols' => esc_html__( '3 columns', 'easyjet' ),
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_blog_layout_type_grid_masonry',
			),
			'blog_sticky_type' => array(
				'title'   => esc_html__( 'Sticky label type', 'easyjet' ),
				'section' => 'blog',
				'default' => 'icon',
				'field'   => 'select',
				'choices' => array(
					'label' => esc_html__( 'Text Label', 'easyjet' ),
					'icon'  => esc_html__( 'Font Icon', 'easyjet' ),
					'both'  => esc_html__( 'Text with Icon', 'easyjet' ),
				),
				'type' => 'control',
			),
			'blog_sticky_icon' => array(
				'title'           => esc_html__( 'Icon for sticky post', 'easyjet' ),
				'section'         => 'blog',
				'field'           => 'iconpicker',
				'default'         => 'ui-2_favourite-31',
				'icon_data'       => easyjet_get_nc_mini_icons_data(),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_sticky_icon',
			),
			'blog_sticky_label' => array(
				'title'           => esc_html__( 'Featured Post Label', 'easyjet' ),
				'description'     => esc_html__( 'Label for sticky post', 'easyjet' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Featured', 'easyjet' ),
				'field'           => 'text',
				'active_callback' => 'easyjet_is_sticky_text',
				'type'            => 'control',
			),
			'blog_featured_image' => array(
				'title'           => esc_html__( 'Featured image', 'easyjet' ),
				'section'         => 'blog',
				'default'         => 'fullwidth',
				'field'           => 'select',
				'choices'         => array(
					'small'     => esc_html__( 'Small', 'easyjet' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'easyjet' ),
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_blog_featured_image',
			),
			'blog_posts_content' => array(
				'title'   => esc_html__( 'Post content', 'easyjet' ),
				'section' => 'blog',
				'default' => 'excerpt',
				'field'   => 'select',
				'choices' => array(
					'excerpt' => esc_html__( 'Only excerpt', 'easyjet' ),
					'full'    => esc_html__( 'Full content', 'easyjet' ),
					'none'    => esc_html__( 'Hide', 'easyjet' ),
				),
				'type' => 'control',
			),
			'blog_posts_content_length' => array(
				'title'           => esc_html__( 'Number of words in the excerpt', 'easyjet' ),
				'section'         => 'blog',
				'default'         => '27',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_blog_posts_content_type_excerpt',
			),
			'blog_read_more_btn' => array(
				'title'   => esc_html__( 'Show Read More button', 'easyjet' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_read_more_text' => array(
				'title'           => esc_html__( 'Read More button text', 'easyjet' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Learn more', 'easyjet' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_blog_read_more_btn_enable',
			),
			'blog_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'easyjet' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'easyjet' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'easyjet' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'easyjet' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'easyjet' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'easyjet' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'easyjet' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'easyjet' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'easyjet' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'easyjet' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'easyjet' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block' => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'easyjet' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_navigation' => array(
				'title'   => esc_html__( 'Enable post navigation', 'easyjet' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Related Posts` section */
			'related_posts' => array(
				'title'           => esc_html__( 'Related posts block', 'easyjet' ),
				'panel'           => 'blog_settings',
				'priority'        => 30,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'related_posts_visible' => array(
				'title'   => esc_html__( 'Show related posts block', 'easyjet' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_block_title' => array(
				'title'           => esc_html__( 'Related posts block title', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => esc_html__( 'Recent posts', 'easyjet' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_count' => array(
				'title'           => esc_html__( 'Number of post', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => '2',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_grid' => array(
				'title'           => esc_html__( 'Layout', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => '2',
				'field'           => 'select',
				'choices'         => array(
					'2' => esc_html__( '2 columns', 'easyjet' ),
					'3' => esc_html__( '3 columns', 'easyjet' ),
					'4' => esc_html__( '4 columns', 'easyjet' ),
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_title' => array(
				'title'           => esc_html__( 'Show post title', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_title_length' => array(
				'title'           => esc_html__( 'Number of words in the title', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => '10',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_image' => array(
				'title'           => esc_html__( 'Show post image', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_content' => array(
				'title'           => esc_html__( 'Display content', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => 'hide',
				'field'           => 'select',
				'choices'         => array(
					'hide'         => esc_html__( 'Hide', 'easyjet' ),
					'post_excerpt' => esc_html__( 'Excerpt', 'easyjet' ),
					'post_content' => esc_html__( 'Content', 'easyjet' ),
				),
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_content_length' => array(
				'title'           => esc_html__( 'Number of words in the content', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => '10',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_categories' => array(
				'title'           => esc_html__( 'Show post categories', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => false,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_tags' => array(
				'title'           => esc_html__( 'Show post tags', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => false,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_author' => array(
				'title'           => esc_html__( 'Show post author', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_publish_date' => array(
				'title'           => esc_html__( 'Show post publish date', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),
			'related_posts_comment_count' => array(
				'title'           => esc_html__( 'Show post comment count', 'easyjet' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'easyjet_is_related_posts_enable',
			),

			/** `404` panel */
			'page_404_options' => array(
				'title'    => esc_html__( '404 Page Style', 'easyjet' ),
				'priority' => 130,
				'type'     => 'section',
			),
			'page_404_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'easyjet' ),
				'section' => 'page_404_options',
				'field'   => 'hex_color',
				'default' => '#ffffff',
				'type'    => 'control',
			),
			'page_404_image' => array(
				'title'   => esc_html__( '404 Image', 'easyjet' ),
				'section' => 'page_404_options',
				'field'   => 'image',
				'default' => '%s/assets/images/404.png',
				'type'    => 'control',
			),
			'page_404_text_color' => array(
				'title'       => esc_html__( 'Text Color', 'easyjet' ),
				'description' => esc_html__( 'Here you can choose whether your text should be light or dark. If you are working with a dark background, then your text should be light. If your background is light, then your text should be set to dark.', 'easyjet' ),
				'section'     => 'page_404_options',
				'default'     => 'dark',
				'field'       => 'select',
				'choices'     => easyjet_get_text_color(),
				'type'        => 'control',
			),
			'page_404_btn_style_preset' => array(
				'title'   => esc_html__( 'Button Style Preset', 'easyjet' ),
				'section' => 'page_404_options',
				'default' => 'accent-1',
				'field'   => 'select',
				'choices' => easyjet_get_btn_style_presets(),
				'type'    => 'control',
			),
		),
	) );
}

/**
 * Return true if setting is value. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function easyjet_is_setting( $control, $setting, $value ) {

	if ( $value == $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;
}

/**
 * Return true if value of passed setting is not equal with passed value.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function easyjet_is_not_setting( $control, $setting, $value ) {

	if ( $value !== $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;
}

/**
 * Return true if logo in header has image type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_header_logo_image( $control ) {
	return easyjet_is_setting( $control, 'header_logo_type', 'image' );
}

/**
 * Return true if logo in header has text type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_header_logo_text( $control ) {
	return easyjet_is_setting( $control, 'header_logo_type', 'text' );
}

/**
 * Return blog-featured-image true if blog layout type is default. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_blog_featured_image( $control ) {
	return easyjet_is_setting( $control, 'blog_layout_type', 'default' );
}

/**
 * Return true if sticky label type set to text or text with icon.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_sticky_text( $control ) {
	return easyjet_is_not_setting( $control, 'blog_sticky_type', 'icon' );
}

/**
 * Return true if sticky label type set to icon or text with icon.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_sticky_icon( $control ) {
	return easyjet_is_not_setting( $control, 'blog_sticky_type', 'label' );
}

/**
 * Return true if More button (in the main menu) has image type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_more_button_type_image( $control ) {
	return easyjet_is_setting( $control, 'more_button_type', 'image' );
}

/**
 * Return true if More button (in the main menu) has text type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_more_button_type_text( $control ) {
	return easyjet_is_setting( $control, 'more_button_type', 'text' );
}

/**
 * Return true if More button (in the main menu) has icon type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_more_button_type_icon( $control ) {
	return easyjet_is_setting( $control, 'more_button_type', 'icon' );
}

/**
 * Return true if option Show Related Posts Block is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_related_posts_enable( $control ) {
	return easyjet_is_setting( $control, 'related_posts_visible', true );
}

/**
 * Return true if option Enable Top Panel is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_top_panel_enable( $control ) {
	return easyjet_is_setting( $control, 'top_panel_visibility', true );
}

/**
 * Return true if option Show Footer Logo is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_footer_logo_enable( $control ) {
	return easyjet_is_setting( $control, 'footer_logo_visibility', true );
}

/**
 * Return true if option Show Footer Widgets Area is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_footer_area_enable( $control ) {
	return easyjet_is_setting( $control, 'footer_widget_area_visibility', true );
}

/**
 * Return true if option Footer style is layout-1. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_footer_style_1_enable( $control ) {
	return easyjet_is_setting( $control, 'footer_layout_type', 'style-1' );
}

/**
 * Return true if option Blog posts content is excerpt. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_blog_posts_content_type_excerpt( $control ) {
	return easyjet_is_setting( $control, 'blog_posts_content', 'excerpt' );
}

/**
 * Return true if option Show Read More button is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_blog_read_more_btn_enable( $control ) {
	return easyjet_is_setting( $control, 'blog_read_more_btn', true );
}

/**
 * Return true if Blog layout selected Grid or Masonry. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_blog_layout_type_grid_masonry( $control ) {
	if ( in_array( $control->manager->get_setting( 'blog_layout_type' )->value(), array( 'grid', 'masonry' ) ) ) {
		return true;
	}

	return false;
}

/**
 * Return true if option Header Layout type is style-5. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function easyjet_is_header_layout_style_5( $control ) {
	return easyjet_is_setting( $control, 'header_layout_type', 'style-5' );
}

/**
 * Get default header layouts.
 *
 * @since  1.0.0
 * @return array
 */
function easyjet_get_header_layout_options() {
	return apply_filters( 'easyjet_header_layout_options', array(
		'style-1' => esc_html__( 'Style 1', 'easyjet' ),
		'style-2' => esc_html__( 'Style 2', 'easyjet' ),
		'style-3' => esc_html__( 'Style 3', 'easyjet' ),
	) );
}

/**
 * Get default footer layouts.
 *
 * @since  1.0.0
 * @return array
 */
function easyjet_get_footer_layout_options() {
	return apply_filters( 'easyjet_footer_layout_options', array(
		'style-1' => esc_html__( 'Style 1', 'easyjet' ),
	) );
}

/**
 * Get default header layouts options for Post Meta boxes
 *
 * @return array
 */
function easyjet_get_header_layout_pm_options() {
	$inherit_option = array(
		'inherit' => array(
			'label' => esc_html__( 'Inherit', 'easyjet' ),
		),
	);

	$header_layouts = easyjet_get_header_layout_options();
	$options        = array();

	foreach ( $header_layouts as $layout => $label ) {
		$options[ $layout ] = array(
			'label' => $label,
			'slave' => 'header_layout_type_' . str_replace( '-', '_', $layout ),
		);
	}

	return array_merge( $inherit_option, $options );
}

/**
 * Get default footer layouts options for Post Meta boxes
 *
 * @return array
 */
function easyjet_get_footer_layout_pm_options() {
	$inherit_option = array(
		'inherit' => esc_html__( 'Inherit', 'easyjet' ),
	);

	$options = easyjet_get_footer_layout_options();

	return array_merge( $inherit_option, $options );
}

// Change native customizer control (based on WordPress core).
add_action( 'customize_register', 'easyjet_customizer_change_core_controls', 20 );

// Bind JS handlers to instantly live-preview changes.
add_action( 'customize_preview_init', 'easyjet_customize_preview_js' );

/**
 * Change native customize control (based on WordPress core).
 *
 * @since 1.0.0
 * @param  object $wp_customize Object wp_customize.
 * @return void
 */
function easyjet_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section         = 'easyjet_logo_favicon';
	$wp_customize->get_section( 'background_image' )->priority = 45;
	$wp_customize->get_control( 'background_color' )->label    = esc_html__( 'Body Background Color', 'easyjet' );

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function easyjet_customize_preview_js() {
	wp_enqueue_script( 'easyjet-customize-preview', EASYJET_THEME_JS . '/customize-preview.js', array( 'customize-preview' ), '1.0', true );
}

// Typography utility function
/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_font_styles() {
	return apply_filters( 'easyjet_get_font_styles', array(
		'normal'  => esc_html__( 'Normal', 'easyjet' ),
		'italic'  => esc_html__( 'Italic', 'easyjet' ),
		'oblique' => esc_html__( 'Oblique', 'easyjet' ),
		'inherit' => esc_html__( 'Inherit', 'easyjet' ),
	) );
}

/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_character_sets() {
	return apply_filters( 'easyjet_get_character_sets', array(
		'latin'        => esc_html__( 'Latin', 'easyjet' ),
		'greek'        => esc_html__( 'Greek', 'easyjet' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'easyjet' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'easyjet' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'easyjet' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'easyjet' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'easyjet' ),
	) );
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_text_aligns() {
	return apply_filters( 'easyjet_get_text_aligns', array(
		'inherit' => esc_html__( 'Inherit', 'easyjet' ),
		'center'  => esc_html__( 'Center', 'easyjet' ),
		'justify' => esc_html__( 'Justify', 'easyjet' ),
		'left'    => esc_html__( 'Left', 'easyjet' ),
		'right'   => esc_html__( 'Right', 'easyjet' ),
	) );
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_font_weight() {
	return apply_filters( 'easyjet_get_font_weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

// Background utility function
/**
 * Get background position
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_bg_position() {
	return apply_filters( 'easyjet_get_bg_position', array(
		'top-left'      => esc_html__( 'Top Left', 'easyjet' ),
		'top-center'    => esc_html__( 'Top Center', 'easyjet' ),
		'top-right'     => esc_html__( 'Top Right', 'easyjet' ),
		'center-left'   => esc_html__( 'Middle Left', 'easyjet' ),
		'center'        => esc_html__( 'Middle Center', 'easyjet' ),
		'center-right'  => esc_html__( 'Middle Right', 'easyjet' ),
		'bottom-left'   => esc_html__( 'Bottom Left', 'easyjet' ),
		'bottom-center' => esc_html__( 'Bottom Center', 'easyjet' ),
		'bottom-right'  => esc_html__( 'Bottom Right', 'easyjet' ),
	) );
}

/**
 * Get background size
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_bg_size() {
	return apply_filters( 'easyjet_get_bg_size', array(
		'auto'    => esc_html__( 'Auto', 'easyjet' ),
		'cover'   => esc_html__( 'Cover', 'easyjet' ),
		'contain' => esc_html__( 'Contain', 'easyjet' ),
	) );
}

/**
 * Get background repeat
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_bg_repeat() {
	return apply_filters( 'easyjet_get_bg_repeat', array(
		'no-repeat' => esc_html__( 'No Repeat', 'easyjet' ),
		'repeat'    => esc_html__( 'Tile', 'easyjet' ),
		'repeat-x'  => esc_html__( 'Tile Horizontally', 'easyjet' ),
		'repeat-y'  => esc_html__( 'Tile Vertically', 'easyjet' ),
	) );
}

/**
 * Get background attachment
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_bg_attachment() {
	return apply_filters( 'easyjet_get_bg_attachment', array(
		'scroll' => esc_html__( 'Scroll', 'easyjet' ),
		'fixed'  => esc_html__( 'Fixed', 'easyjet' ),
	) );
}

/**
 * Get text color
 *
 * @since 1.0.0
 * @return array
 */
function easyjet_get_text_color() {
	return apply_filters( 'easyjet_get_text_color', array(
		'light' => esc_html__( 'Light', 'easyjet' ),
		'dark'  => esc_html__( 'Dark', 'easyjet' ),
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */
function easyjet_get_dynamic_css_options() {
	return apply_filters( 'easyjet_get_dynamic_css_options', array(
		'prefix'        => 'easyjet',
		'type'          => 'theme_mod',
		'parent_handle' => 'easyjet-theme-style',
		'single'        => true,
		'css_files'     => array(
			EASYJET_THEME_DIR . '/assets/css/dynamic.css',

			EASYJET_THEME_DIR . '/assets/css/dynamic/elementor/jet-elements.css',

			EASYJET_THEME_DIR . '/assets/css/dynamic/site/elements.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/header.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/forms.css' ,
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/social.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/menus.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/post.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/navigation.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/footer.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/misc.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/site/buttons.css',

			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/widget-default.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/taxonomy-tiles.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/image-grid.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/carousel.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/smart-slider.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/instagram.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/subscribe.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/custom-posts.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/playlist-slider.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/featured-posts-block.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/news-smart-box.css',
			EASYJET_THEME_DIR . '/assets/css/dynamic/widgets/contact-information.css',
		),
		'options' => array(
			'header_logo_font_style',
			'header_logo_font_weight',
			'header_logo_font_size',
			'header_logo_font_family',

			'body_font_style',
			'body_font_weight',
			'body_font_size',
			'body_line_height',
			'body_font_family',
			'body_letter_spacing',
			'body_text_align',

			'h1_font_style',
			'h1_font_weight',
			'h1_font_size',
			'h1_line_height',
			'h1_font_family',
			'h1_letter_spacing',
			'h1_text_align',

			'h2_font_style',
			'h2_font_weight',
			'h2_font_size',
			'h2_line_height',
			'h2_font_family',
			'h2_letter_spacing',
			'h2_text_align',

			'h3_font_style',
			'h3_font_weight',
			'h3_font_size',
			'h3_line_height',
			'h3_font_family',
			'h3_letter_spacing',
			'h3_text_align',

			'h4_font_style',
			'h4_font_weight',
			'h4_font_size',
			'h4_line_height',
			'h4_font_family',
			'h4_letter_spacing',
			'h4_text_align',

			'h5_font_style',
			'h5_font_weight',
			'h5_font_size',
			'h5_line_height',
			'h5_font_family',
			'h5_letter_spacing',
			'h5_text_align',

			'h6_font_style',
			'h6_font_weight',
			'h6_font_size',
			'h6_line_height',
			'h6_font_family',
			'h6_letter_spacing',
			'h6_text_align',

			'breadcrumbs_font_style',
			'breadcrumbs_font_weight',
			'breadcrumbs_font_size',
			'breadcrumbs_line_height',
			'breadcrumbs_font_family',
			'breadcrumbs_letter_spacing',
			'breadcrumbs_bg_color',
			'breadcrumbs_bg_repeat',
			'breadcrumbs_bg_position',
			'breadcrumbs_bg_attachment',
			'breadcrumbs_bg_size',
			'breadcrumbs_bg_image_opacity',

			'meta_font_style',
			'meta_font_weight',
			'meta_font_size',
			'meta_line_height',
			'meta_font_family',
			'meta_letter_spacing',

			'main_menu_font_style',
			'main_menu_font_weight',
			'main_menu_font_size',
			'main_menu_line_height',
			'main_menu_font_family',
			'main_menu_letter_spacing',
			'light_font_weight',
			'light_font_weight_family',
			'bold_font_weight',
			'bold_font_weight_family',

			'regular_accent_color_1',
			'regular_accent_color_2',
			'regular_accent_color_3',
			'regular_text_color',
			'regular_link_color',
			'regular_link_hover_color',
			'regular_h1_color',
			'regular_h2_color',
			'regular_h3_color',
			'regular_h4_color',
			'regular_h5_color',
			'regular_h6_color',

			'invert_accent_color_1',
			'invert_text_color',
			'invert_link_color',
			'invert_link_hover_color',
			'invert_h1_color',
			'invert_h2_color',
			'invert_h3_color',
			'invert_h4_color',
			'invert_h5_color',
			'invert_h6_color',

			'grey_color_1',
			'grey_color_2',
			'grey_color_3',

			'header_bg_color',
			'header_bg_image',
			'header_bg_repeat',
			'header_bg_position',
			'header_bg_attachment',
			'header_bg_size',

			'page_404_bg_color',

			'top_panel_bg',

			'container_width',

			'footer_widgets_bg',
			'footer_bg_first',
			'footer_bg',

			'onsale_badge_bg',
			'featured_badge_bg',
			'new_badge_bg',
		),
	) );
}

/**
 * Return array of arguments for Google Font loader module.
 *
 * @since  1.0.0
 * @return array
 */
function easyjet_get_fonts_options() {
	return apply_filters( 'easyjet_get_fonts_options', array(
		'prefix'  => 'easyjet',
		'type'    => 'theme_mod',
		'single'  => true,
		'options' => array(
			'body' => array(
				'family'  => 'body_font_family',
				'style'   => 'body_font_style',
				'weight'  => 'body_font_weight',
				'charset' => 'body_character_set',
			),
			'h1' => array(
				'family'  => 'h1_font_family',
				'style'   => 'h1_font_style',
				'weight'  => 'h1_font_weight',
				'charset' => 'h1_character_set',
			),
			'h2' => array(
				'family'  => 'h2_font_family',
				'style'   => 'h2_font_style',
				'weight'  => 'h2_font_weight',
				'charset' => 'h2_character_set',
			),
			'h3' => array(
				'family'  => 'h3_font_family',
				'style'   => 'h3_font_style',
				'weight'  => 'h3_font_weight',
				'charset' => 'h3_character_set',
			),
			'h4' => array(
				'family'  => 'h4_font_family',
				'style'   => 'h4_font_style',
				'weight'  => 'h4_font_weight',
				'charset' => 'h4_character_set',
			),
			'h5' => array(
				'family'  => 'h5_font_family',
				'style'   => 'h5_font_style',
				'weight'  => 'h5_font_weight',
				'charset' => 'h5_character_set',
			),
			'h6' => array(
				'family'  => 'h6_font_family',
				'style'   => 'h6_font_style',
				'weight'  => 'h6_font_weight',
				'charset' => 'h6_character_set',
			),
			'meta' => array(
				'family'  => 'meta_font_family',
				'style'   => 'meta_font_style',
				'weight'  => 'meta_font_weight',
				'charset' => 'meta_character_set',
			),
			'header_logo' => array(
				'family'  => 'header_logo_font_family',
				'style'   => 'header_logo_font_style',
				'weight'  => 'header_logo_font_weight',
				'charset' => 'header_logo_character_set',
			),
			'breadcrumbs' => array(
				'family'  => 'breadcrumbs_font_family',
				'style'   => 'breadcrumbs_font_style',
				'weight'  => 'breadcrumbs_font_weight',
				'charset' => 'breadcrumbs_character_set',
			),
			'misc' => array(
				'family'  => 'bold_font_weight_family',
				'weight'  => 'bold_font_weight',
			),
		),
	) );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function easyjet_get_default_footer_copyright() {
	return esc_html__( '%%site-name%% Copyrirht &copy; %%year%% <a target="_blank" href="https://jetimpex.com/">Jetimpex</a>', 'easyjet' );
}

/**
 * Get default contact information.
 *
 * @since  1.0.0
 * @return string
 */
function easyjet_get_default_contact_information( $value ) {
	$contact_information = array(
		'work-time' => sprintf( '%1$s<br>%2$s', esc_html__( 'Mon – Fri: 10AM – 7PM;', 'easyjet' ), esc_html__( 'Sat – Sun: 10AM – 3PM', 'easyjet' ) ),
		'phones'    => sprintf( '<a href="tel:#">%1$s</a>', esc_html__( '(719) 445-2808', 'easyjet' ) ),
		'info'      => esc_html__( '24/7 Emergency Service', 'easyjet' ),
		'address'   => sprintf( '%1$s<br>%2$s', esc_html__( '4578 Marmora Road,', 'easyjet' ), esc_html__( 'Glasgow', 'easyjet' ) ),
	);

	return $contact_information[ $value ];
}

/**
 * Get FontAwesome icons set
 *
 * @return array
 */
function easyjet_get_icons_set() {

	static $font_icons;

	if ( ! $font_icons ) {

		ob_start();

		include EASYJET_THEME_DIR . '/assets/js/icons.json';
		$json = ob_get_clean();

		$font_icons = array();
		$icons      = json_decode( $json, true );

		foreach ( $icons['icons'] as $icon ) {
			$font_icons[] = $icon['id'];
		}
	}

	return $font_icons;
}

/**
 * Get nc-outline icons set.
 *
 * @return array
 */
function easyjet_get_nc_outline_icons_set() {

	static $nc_outline_icons;

	if ( ! $nc_outline_icons ) {
		ob_start();

		include EASYJET_THEME_DIR . '/assets/css/nucleo-outline.css';

		$result = ob_get_clean();

		preg_match_all( '/\.([-_a-zA-Z0-9]+):before[, {]/', $result, $matches );

		if ( ! is_array( $matches ) || empty( $matches[1] ) ) {
			return;
		}

		$nc_outline_icons = $matches[1];
	}

	return $nc_outline_icons;
}

/**
 * Get nc-mini icons set.
 *
 * @return array
 */
function easyjet_get_nc_mini_icons_set() {

	static $nc_mini_icons;

	if ( ! $nc_mini_icons ) {
		ob_start();

		include EASYJET_THEME_DIR . '/assets/css/nucleo-mini.css';

		$result = ob_get_clean();

		preg_match_all( '/\.([-_a-zA-Z0-9]+):before[, {]/', $result, $matches );

		if ( ! is_array( $matches ) || empty( $matches[1] ) ) {
			return;
		}

		$nc_mini_icons = $matches[1];
	}

	return $nc_mini_icons;
}

/**
 * Get nc-outline icons data for iconpicker control.
 *
 * @return array
 */
function easyjet_get_nc_outline_icons_data() {
	return apply_filters( 'easyjet_nc_outline_icons_data', array(
		'icon_set'    => 'easyjetNucleoOutlineIcons',
		'icon_css'    => EASYJET_THEME_URI . '/assets/css/nucleo-outline.css',
		'icon_base'   => 'nc-icon-outline',
		'icon_prefix' => '',
		'icons'       => easyjet_get_nc_outline_icons_set(),
	) );
}

/**
 * Get nc-mini icons data for iconpicker control.
 *
 * @return array
 */
function easyjet_get_nc_mini_icons_data() {
	return apply_filters( 'easyjet_nc_mini_icons_data', array(
		'icon_set'    => 'easyjetNucleoMiniIcons',
		'icon_css'    => EASYJET_THEME_URI . '/assets/css/nucleo-mini.css',
		'icon_base'   => 'nc-icon-mini',
		'icon_prefix' => '',
		'icons'       => easyjet_get_nc_mini_icons_set(),
	) );
}

/**
 * Get header button style presets.
 *
 * @return array
 */
function easyjet_get_btn_style_presets() {
	return apply_filters( 'easyjet_get_btn_style_presets', array(
		'accent-1' => esc_html__( 'Accent button 1', 'easyjet' ),
		'accent-2' => esc_html__( 'Accent button 2', 'easyjet' ),
	) );
}