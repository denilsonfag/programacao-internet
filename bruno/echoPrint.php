<!--
Autor: Bruno dos Anjos
Data: 27/10/2017 - 21:44
  -->
<?php
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Echo e Print - PHP</title>
    <link rel="stylesheet" href="../styles/main.css">
    <style>
        * {
            font-family: sans-serif;
        }

        pre {
            background-color: #ededed;
            padding: 10px;
            align-content: center;
            border-color: black;
            line-height: 20px;
        }

        div h1,
        div h2 {
            text-align: center;
            background-color: #e88d1e;
            color: white;
            padding: 4px;
        }

        h3{
            font-size: 20px;
        }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>
   <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" >Programação WEB</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="unidadesMedida.php">Unidades de Medida</a></li>
                <li><a href="tabelas.php">Tabelas</a></li>
                <li class="active"><a href="#">Echo e Print</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href=""><span class="glyphicon glyphicon-user"></span>
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

    <div id="interface">
        <h1>Echo e Print em PHP</h1>
        <p>Echo e print tem são bem parecidas e servem para mostrar informações na tela.</p>
        <h3>Exemplo de Echo:</h3>
        <pre>&lt;?php
        echo "Hello world!&lt;br&gt;";
        echo "Esta ", "string ", "foi ", "feita ", "com varios parametros&lt;br&gt;";

        //É possivel imprimir valores de variaveis ou retornos de funções:

        $teste = 0;

        echo "O valor de teste é: $teste&lt;br&gt;";
        echo "Podemos concatenar strings" . " Teste = $teste&lt;br&gt;";
?&gt;</pre>

      <h3>O resultado seria:</h3>

      <?php

        echo "Hello world!<br>";
        echo "Esta ", "string ", "foi ", "feita ", "com varios parametros<br>";

        //É possivel imprimir valores de variaveis ou retornos de funções:

        $teste = 0;

        echo "O valor de teste é: $teste<br>";
        echo "Podemos concatenar strings" . " Teste = $teste<br>";

?>

  <h3>Exemplo de print:</h3>
   <pre>&lt;?php
        print "Hello world!&lt;br&gt;";
        print "Esta ", "string ", "foi ", "feita ", "com varios parametros&lt;br&gt;";

        //É possivel imprimir valores de variaveis ou retornos de funções:

        $teste = 0;

        print "O valor de teste é: $teste&lt;br&gt;";
        print "Podemos concatenar strings" . " Teste = $teste&lt;br&gt;";

?&gt;</pre>

       <h3>O resultado:</h3>

       <?php
        print "Hello world!<br>";
        //É possivel imprimir valores de variaveis ou retornos de funções:

        $teste = 0;

        print "O valor de teste é: $teste<br>";
        print "Podemos concatenar strings" . " Teste = $teste<br>";

?>

    <h2>E qual seria a diferença?</h2>

    <p>Eles são muito parecidos, o que podemos citar de diferenças:</p>
    <h3>Print</h3>
    <ul>
        <li>Retorna 1 como resultado e pode ser usada em expressões</li>
    </ul>

    <h3>Echo</h3>
    <ul>
        <li>Retorna void como resultado e não pode ser usada em expressões</li>
        <li>É possível passar vários argumentos que devem ser impressos separados por vírgula</li>
    </ul>

    <h2>Retorno da função Print</h2>

    <p>Como descrito anteriormente, a função print retorna o valor 1, então, podemos salvar e utilizar esse valor, confira o exemplo:</p>

    <pre>&lt;?php
        $teste = 0;

        echo "O valor de teste é: $teste&lt;br&gt;";
        $teste = print "O valor de teste foi alterado&lt;br&gt;";
        echo "O valor de teste é: $teste&lt;br&gt;";
?&gt;</pre>

   <h3>O resultado:</h3>

   <?php
        $teste = 0;

        echo "O valor de teste é: $teste<br>";
        $teste = print "O valor de teste foi alterado<br>";
        echo "O valor de teste é: $teste<br>";
?>

   <p>Geralmente o comando echo é mais utilizado que o comando print</p>

<footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>


</body>

</html>
