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
<html>
<head>
	<meta charset="utf-8">
        <title>Backgrounds</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/backgrounds.css" >
</head>
<body>
 	<div class="main">
 		<a href="homepage.php" class="btn">Voltar a Página Inicial</a>
 		<h1>Backgrounds CSS</h1>

			<p>As propriedades de <strong>Background em CSS</strong> são utilizadas para definir efeitos para os elementos.</p>

		<h2>Propriedades de background do CSS: </h2>
 		
 		<h2>Cor</h2>

			<p>A propriedade background-color especifica a cor de fundo de um elemento, conforme exemplo abaixo: </p>

			<p class="color">background-color: lightblue</p>

			<p>Com CSS, uma cor é mais frequentemente especificada por:</p>

				<ul>
					<li>Um nome de cor válido - como 'red' (Sempre em inglês.)</li>
					<li>Um valor HEX - como '#ff0000'</li>
					<li>Um valor RGB - como 'rgb (255,0,0)'</li>
				</ul>

		<h2>Imagem de Fundo</h2>

		<p>A propriedade <em>background-image</em> especifica uma imagem a ser usada como o plano de fundo de um elemento. Por padrão, a imagem é repetida, portanto cobre todo o elemento. Um exemplo abaixo com imagem:</p>

			<p class="imagens">background-image: url("papel.gif");</p>


		<h2>Maneiras de se posicionar a imagem de fundo</h2>

			<p>Quando queremos que uma imagem de fundo seja posicionada de forma diferente na página, utilizamos <strong>background-repeat.</strong></p>

			<p>As maneiras de se fazer são:</p>

				<ul>
					<li>Imagem não repete: <strong>no-repeat</strong></li>
					<li>Imagem repete na vertical e horizontal: <strong>repeat</strong></li>
					<li>Imagem repete na vertical: <strong>repeat-y</strong></li>
					<li>Imagem repete na horizontal: <strong>repeat-x</strong></li>
					<li>Imagem toca as quatro bordas internas do box e são espaçadas de modo a se distribuirem igualmente: <strong>space</strong></li>
					<li>Imagem toca as quatro bordas internas do box e são redimensionadas de modo a preencherem o fundo tocando umas nas outras: <strong>round</strong></li>
				</ul>

		<p>Os trechos de códigos abaixo representam como utilizar as propriedades repeat-x, repeat-y e position:</p>

			<p><strong>repeat-x:</strong></p>
				
				<div class="repeat">
				&lt;head&gt; <br/>
				&lt;style rel=&quot;stylesheet&quot;&gt;/&gt;<br/>
				body { <br/>
				background-image: url(&quot;./img/iconcss2.png.png&quot;); <br/>
				background-repeat: repeat-x; <br/>
				} <br/>
				&lt;/style&gt; <br/>
				&lt;/head&gt; <br/>
				&lt;body&gt; <br/>
				&lt;/body&gt; <br/>
				&lt;/html&gt; <br/>
				<br/>
				</div>

			<p><strong>Este é o efeito do texto acima: </strong></p>

			<div class="repeat" style="background-image: url(imgs/cssimage.png); height: 200px"></div>

			<p><strong>repeat-y:</strong></p>
	
				&lt;head&gt; <br/>
				&lt;style rel=&quot;stylesheet&quot;&gt;/&gt;<br/>
				body { <br/>
				background-image: url(&quot;./img/iconcss2.png.png&quot;); <br/>
				background-repeat: repeat-y; <br/>
				} <br/>
				&lt;/style&gt; <br/>
				&lt;/head&gt; <br/>
				&lt;body&gt; <br/>
				&lt;/body&gt; <br/>
				&lt;/html&gt; <br/>
				<br/>

			<p><strong>Este é o efeito do texto acima: </strong></p>

			<div class="repeat" style="background-image: url(imgs/iconcss2.png);background-repeat: repeat-y; height: 200px"></div>

			<p><strong>position:</strong></p>
	
				&lt;head&gt; <br/>
				&lt;style rel=&quot;stylesheet&quot;&gt;/&gt;<br/>
				body { <br/>
				background-image: url(&quot;./img/iconcss2.png.png&quot;); <br/>
				background-repeat: no-repeat; <br/>
				background-position: 200px 70px; <br/>
				} <br/>
				&lt;/style&gt; <br/>
				&lt;/head&gt; <br/>
				&lt;body&gt; <br/>
				&lt;/body&gt; <br/>
				&lt;/html&gt; <br/>
				<br/>

			<p><strong>Este é o efeito do texto acima: </strong></p>

			<div class="repeat" style="background-image: url(imgs/iconcss2.png);background-repeat: no-repeat; background-position: 200px 70px; height: 200px"></div>

			<p>Fontes:</p>

			<tr>
				<td><img src="imgs/caelum.png" width="20%">
				<td><img src="imgs/major.png" width="20%">
			</tr>
 	</div>
</body>
</html>