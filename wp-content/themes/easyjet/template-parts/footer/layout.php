<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Easyjet
 */

$footer_logo_visibility    = get_theme_mod( 'footer_logo_visibility', easyjet_theme()->customizer->get_default( 'footer_logo_visibility' ) );
$footer_menu_visibility    = get_theme_mod( 'footer_menu_visibility', easyjet_theme()->customizer->get_default( 'footer_menu_visibility' ) );
?>

<div <?php easyjet_footer_container_class(); ?>>

	<?php if ( $footer_logo_visibility || $footer_menu_visibility ) { ?>
		<div class="site-info container site-info-first-row">
			<div class="site-info-wrap">
				<div class="site-info-block"><div class="footer-logo--with-slogan"><?php
					easyjet_footer_logo();
					easyjet_site_description();
				?></div></div>
				<?php easyjet_footer_menu(); ?>
			</div>
		</div><!-- .site-info-first-row -->
	<?php } ?>

	<div class="site-info container site-info-second-row">
		<div class="site-info-wrap">
			<div class="site-info-block"><?php
				easyjet_footer_copyright();
			?></div>
			<?php easyjet_social_list( 'footer' ); ?>
		</div>
	</div><!-- .site-info-second-row -->

</div><!-- .container -->
