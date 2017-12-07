<?php
	require ("db.php");

	$usuario = $_POST['inputUsuario'];
	$senha = md5($_POST['inputPassword']);

	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");
	$row = mysqli_num_rows($query);

	if ($row > 0){
		session_start();
		$_SESSION['usuario'] = $_POST['inputUsuario'];
		$_SESSION['senha'] = $_POST['inputPassword'];
		header('Location: dashboard.php');
	}else{
		header('Location: index.php?msg=1');
	}
?>
