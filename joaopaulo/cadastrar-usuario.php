<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('includes/mysqli_connect.php');
		
	$errors = array(); 
	
	
	if (empty($_POST['usua_nome'])) {
		$errors[] = 'Você não digitou seu nome.';
	} else {
		$nome = @mysqli_real_escape_string($bdc, trim($_POST['usua_nome']));
	}
	
	
	if (empty($_POST['usua_login'])) {
		$errors[] = 'Você não digitou seu login.';
	} else {
		$login = @mysqli_real_escape_string($bdc, trim($_POST['usua_login']));
	}
	
	
	
	
	if (!empty($_POST['usua_senha1'])) {
		if ($_POST['usua_senha1'] != $_POST['usua_senha2']) {
			$errors[] = 'A senha e a cofimação não correspondem.';
		} else {
			$senha = @mysqli_real_escape_string($bdc, trim($_POST['usua_senha1']));
		}
	} else {
		$errors[] = 'Você não digitou a senha.';
	}
	
	if (empty($errors)) { 
	
		
		$q = "INSERT INTO usuario (usua_nome, usua_login, usua_senha, usua_data_cadastro) VALUES ('$nome', '$login', SHA1('$senha'), NOW() )";		
		$r = @mysqli_query ($bdc, $q); 
		if ($r) { 
			
			require ('includes/login_functions.inc.php');
			redirect_user();
		} 
			
		
	} else { 
	
		
		
	} // End of if (empty($errors)) IF.
	
	@mysqli_close($bdc); // Close the database connection.

} // End of the main Submit conditional.
include ('novo-usuario.php');
?>