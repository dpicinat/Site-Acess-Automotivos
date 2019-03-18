<?php
/**
 * The template for displaying author bio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Easyjet
 */

if ( ! get_the_author_meta( 'description' ) ) {
	return;
}
?>
<div class="post-author-bio">

	<div class="post-author__holder clear">
		<div class="post-author__avatar"><?php
			echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'easyjet_author_bio_avatar_size', 100 ), '', esc_attr( get_the_author_meta( 'nickname' ) ) );
		?></div>
		<div class="post-author__content">
			<h5 class="post-author__super-title title-decoration"><?php printf(esc_html__( 'Writen by %s', 'easyjet' ), easyjet_get_the_author_posts_link() ); ?></h5>
			<?php
			echo get_the_author_meta( 'description' );
		?></div>
	</div>
</div><!--.post-author-bio-->
