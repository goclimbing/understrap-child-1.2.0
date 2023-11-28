<?php

/**
 * ACF.
 *
 * @package graphicten_default
 * @since 1.0.1
 */

namespace FORTYTWOTheme;

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Hooks.
add_action('acf/init', 'FORTYTWOTheme\settings_page');

/**
 * Settings Page.
 *
 * @since 1.0.0
 */
function settings_page()
{
    // Adds Options Page for ACF
    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title'     => 'Global Settings',
            'menu_title'    => 'Global Settings',
            'menu_slug'     => 'global-settings',
            'capability'    => 'edit_posts',
            'position'         => '4',
            'redirect'        => true,
            'icon_url'         => 'dashicons-admin-site',
        ));
    }
}

//client key
wp_register_script(
    'aa_js_googlemaps_script',
    'https://maps.googleapis.com/maps/api/js?v=3.exp&key=' . FORTYTWO_THEME_MAPS_KEY
); // with Google Maps API fix

wp_enqueue_script('aa_js_googlemaps_script');


function my_acf_init()
{
    acf_update_setting('google_api_key', FORTYTWO_THEME_MAPS_KEY);
}

add_action('acf/init', 'FORTYTWOTheme\my_acf_init');
