<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function wpb_login_logo() { ?>
    <style type="text/css">
        body.login.login.login.login {
		    background-image: linear-gradient(180deg,rgba(2,75,121,0.87) 0%,rgba(2,75,121,0.84) 100%),url(https://wordpress-583479-2086173.cloudwaysapps.com/wp-content/uploads/2021/08/pexels-alisha-lubben-2017752.jpg)!important;
		}
		div#login {
			margin: auto;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );


// php libraries
require get_stylesheet_directory() . '/vendor/autoload.php';

// ponds
require get_stylesheet_directory() . '/ponds.php';