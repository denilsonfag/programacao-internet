<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}

?>


<!DOCTYPE html>             <!-- Definindo a versão do HTML do documento-->
<html lang="pt-br">
<!-- Definindo a linguagem do documento HTML (motores de busca)-->

<head>
    <!-- Iniciando a área de meta dados da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Definindo o conjunto de caracteres deste arquivo HTML -->
    <title>Array</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        h1 {
            text-align: center;
            font-size: 20px;
            color: black;
            border-width: medium;
            border-style: inset;
            border-color: blue;
        }

        p {
            text-align: center;
            line-height: 15px;
        }

        .p1 {
            text-align: left;
            line-height: 15px;
        }

        .p2 {
            font-weight: bold;
            text-align: left;
        }

        .p3 {
            text-align: left;
            padding-left: 30px;
        }

    </style>


</head>
<div id="interface">

    <body>

       <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" >Programação WEB</a>
            </div>
            <ul class="nav navbar-nav">

                <li class="active"><a href="#">Head</a></li>
                <li><a href="border-outline.php">Border</a></li>
                <li><a href="array.php">Array</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"><span class="glyphicon glyphicon-user"></span>
          <?php
                $user = $_SESSION['login'];
	       echo "Bem vindo $user";
          ?>
          </a>
                </li>
                <li><a href="logout.php?token='.md5(session_id()).'"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

        <!-- Iniciando a área do conteúdo da página -->
        <h1>
            <b>PHP 5 Arrays</b>
        </h1>
        <p class="p2">Os Arrays armazenam multiplos valores em uma unica variavel</p><br>
        <p class="p1">$cars = array("Volvo", "BMW", "Toyota");</p>
        <p class="p1">echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";</p>
        <br>
        <hr />

        <h1> O que é um Array </h1><br>
        <p class="p2"> Uma array é uma variável especial, que pode conter mais de um valor por vez.</p>
        <p class="p1">Se você tem uma lista de itens (uma lista de nomes de carros, por exemplo), armazenar os carros em variáveis individuais pode ser assim </p>
        <br>

        <p class="p1">$cars[1] = "Volvo"; </p>

        <p class="p1">$cars[2] = "BMW"; </p>

        <p class="p1">$cars[3] = "Toyota";</p>
        <br>
        <hr />

        <p class="p2"> No entanto, e se você quiser percorrer os carros e encontrar um específico? E se você não tivesse 3 carros, mas 300?</p>
        <p class="p1">A solução é criar uma matriz! </p>
        <p class="p1">Uma matriz pode armazenar muitos valores com um único nome, e você pode acessar os valores consultando um número de índice. </p>
        <p class="p1"> </p>
        <br>
        <hr />





    </body>

</div>




<p> Fonte disponivel Array -
    <a href="https://www.w3schools.com/php/php_arrays.asp" target="_blank">aqui</a> </p>
<p>Todos os direitos reservados ®</p>

</html>
