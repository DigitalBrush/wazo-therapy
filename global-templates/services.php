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

	<div class="section services">
		<div class="container">
			<div class="section-heading">
				<h3 class="section-title">Experienced, professional & authentic</h3>
				<p class="sub-title">Providing mental health and psychosocial support through therapy</p>
			</div>
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-sm-12">
					<div class="row service-row">
						<div class="col-sm-4">
							<div class="service-col">
								<div class="service-icon">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wazo-icon-psych-eval.svg">
								</div>
								<h4 class="service-title">Evaluations</h4>
								<p class="service-text">Clinical interviews and use psychological testing for diagnosis and treatment planning</p>
								<div class="service-cta">
									<a href="<?php echo esc_url(home_url('services/psychological-evaluation')); ?>" class="btn btn-lg btn-outline-primary">How it works</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="service-col focus">
								<div class="service-icon">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wazo-icon-psychotherapy.svg">
								</div>
								<h4 class="service-title">Psychotherapy</h4>
								<p class="service-text">Evidence-based therapeutic processes and approaches that are effective and efficient</p>
								<div class="service-cta">
									<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-outline-primary">Get started</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="service-col">
								<div class="service-icon">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wazo-icon-mhpss.svg">
								</div>
								<h4 class="service-title">Training</h4>
								<p class="service-text">Training on emotional trauma and resilience, stress management, parenting, autism, and ADHD</p>
								<div class="service-cta">
									<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-outline-primary">Find out more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-3">
			<h3 class="section-title">Proud member of:</h3>
			<div class="row membership-row">
				<div class="col-sm-5">
					<div class="row">
						<div class="col-6 member">
							<a href="https://www.apa.org/" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo-apa.png"></a>
						</div>
						<div class="col-6 member">
							<a href="https://www.emdria.org/" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo-emdria.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
