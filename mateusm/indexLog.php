<?php 

session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
	echo"<script language='javascript' type='text/javascript'>alert('Erro: Esse login ja está em uso');window.location.href='index.php';</script>";
	header('Location: index.php');

}



 ?>

 
  <!DOCTYPE html>
 <html>
 <head>
 	<title>TESTE</title>
 </head>
 <body>

 teste
 
 </body>
 </html>