<?php 

/*
The PHP superglobal variables are:


$GLOBALS
$_SERVER || server environment, such as headers, paths, and script locations.
$_REQUEST || contains the contents of $_GET, $_POST, and $_COOKIE.
$_POST || Input from User
$_GET || Input from User
$_FILES || Uploaded files via $_POST method
$_ENV || System Enviroment table access
$_COOKIE || Cookie session keys etc.
$_SESSION || Contains the seassion variables
*/

// Define a global variable
$global_variable = 'Hello!';

// Print the custom variable
echo $GLOBALS['global_variable']; 

echo "\n Current running script name: " . $_SERVER['PHP_SELF'] . "\n";

?>