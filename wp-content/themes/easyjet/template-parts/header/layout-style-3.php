<?php
/**
 * Template part for style-3 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Easyjet
 */
$search_visible                  = get_theme_mod( 'header_search', easyjet_theme()->customizer->get_default( 'header_search' ) );
$visibility_in_header = get_theme_mod( 'header_social_links', easyjet_theme()->customizer->get_default( 'header_social_links' ) );
?>
<?php easyjet_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); 
?>
<div class="header-container_wrap container">
	<div class="header-container__flex-wrap">
		<div class="row row-sm-center">
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-push-4">
				<div class="site-branding">
					<?php easyjet_header_logo() ?>
					<?php easyjet_site_description(); ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-push-4">
			<div class="components_wrap">
					<?php if ( $search_visible ) : ?>
						<div class="header-components header-components__search-cart"><?php
							easyjet_header_search_toggle();
						?></div>
					<?php endif; ?>
					<?php if ( $visibility_in_header ) : ?>
					<?php easyjet_social_list( 'header' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php easyjet_main_menu(); ?>
	</div>
</div>
