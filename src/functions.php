<?php

/*
This functions.php file loads the code library
utilizing the array. This helps to
minimize the breadth of the functions file.

Developed by: Ryan Roth
URL: https://dropseedsolutions.com
Twitter: @dropseed

A big thank you to:

  - Eddie Machado
  - URL: http://themble.com/bones/

  - Roots
  - URL: https://roots.io/sage/
*/

$dropseed_includes = [
  'lib/setup.php',    // Theme setup
  'lib/cleanup.php',  // Clean up functions
  'lib/login.php',    // Custom login page
  'lib/dashboard.php',    // Customize dashboard
  'lib/helpers.php',   // Useful helper functions
  'lib/favicons.php'   // Adding favicons
];

foreach ($dropseed_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'dropseed'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}

unset($file, $filepath);
