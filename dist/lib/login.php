<?php

/*
The login.php file provides functions
which customize the Wordpress login screen.
*/

//======================================================================
// LOGIN CUSTOMIZATION
//======================================================================

// Enqueue the custom login css
function dropseed_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_bloginfo('stylesheet_directory') . '/login/custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'dropseed_login_stylesheet' );

// By default, the login logo links to wordpress.org. Let's change that.
function dropseed_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'dropseed_login_logo_url' );

// Remove login screen shake
function dropseed_login_shake() {
	remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'dropseed_login_shake');

// Modify default login error text
add_filter('login_errors', create_function('$a', "return '<b>Error:</b> Invalid username or password';"));
