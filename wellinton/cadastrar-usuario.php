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
	$date = date('Y/m/d');
	$sql = "SELECT usuario FROM usuario WHERE usuario = '$usuario'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$_SESSION['mensagemErroCadastroExistente'] = "mensagemErroCadastroExistente";
		header('location:novo-usuario.php');
	}else{
		$sql = "INSERT INTO usuario (usuario, senha, dataCadastro) VALUES ('$usuario', '$senha', '$date')";
		if ($conn->query($sql) === TRUE) {
			$_SESSION['mensagemCadastro'] = "mensagemCadastro";
			header('location:novo-usuario.php');
		}else{
			$_SESSION['mensagemErroCadastro'] = "mensagemErroCadastro";
			header('location:novo-usuario.php');
		}
	}
?>
