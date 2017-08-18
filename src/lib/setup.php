<?php

/*
The setup.php file enqueues parent styles
and begins the launch process.
*/

//======================================================================
// ENQUEUEING
//======================================================================

function dropseed_theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'dropseed_theme_enqueue_styles' );

//======================================================================
// LAUNCH
//======================================================================

function dropseed_launch() {
  add_action( 'init', 'dropseed_head_cleanup' );
  add_filter( 'the_generator', 'dropseed_rss_version' );
  add_filter( 'wp_head', 'dropseed_remove_wp_widget_recent_comments_style', 1 );
  add_action( 'wp_head', 'dropseed_remove_recent_comments_style', 1 );
  add_filter( 'gallery_style', 'dropseed_gallery_style' );
  add_filter( 'the_content', 'dropseed_filter_ptags_on_images' );
  add_filter( 'excerpt_more', 'dropseed_excerpt_more' );
}
add_action( 'after_setup_theme', 'dropseed_launch' );
