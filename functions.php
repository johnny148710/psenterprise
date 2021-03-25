<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
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
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}


// Custom user role
add_role('delegate', __(
	'Delegate'),
	array(
		'read'            => true, // Allows a user to read
		'create_posts'    => false, // Allows user to create new posts
		'edit_posts'      => false, // Allows user to edit their own posts
		)
 );

 add_role('speaker', __(
	'Speaker'),
	array(
		'read'            => true, // Allows a user to read
		'create_posts'    => false, // Allows user to create new posts
		'edit_posts'      => false, // Allows user to edit their own posts
		)
 );

 add_role('poster-presenter', __(
	'Poster presenter'),
	array(
		'read'            => true, // Allows a user to read
		'create_posts'    => false, // Allows user to create new posts
		'edit_posts'      => false, // Allows user to edit their own posts
		)
 );

 add_role('advisory-board-member', __(
	'Advisory Board Member'),
	array(
		'read'            => true, // Allows a user to read
		'create_posts'    => false, // Allows user to create new posts
		'edit_posts'      => false, // Allows user to edit their own posts
		)
 );

 add_role('advisory-board-member', __(
	'Advisory Board Member'),
	array(
		'read'            => true, // Allows a user to read
		'create_posts'    => false, // Allows user to create new posts
		'edit_posts'      => false, // Allows user to edit their own posts
		)
 );
 
 add_role('safety-seminar', __(
	'Safety Seminar'),
	array(
		'read'            => true, // Allows a user to read
		'create_posts'    => false, // Allows user to create new posts
		'edit_posts'      => false, // Allows user to edit their own posts
		)
 );

 function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png');
		height:65px;
		width:320px;
		background-size: contain;
		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );