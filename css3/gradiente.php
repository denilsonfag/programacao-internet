<?php 

session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
    echo"<script language='javascript' type='text/javascript'>alert('Erro: Esse login ja está em uso');window.location.href='index.php';</script>";
    header('Location: index.php');

}




 ?>

 <!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>


	<link rel="stylesheet" href="../mateusm/css/logout.css" >
	<link rel="stylesheet" href="AvaliacaoCSS.css" class="AvaliacaoCSS">

	<div id="interface">
        <header id="page-header"><div id="logout">
                <?php 
                echo "Bem Vindo " . $_SESSION['login'];
                 ?>
                <form action="../mateusm/logout.php" method="post" class="form-logout"> 
                <button type="submit" class="btn btn-lg btn-primary btn-block">Logout</button> 
             </form>
            <?php include '../page-header.html'; ?>


            </div>

	<title>Efeito Gradiente em CSS</title>
</head>
<body>

<div id="pagina">
		<h1> Efeito Gradiente em CSS </h1>


<<<<<<< HEAD
	CSS3 Graduais Lineares
	<h4>
	Primeiramente a vamos analisar como colocar as cores no CSS, assim iremos entender e poder utilizar corretamente as funções para criar o gradiente.


	Para criar um gradiente linear, você deve definir pelo menos duas paradas de cores. As paradas de cores são as cores das quais você deseja renderizar transições suaves entre elas. Você também pode definir um ponto de partida e uma direção (ou um ângulo) juntamente com o efeito de gradiente.</h4>

		<div id="gradiente">


		</div>
=======
	
	<h4>
	Primeiramente vamos analisar como colocar as cores no CSS, assim iremos entender e poder utilizar corretamente as funções para criar o gradiente.

	Iremos apenas pintar o fundo de vermelho usando 'background' dessa forma

	<div id="back">
	background-color: red;
	<h1>VERMELHO</h1>
	</div>

	Assim deixamos unicamente uma cor para o fundo, nesse casso só foi selecionado uma parte da pagina para exemplo, o mesmo pode ser usado para outras cores.

	Agora para usar uma mistura de cores (gradiente) não é tão simples e é necessário o navegador de quem está acessando suportar, que pode ser encontrar no link para verificar se seu navegador suporta "link".

	</h4>
	<h1>GRADIENTE LINEAR</h1>
	<h4>
	Vamos começar pelo Gradiete Linear, sua syntax é no caso o 'background:' ai a palavra chave para a função 'linear-gradient' ai só colocar a forma que deseja ele.

	Vamos para um exemplo simples:

	<div id=gradiente1>
	background: linear-gradient(red, yellow);

			<h1>Começa vermelho e termina amarelo.</h1>
	</div> 
	</br>
	E podemos fazer com varias cores, lembrando que a sequencia sempre é a mesma que foi colocada no parenteses da função
	</br>

	<div id=gradiente2>
	background: linear-gradient(red, yellow, pink, green);

			<h1>Vermelho, amarelo e verde.</h1>
	</div> 

	</h4>

	<h1>GRADIENTE LINEAR DIAGONAL</h1>

	<h4>
	</br>
	Unica diferença que ela começa do canto que você escolher exemplo.
	</br>
	<div id=gradiente3>
	background: linear-gradient(to bottom right, red, yellow);
	

			<h1>Vermelho e amarelo.</h1>
	</div> 

	<h1>GRADIENTE COM TRANSPARENCIA</h1>

	<h4>
		CSS3 suporta transparência que podem ser usadas para criar efeitos. </br>
		Para adicionar transparência, usa a função rgba() para definir as paradas de cores.</br>
	<div id=gradienteTranparencia>
		background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
	</div>

	</h4>

	<h1>Gradiente Radial</h1>

	<h4>Um gradiente radial as cores definidas vem do centro para borda, então se a primeira cor é vermelha o centro será vermelho e para funcionar corretamente deve haver no minimo duas cores. 

	

	<div id=gradienteRadial>

	background: radial-gradient(red, yellow, green);
	</div>
		</h4>
>>>>>>> fefbafed274feae48c032e27bcf08442899b8008



</div>


</body>
</html>