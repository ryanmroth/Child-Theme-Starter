<?php

/*
The helpers.php file adds useful functions
outside of the scope of the other files included in lib.
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
