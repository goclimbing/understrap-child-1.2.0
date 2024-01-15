<?php

/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts()
{
	wp_dequeue_style('understrap-styles');
	wp_deregister_style('understrap-styles');

	wp_dequeue_script('understrap-scripts');
	wp_deregister_script('understrap-scripts');
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles()
{

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get('Version'));
	wp_enqueue_script('jquery');
	wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get('Version'), true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain()
{
	load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @return string
 */
function understrap_default_bootstrap_version()
{
	return 'bootstrap5';
}
add_filter('theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20);



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js()
{
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array('customize-preview'),
		'20130508',
		true
	);
}
add_action('customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js');


//include get_template_directory() . '/inc/settings.php';

function cptui_register_my_cpts()
{

	/**
	 * Post Type: Recipes.
	 */

	$labels = [
		"name" => esc_html__("Recipes", "understrap-child"),
		"singular_name" => esc_html__("Recipe", "understrap-child"),
		"menu_name" => esc_html__("Recipes", "understrap-child"),
	];

	$args = [
		"label" => esc_html__("Recipes", "understrap-child"),
		"labels" => $labels,
		"description" => "For decades I have been chef focused on creating delicious dishes from organic, sustainable, sometimes vegan ingredients.   As a sushi chef every ingredient has been carefully selected and represents what I found to the best food ingredients around.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "recipes", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type("recipes", $args);
}

add_action('init', 'cptui_register_my_cpts');




// Constants.
define('RECURLY_API_KEY', 'd15ada94c2b54987a682917125500464');

define('FORTYTWO_THEME_VERSION', '1.0.1');
define('FORTYTWO_THEME_PATH', trailingslashit(get_stylesheet_directory()));
define('FORTYTWO_THEME_URL', trailingslashit(get_stylesheet_directory_uri()));

//If using google maps place API key here
define('FORTYTWO_THEME_MAPS_KEY', '');

// Queue Bootstrap Walker
//require_once FORTYTWO_THEME_PATH . 'includes/wp-bootstrap4-walker.php';

//require_once FORTYTWO_THEME_PATH . 'vendor/autoload.php';

// Pluggable.
//require_once FORTYTWO_THEME_PATH . 'includes/pluggable.php';

// Includes.
require_once FORTYTWO_THEME_PATH . 'includes/acf.php';
//require_once FORTYTWO_THEME_PATH . 'includes/assets.php';
require_once FORTYTWO_THEME_PATH . 'includes/auth.php';
//require_once FORTYTWO_THEME_PATH . 'includes/editor.php';
//require_once FORTYTWO_THEME_PATH . 'includes/excerpt.php';
//require_once FORTYTWO_THEME_PATH . 'includes/favicon.php';
//require_once FORTYTWO_THEME_PATH . 'includes/forms.php';
//require_once FORTYTWO_THEME_PATH . 'includes/i18n.php';
//require_once FORTYTWO_THEME_PATH . 'includes/media.php';
//require_once FORTYTWO_THEME_PATH . 'includes/setup.php';
//require_once FORTYTWO_THEME_PATH . 'includes/helpers.php';
//require_once FORTYTWO_THEME_PATH . 'includes/woocommerce.php';

//require_once FORTYTWO_THEME_PATH . 'libs/accounts.php';


/**
 * Recurly Config
 */
require_once FORTYTWO_THEME_PATH . 'libs/misc.php';
require_once FORTYTWO_THEME_PATH . 'classes/class.recurly.php';

global $recurly;
$recurly = new Recurly();

/**
 * Custom ACF Blocks Config
 */
require_once FORTYTWO_THEME_PATH . 'includes/acf-blocks.php';
