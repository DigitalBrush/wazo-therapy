<?php
/**
 * Quote
 * 
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="section quote">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-sm-8">
					<h1 class="quote-text">Empower the mind. <span>Transform the soul.</span></h1>
					<div class="service-cta">
						<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-hero btn-outline-light">Start your journey today</a>
					</div>
				</div>
			</div>
		</div>
	</div>
