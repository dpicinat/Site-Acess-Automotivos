<?php
/**
 * The template for displaying comments.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package Easyjet
 */
?>
<div class="comment-author vcard">
	<?php echo easyjet_comment_author_avatar(); ?>
</div>
<div class="comment-content-wrap">
	<div class="comment-content-wrap-head">
		<footer class="comment-meta">
			<div class="comment-metadata">
				<?php echo easyjet_get_comment_author_link(); ?>
				<?php echo easyjet_get_comment_date( array(
					'format' => 'F d, Y, g:i a',
				) ); ?>
			</div>
		</footer>
		<div class="comment-content">
			<?php echo easyjet_get_comment_text(); ?>
		</div>
	</div>
	<div class="reply">
		<?php echo easyjet_get_comment_reply_link( array(
			'reply_text' => esc_html__( 'Reply', 'easyjet' ),
		) ); ?>
	</div>
</div>
