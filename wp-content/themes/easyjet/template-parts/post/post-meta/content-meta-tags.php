<?php
/**
 * Template part for displaying post tags.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Easyjet
 */

$utility = easyjet_utility()->utility;

if ( 'post' === get_post_type() ) :

	$tags_visible = ( is_single() ) ? easyjet_is_meta_visible( 'single_post_tags', 'single' ) : easyjet_is_meta_visible( 'blog_post_tags', 'loop' );

	$utility->meta_data->get_terms( array(
		'visible'   => $tags_visible,
		'type'      => 'post_tag',
		'delimiter' => '<span class="post__tags-delimiter">, </span>',
		'before'    => '<span class="post__tags">',
		'after'     => '</span>',
		'echo'      => true,
	) );

endif;
