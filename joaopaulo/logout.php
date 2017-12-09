<?php # logout.php


session_start(); // Access the existing session.

// If no session variable exists, redirect the user:
if (!isset($_SESSION['usua_id'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	
	
} else { // Cancel the session:
	
	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0); // Destroy the cookie.
	require ('includes/login_functions.inc.php');
	redirect_user();

}
 	

?>