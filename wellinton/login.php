<!--
Wellinton Vieira
Programação para Internet I
 -->

<?php
    session_start();
    include "conexao.php";

    $usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$senha = md5($senha);
    $sql = "SELECT usuario, senha FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' LIMIT 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$_SESSION['usuario'] = $usuario;
		header('location:principal.php');
	}else{
		$_SESSION['mensagemErro'] = "mensagemErro";
		header('location:index.php');
	}
?>
