<?php

/*
The cleanup.php file cleans up the
wordpress head and other components and provides
minor optimizations.
*/
//======================================================================
// CLEANUP
//======================================================================

function dropseed_head_cleanup() {
  remove_action( 'wp_head', 'feed_links_extra', 3 );  // Category feeds
  remove_action( 'wp_head', 'feed_links', 2 );  // Post and comment feeds
  remove_action( 'wp_head', 'rsd_link' );  // EditURI link
  remove_action( 'wp_head', 'wlwmanifest_link' );  // Windows live writer
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // Previous link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );  // Start link
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );  // Adjacent post link
  remove_action( 'wp_head', 'wp_generator' );  // WP version
  remove_action( 'wp_head', 'index_rel_link' ); // Index link
  // remove_action('wp_head', 'rel_canonical', 10);  // Canonical link
  // remove_action('wp_head', 'wp_shortlink_wp_head', 10); // Shortlink
  // remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );  // Remove the REST API lines from the HTML Header
  // remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );  // Remove the REST API lines from the HTML Header
  add_filter( 'style_loader_src', 'dropseed_remove_wp_ver_css_js', 9999 ); // Remove WP version from CSS
  add_filter( 'script_loader_src', 'dropseed_remove_wp_ver_css_js', 9999 ); // Remove WP version from scripts
}

// Remove RSS versioning
function dropseed_rss_version() { return 'wtf'; }

// Remove WP version from scripts
function dropseed_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

// Remove injected CSS for recent comments widget
function dropseed_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

// Remove injected CSS from recent comments widget
function dropseed_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}

// Remove injected CSS from gallery
function dropseed_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}

// Remove paragraph tags from images
function dropseed_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

/* Remove visual composer generator info in header
   Uncomment when visual composer used
   --------------------------------------------------

  function dropseed_remove_visual_composer() {
    remove_action('wp_head', array(visual_composer(), 'addMetaData'));
  }
  add_action('init', 'dropseed_remove_visual_composer', 100);

  --------------------------------------------------
 */
