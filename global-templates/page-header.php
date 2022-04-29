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

	<div id="wrapper-static-content" tabindex="-1" >

		<div class="page-header" style="background: url('<?php  
				echo get_the_post_thumbnail_url();
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center;">
			<div class="container">
				<div class="section-heading">
					<h3 class="section-title">Experienced, professional & authentic</h3>
					<p class="sub-title"><?php the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	</div>
