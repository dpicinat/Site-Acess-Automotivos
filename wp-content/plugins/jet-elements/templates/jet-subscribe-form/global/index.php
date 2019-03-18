<?php
/**
 * Subscribe Form main template
 */

$classes_list[] = 'jet-subscribe-form';

$submit_button_text = $this->get_settings( 'submit_button_text' );
$submit_placeholder = $this->get_settings( 'submit_placeholder' );
$layout             = $this->get_settings( 'layout' );

$classes_list[] = 'jet-subscribe-form--' . $layout . '-layout';

$classes = implode( ' ', $classes_list );

?>
<div class="<?php echo $classes; ?>">
	<form method="POST" action="#" class="jet-subscribe-form__form">
		<div class="jet-subscribe-form__input-group">
			<input class="jet-subscribe-form__input" type="email" name="jet-subscribe-mail" value="" placeholder="<?php echo $submit_placeholder; ?>">
			<a class="jet-subscribe-form__submit elementor-button elementor-size-md" href="#"><span><?php echo $submit_button_text; ?></span></a>
		</div>
		<div class="jet-subscribe-form__message"><div class="jet-subscribe-form__message-inner"><span></span></div></div>
	</form>
</div>
