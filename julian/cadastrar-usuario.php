<?php
	
	require_once('db.php');
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];	
	$confirmaSenha = $_POST['confirmarsenha'];

	$objDB = new db();
	$link = $objDB->conecta_mysql();

	if($senha == $confirmaSenha){
		$sql = "insert into usuarios(usuario, senha) values ('$usuario', '$senha')";

		//executa a query
		if(mysqli_query($link, $sql)){
			header('Location: registrado_sucesso.php');
		}else{
			header('Location: registrado_erro.php');
		}
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('As senhas não são iguais');window.location.href='novo-usuario.php';</script>";
    die();
	}
?>