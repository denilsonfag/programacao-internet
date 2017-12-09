<?php # login.php 
// Esta pagina processa o login
// The script now stores the HTTP_USER_AGENT value for added security.

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	
	require ('includes/login_functions.inc.php');
	require ('includes/mysqli_connect.php');
		
	// Check the login:
	list ($check, $data) = check_login($bdc, $_POST['usua_login'], $_POST['usua_senha']);
	
	if ($check) { // OK!
		
		// Set the session data:
		session_start();
		$_SESSION['usua_id'] = $data['usua_id'];
		$_SESSION['usua_nome'] = $data['usua_nome'];
		
		// Store the HTTP_USER_AGENT:
		$_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);

		// Redirect:
		redirect_user('loggedin.php');
			
	} else { // Unsuccessful!

		// Assign $data to $errors for login_page.inc.php:
		$errors = $data;

	}
		
	mysqli_close($bdc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:v
include ('index.php');
?>