<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "banco_de_dados";

	$mysqli = new mysqli($host, $usuario, $senha, $bd);

	if($mysqli>connect_errno)
		echo "Falha na Conexão: (".mysqli>connect_errno.") ".mysqli>connect_errno;
?>