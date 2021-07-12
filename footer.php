<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="brand">
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

						<?php } else {
						the_custom_logo();
						} ?><!-- end custom logo -->
					</div>

					<div class="footer-nav">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu',
								'container_class' => 'navbar navbar-expand-sm',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav mx-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'footer-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div>

					<div class="site-info">
						

						&copy; <?php echo date("Y"); ?> Wazo Therapy.

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/custom-javascript.js"></script>
</body>

</html>

