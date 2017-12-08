<!--
Wellinton Vieira
Programação para Internet I
 -->

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="../css/stylePage.css">
		<title>Principal</title>
		<title>Principal</title>
		<?php
			session_start();
			if((!isset ($_SESSION['usuario']) == true)){
				unset($_SESSION['usuario']);
				header('location:../index.php');
			}
		?>
	</head>
	<body>
		<div id="pagina">
			<section>
				<article>
					<img src="../images/ifsc.png" id="logo">
					<h1 id="titulo"><u>Cantos Arredondados e bordas com imagens</u></h1>
					<hr>
					<p>
						Antes do CSS3, para se criar bordas arredondadas era preciso escrever bastante código CSS e usar diversas imagens, mas com a chegava do novo CSS esse trabalho ficou muito mais fácil, em apenas três linhas é possível fazer um Box com cantos arredondados aparecer em todos os principais navegadores e ainda poder definir o quanto arredondado ficará a borda.
					</p>
					<h1 id="subtitulo"><u>Exemplo de código</u></h1>
					<img src="../images/html_img3.png" id="exemplo">
				</article>
				<hr>

				<article>
					<h1 id="subtitulo"><u>Lista com prefixo de cada navegador</u></h1>
						<p>
							Mozilla Firefox: -moz-<br>
							Google Chrome e Safari: -webkit-<br>
							Opera: -o-<br>
							Internet Explorer: -ms-
						</p>
						<hr>

						<div id="botao">
							<button class="botao" onclick="clique()" title="Clique aqui para ver um javascript em ação">
								Clique aqui!
							</button>
						</div><br>

					<fieldset class="exemploCodigo">
						<u>Código utilizado no botão</u><br><br>
						cursor: pointer;<br>
					 	font-size: 16px;<br>
						width:200px;<br>
						height:50px;<br>
						border-radius: 10px;<br>
						-moz-border-radius: 10px;<br>
						-webkit-border-radius: 10px;<br>
					  	background-color: rgb(140, 198, 63);<br>
					</fieldset><br>
				</article>

				<article>
					<div class="zoom">
						<img src="../images/paisagem.jpg" title="Saiba mais em w3schools.com">
					</div>

					<script>
						function clique(){
							alert("Fui clicado :)");
						}
					</script>
					<hr>
						<p id="centro">
							<u>Referência</u><br>
							<a href="https://www.w3schools.com/" target="_blank">
							<img src="../images/w3schools.png" target="_blank" title="https://www.w3schools.com/"></a>
						</p>
				</article>
			</section>
		</div>
	</body>
</html>
