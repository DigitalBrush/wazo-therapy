<?php
/**
 * Template Name: Home Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="full-width-page-wrapper">

	<div id="content">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<?php


					if ( is_front_page() ) {
						get_template_part( 'global-templates/hero-header' );
						get_template_part( 'global-templates/services' );
						get_template_part( 'global-templates/call-to-action' ); 
						get_template_part( 'global-templates/profile' );
						get_template_part( 'global-templates/quote' );
						get_template_part( 'global-templates/home-modal' ); 
					}else{


						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'page' );
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
