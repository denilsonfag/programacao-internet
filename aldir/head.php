<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <title>HTML 5</title>
</head>

<style>

     #interface{
         display: flex;
         flex-flow: row wrap;
     }
     #interface > * {
         border: 1px solid;
         flex: 1 100%;

     }

     @media all and (min-width: 800px){
         #side-menu{

             flex: 1;
             order: 1;
         }
         #artigo{

             flex: 4;
             order: 3;

         }
         #page-footer{
             order: 3;
         }

     }
        h1 {
            text-align: center;
            font-size: 20px;
            background-color: black;
            color: white;
        }

        p {
            text-align: center;
            line-height: 15px;
        }

        .p1 {
            text-align: justify;
            line-height: 15px;
        }

    </style>


<body>


   <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" >Programação WEB</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="head.php">Head</a></li>
                <li><a href="border-outline.php">Border</a></li>
                <li class="active"><a href="#">Array</a></li>
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




    <div id="interface">


        <article id = "artigo">
            <h1>
            <b>HTML5 - Elementos header e hgroup</b>
        </h1>
        <p class="p1">O elemento header é um bloco de conteúdo que pode conter um ou mais elementos h1 até, h6, campo de busca, elementos de navegação, um logo ou banner, uma introdução, um pequeno prefácio ou um índice em formato de lista. Normalmente trabalha como um agregador do conteúdo do cabeçalho de um documento ou de uma seção. Dentro dele é possível inserir um elemento hgroup que tem como função agrupar dois ou mais elementos h1 até, h6 organizando-os em uma hierarquia de títulos e subtítulos.</p>
        <hr />

        <h1> Como cabeçalho principal do documento </h1>
        <p> &lt;Header></p>
        <p> &lt;H1> Titulo &lt;/H1> </p>
        <p> &lt;/Header></p>
        <hr />

        <h1> Como cabeçalho de um artigo ou seção </h1>
        <p> &lt;article> </p>
        <p> &lt;header> </p>
        <p> &lt;h1> Trompete&lt;/h1></p>
        <p> &lt;/header> </p>
        <p> &lt;p> O &lt;b> Trompete &lt;/b> é um instrumento de sopro de metal cuja ... &lt;/p> </p>
        <hr />

        <h1>Como cabeçalho principal do documento incluindo um bloco hgroup com um título e subtítulo (descrição) de um blog</h1>

        <p> &lt;header> </p>
        <p> &lt;hgroup> </p>
        <p> &lt;h1>Os metais&lt;/h1></p>
        <p> &lt;h2>O blog de que não tem medo de tocar forte !&lt;/h2> </p>
        <p> &lt;/hgroup></p>
        <p> &lt;/header></p>


        <hr />
        <h1>Title</h1>
        <p class="p1">
            O elemento HTML &lt;title> (Elemento HTML Título) define o título do documento, mostrado na barra de título de um navegador ou na aba da página. Pode conter somente texto e quisquer marcações contidas no texto não são interpretadas.
        </p>


        <hr />
        <h1>Style</h1>
        <p class="p1">
            O elemento HTML &lt;style> contém informações de estilo para um documento ou uma parte do documento. As informações de estilo específico estão contidas dentro deste elemento, geralmente no CSS.
        </p>


        <hr />
        <h1>Link</h1>
        <p class="p1">
            O elemento âncora, definido pelo tag &lt;a>, é essência da linguagem HTML, pois é a marca que indica o destino de um link de hipertexto.
        </p>


        <hr />
        <h1>Meta</h1>
        <p class="p1">
            Meta tags são linhas de código HTML ou "etiquetas" que, entre outras coisas, descrevem o conteúdo do seu site para os buscadores. É nelas que você vai inserir as palavras-chave que facilitarão a vida do usuário na hora de te encontrar, por exemplo.
        </p>


        <hr />
        <h1>Script</h1>
        <p class="p1">
            Como javascript é a linguagem padrão em praticamente todos os navegadores, muitas vezes o programador utiliza apenas &lt;script> ao invés de &lt;script type="text/javascript">. Outro atributo da tag "script" é o "language" que é considerado obsoleto (deprecated) na especificação do HTML 4.01.
        </p>

        <hr />
        <h1>Base</h1>
        <p class="p1">
            O elemento HTML Base (&lt;base>) especifica o endereço (URL) utilizada por todos os enderços relativos contidos dentro de um documento.
        </p>

        </article>


    </div>
</body>
</html>
