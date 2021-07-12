<?php
/**
 * Call to action
 * 
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="section home-cta">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-sm-8">
					<h2 class="text-white">Not sure what support you are looking for or how many sessions you need?</h2>
					<div class="service-cta">
						<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-hero btn-outline-light">Book initial consultation</a>
					</div>
				</div>
			</div>
		</div>
	</div>
