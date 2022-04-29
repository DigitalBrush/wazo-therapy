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
					<div class="row widgets">

						<div class="col-md-3">


							<div class="footer-nav">
								<h4>Quick links</h4>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'quick-links',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'quick-links',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								);
								?>
							</div>

						</div>
						<div class="col-md-3">

							<div class="footer-nav">
								<h4>Services</h4>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'services-menu',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'services-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								);
								?>
							</div>
						</div>
						<div class="col-md-3">

							<div class="footer-nav">
								<h4>Legal</h4>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'legal-menu',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'legal-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								);
								?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-brand">
								<div class="brand">
									<!-- Your site title as branding in the menu -->
									<?php if ( ! has_custom_logo() ) { ?>

									<?php } else {
									the_custom_logo();
									} ?><!-- end custom logo -->
								</div>
								<div class="social d-flex">
									<a href="https://twitter.com/wazotherapy" target="_blank" class="btn btn-sm btn-icon btn-primary"><span class="mdi mdi-twitter"></span></a>
									<a href="https://linkedin.com/wazotherapy" target="_blank" class="btn btn-sm btn-icon btn-primary"><span class="mdi mdi-linkedin"></span></a>
								</div>
							</div>
						</div>
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

