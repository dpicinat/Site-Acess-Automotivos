<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Easyjet
 */
?>

<?php
	$blog_layout_type    = get_theme_mod( 'blog_layout_type', easyjet_theme()->customizer->get_default( 'blog_layout_type' ) );
	$blog_featured_image = get_theme_mod( 'blog_featured_image', easyjet_theme()->customizer->get_default( 'blog_featured_image' ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>


	<div class="posts-list">
			<div class="entry-meta head-elemetns">
				<?php get_template_part( 'template-parts/post/post-components/post-sticky' ); ?>
				<?php get_template_part( 'template-parts/post/post-meta/content-meta-comments' ); ?>
			</div>
			<header class="entry-header"><?php
				get_template_part( 'template-parts/post/post-meta/content-meta-author' );
				get_template_part( 'template-parts/post/post-meta/content-meta-categories' );
				get_template_part( 'template-parts/post/post-components/post-title' );
			?></header><!-- .entry-header -->

			<div class="post-featured-content"><?php
				do_action( 'cherry_post_format_link', array(
					'render' => true,
				) );?>
			</div><!-- .post-featured-content -->

			<div class="posts-list__item-content">
					<div class="entry-content"><?php
						get_template_part( 'template-parts/post/post-components/post-content' );
					?></div><!-- .entry-content -->
			</div><!-- .posts-list__right-col -->

			<footer class="entry-footer">
				<div class="entry-meta-container"><?php
					get_template_part( 'template-parts/post/post-meta/content-meta-tags' );
				?></div>

				<div class="entry-footer-bottom"><?php
					get_template_part( 'template-parts/post/post-components/post-button' );
					easyjet_share_buttons( 'loop' );
				?></div><!-- .entry-footer-bottom -->
			</footer><!-- .entry-footer -->
	</div><!-- .posts-list__right-col -->

</article><!-- #post-## -->
