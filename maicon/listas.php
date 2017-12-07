<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
    }

?>
<!-- Página desenvolvida em HTML por Maicon Fuck-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <title>Listas em HTML</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/listas.css" >
</head>
<body>
	 	<div class="main">
			<a href="homepage.php" class="btn">Voltar a Página Inicial</a>
			<h1>Mostrando como funcionam as listas em HMTL</h1>

			<h2>Exibindo contatos telefônicos em forma de lista</h2>

			<h2>Lista não ordenada:</h2>
				<p>É a lista do tipo "Unordered List" (lista sem ordem), onde os itens da lista aparecem na ordem que você colocar no código HTML, e não tem nenhuma numeração ou lógica de ordenamento, apenas a ordem dita por você</p>
					<ul> <!--Uma lista desordenada começa com a tag <ul>, e seus itens ficam dentro da tag <li>-->
						<li>Miguel</li>
						<li>Sophia</li>
						<li>Davi</li>
						<li>Alice</li>
						<li>Artur</li>
						<li>Julia</li>
						<li>Pedro</li>
						<li>Isabella</li>
					</ul>

			<h3>Listas Ordenadas: </h3>
				<p>As listas ordenadas, como o próprio nome já diz, os itens serão listados de forma ordenada, seja por número, letra, algarismos romanos, entre outros.</p>
				<p>Ordenadas por numeros:</p>

					<ol><!--Uma lista ordenada começa com a tag <ol>, e seus itens ficam dentro da tag <li>-->
						<li>Miguel</li>
						<li>Sophia</li>
						<li>Davi</li>
						<li>Alice</li>
						<li>Artur</li>
						<li>Julia</li>
						<li>Pedro</li>
						<li>Isabella</li>
					</ol>

				<p>Ordenadas por letras: </p>

					<ol type="A">
						<li>Miguel</li>
						<li>Sophia</li>
						<li>Davi</li>
						<li>Alice</li>
						<li>Artur</li>
						<li>Julia</li>
						<li>Pedro</li>
						<li>Isabella</li>
					</ol>
				</font>
		</div>
</body>
</html>
