<?php

/*
The security.php file adds or removes Wordpress
functionality in support of greater security.
*/

//======================================================================
// APIs
//======================================================================

// Disable XML-RPC – that allows communication with WordPress remotely
add_filter('xmlrpc_enabled', '__return_false');
