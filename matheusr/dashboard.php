<?php
	require ("db.php");
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header ("Location: index.php?msg=2");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="login-page">
    <div class="container">
        <h2 style="color: #6d706f">Bem vindo <?= $_SESSION['usuario'] ?> !</h2>
        <a href="botoes.php">Botões</a><br>
        <a href="charsets.php">Charsets</a><br />
        <a href="loopwhile.php">Loop While</a><br /><br />
        <a href="logout.php">Logout</a><br /><br />
    </div>
</div>
</body>
</html>
