<?php
	session_start();
	require_once('db.php');	

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' "; 
	$objDB = new db();
	$link = $objDB->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
			$dados_usuario = mysqli_fetch_array($resultado_id);
				if(isset($dados_usuario['usuario'])){
					$_SESSION['usuario'] = $dados_usuario['usuario'];
					header('Location: arquivos.php');
				}else {
					header('Location: index.php?erro=1');
				}	
	}else{
			echo 'Erro na execução da consulta, favor entrar em contato com o admin do site.';
	}
?>