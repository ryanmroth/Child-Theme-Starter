<?php

/*
The favicons.php file adds custom favicons
generated at realfavicongenerator.net to the Wordpress head.
*/

//======================================================================
// INSERT FAVICONS
//======================================================================

  function dropseed_add_favicons() {?>
    <!-- ADD FAVICON PACKAGE -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/safari-pinned-tab.svg" color="#293a44">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- END FAVICON PACKAGE -->
    <?php
  }
  add_action( 'wp_head', 'dropseed_add_favicons' );
