<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="section hero">
		<div class="container">
			<div class="row hero-header">
				<div class="col-sm-6 hero-text">
					<div class="slider-text">
						<h1 class="big-heading">Together with you on your path to healing</h1>
						<p class="hero-intro-text">Mental health services through teletherapy and face-to-face therapy for those in Nairobi</p>
						<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-outline-primary">Get started</a>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-overlay"></div>
	</div>
