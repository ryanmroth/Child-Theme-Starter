<?php

/*
The dashboard.php file provides functions
which customize the Wordpress dashboard.
*/

//======================================================================
// DASHBOARD CUSTOMIZATION
//======================================================================

// Customize dashboard footer information
function dropseed_modify_admin_footer() {
  echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Developed by <a href="https://yourdomain.com" target="_blank">Your Company Name</a> ';
}
add_filter('admin_footer_text', 'dropseed_modify_admin_footer');

// Remove 'Howdy' in admin bar
function dropseed_replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Logged in as:', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'dropseed_replace_howdy', 25 );

// Add additional contact fields to user profiles
function dropseed_add_contact_methods( $contact_methods ) {
  $contact_methods['twitter'] = 'Twitter';
  $contact_methods['facebook'] = 'Facebook';
  return $contact_methods;
}
add_filter('user_contactmethods','dropseed_add_contact_methods',10,1);

// Hide admin bar for non-admins
if (!current_user_can('manage_options')) {
  add_filter('show_admin_bar','__return_false');
}

// Hide WordPress update notification from all non-admins
function dropseed_hide_update_notice() {
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'dropseed_hide_update_notice', 1 );
