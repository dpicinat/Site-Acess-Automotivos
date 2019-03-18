<?php
/**
 * The base template for displaying 404 pages (not found).
 *
 * @package Easyjet
 */
?>
<?php get_header( easyjet_template_base() ); ?>

	<?php easyjet_site_breadcrumbs(); ?>

	<div <?php easyjet_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php easyjet_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include easyjet_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_sidebar(); // Loads the sidebar.php. ?>

		</div><!-- .row -->

	</div><!-- .site-content_wrap -->

<?php get_footer( easyjet_template_base() ); ?>
