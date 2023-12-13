<?php

/**
 * Auth.
 *
 * @package graphicten_default
 * @since 1.0.0
 */

namespace FORTYTWOTheme;

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Hooks.
add_action('login_enqueue_scripts', 'FORTYTWOTheme\login_logo');
add_filter('login_headerurl', 'FORTYTWOTheme\login_url');
add_filter('login_headertext', 'FORTYTWOTheme\login_title');

/**
 * Login Logo.
 *
 * @since 1.0.0
 */
function login_logo()
{
    $logo = get_field('logo', 'options');
    // $logo = $logo ? $logo['url'] : fortytwo_theme_img('I-10-RV-RGB.svg');
?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url('<?php echo $logo; ?>');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0 0 20px 0;
            height: 130px;
            width: 100%;
        }

        #login p#nav,
        #login p#backtoblog {
            text-align: center;
        }

        #login p#nav a:hover,
        #login p#backtoblog a:hover {
            color: #2b3940;
        }

        #login .button-primary {
            background: #2b3940;
            border-color: #2b3940;
        }

        #login .button-secondary .dashicons {
            color: #2b3940;
        }

        #login input[type="text"]:focus,
        #login input[type="password"]:focus {
            border-color: #2b3940;
            box-shadow: 0 0 0 1px #2b3940;
        }

        #login a {
            color: #2b3940;
        }

        #login .privacy-policy-page-link {
            margin: 0;
        }
    </style>
<?php
}

/**
 * Login Url.
 *
 * @since 1.0.0
 *
 * @param string $url
 *
 * @return string
 */
function login_url($url)
{
    return esc_url(site_url('/'));
}

/**
 * Login Title.
 *
 * @since 1.0.0
 *
 * @param string $text
 *
 * @return string
 */
function login_title($text)
{
    return esc_attr(get_bloginfo('name'));
}
