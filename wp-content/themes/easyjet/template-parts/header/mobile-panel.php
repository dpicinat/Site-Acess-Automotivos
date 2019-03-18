<?php
/**
 * Template part for mobile panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Easyjet
 */
?>
<div class="mobile-panel invert">
	<div class="mobile-panel__inner">
		<?php easyjet_menu_toggle( 'main-menu' ); ?>
		<div class="header-components">
			<?php easyjet_header_search_toggle(); ?>
		</div>
	</div>
	<?php easyjet_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
</div>
