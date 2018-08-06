<?php

/*
The helpers.php file adds useful functions
outside of the scope of the other files included in the lib directory.
*/

//======================================================================
// SHORTCODE HELPERS
//======================================================================

// Use [year] to add current year
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');

//======================================================================
// OTHER HELPERS
//======================================================================

// Add Google Analytics to header. Change UA-XXXXXXX-X to Tracking Id
function dropseed_add_google_analytics() { ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXXXX-X');
  </script>
<?php }
add_action( 'wp_head', 'dropseed_add_google_analytics', 10 );
