<?php
/**
 * Services Section
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="section profile">
		<div class="container-fluid">
			<div class="row d-flex align-items-stretch justify-content-center">
				<div class="col-sm-6">
					<div class="section-intro">
						<h3 class="section-title">Meet the therapist</h3>
						<h2 class="profile-title">Bernice Nderitu</h2>
						<p class="profile-desc">Doctor of Psychology, Clinical Psychology (PsyD) Candidate with 15 years of mental health and psychosocial support experience in East Africa and the United States</p>

						<p class="profile-desc">Bernice is a psychotherapist based in Nairobi, Kenya who specializes in emotional trauma, anxiety, depression, and developmental disabilities.</p>
						
						<a class="video-link" data-toggle="modal" href="#videoModal"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/ted-talk-image.png" width="250"></a>
						<div class="profile-social">
							<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-icon btn-outline-primary"><span class="mdi mdi-linkedin"></span></a>
							<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-icon btn-outline-primary"><span class="mdi mdi-twitter"></span></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 profile-image">
				</div>
			</div>
		</div>
	</div>