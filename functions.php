<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

add_post_type_support( 'page', 'excerpt' );
remove_filter('get_the_excerpt', 'wp_trim_excerpt');

function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'services-menu' => __( 'Services Menu' ),
		'quick-links' => __( 'Quick Links' ),
		'legal-menu' => __( 'Legal Menu' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );


function wpb_login_logo() { ?>
    <style type="text/css">
    .login {
        background: #f3f3f3;
    }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/img/wazo-web-logo.svg);
            height:100px;
            width:300px;
            background-size: 300px 100px;
            background-repeat: no-repeat;
            padding-bottom: 10px;
        }
		.login form {
			border-radius: 5px;
			border: 0 !important;
		}
		.login .button-primary {
			background-color: #6C8D99 !important;
			border-color: #6C8D99 !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'Wazo Therapy';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );

function register_my_menu() {
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
	}
	add_action( 'init', 'register_my_menu' );