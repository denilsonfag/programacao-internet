<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="file:///C|/xampp/htdocs/programacao-internet/styles/main.css" >
		<title id=titulo>CSS</title>
		<link href="bootstrap.min.css" rel="stylesheet">
    	<link href="navbar-top-fixed.css" rel="stylesheet">
		<style>
  
		  ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 200px;			  
			}

		  li a {
			display: block;
			color: #000;
			padding: 8px 16px;
			text-decoration: none;
			}

		  li a.active {
		   	 background-color: #000600;
		     color: #FF0004;
			}

		  li a:hover:not(.active) {
			 background-color: #555;
			 color: white;
			} 
		  
		  *{
			 font-family: Consolas, "monospace";
			 background-color: #8A8A8A;
		     }
		
		   
		  
		   #interface{
			 display: flex;
             flex-flow: row wrap;
		     }
		  
		  
		   #nav ul li{
              display: inline;
             }
		  
		  #interface > *, .article-container > * {
			 border: 1px solid;
             flex: 2 100%;
            }
		
		  .centralizado{
		     text-align: center;
			} 
		
			h1,h4{
			  color:#050039
			}
		
			p,h3{
			  color:#FBFBFB;
			}
		</style>
	
	</head>
	

		<body>
			
		  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			  <a class="navbar-brand" href="#">HSL</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			  </button>
			  
			  <div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
				   <a class="nav-link" href="logado.php">Início<span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="../gabriel/borda.php">Voltar</a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="../gabriel/Tranparencia.php">Próximo <span class="sr-only">(current)</span></a>
				  </li>
				</ul>
			  </div>
		</nav>

		<div id="interface">
				<article>
					<header>
						<h1 class="centralizado">&nbsp;</h1>
						<h1 class="centralizado">HSL - (<EM>hue</EM>, <EM>saturation</EM>, <EM>lightness</EM>)</h1>
					</header>
				    <main>
					   <p> -> Em HTML, uma cor pode ser especificada usando tonalidade, saturação e luminosidade, em inglês hue, saturation, lightness (HSL).</p>
					   <h2 class="centralizado">Tonalidade (Hue)</h2>
					   <p>-> Hue é um grau na roda de cores de 0 a 360. 0 é vermelho, 120 é verde e 240 é azul.
						A saturação é um valor percentual, 0% significa um tom de cinza e 100% é a cor completa.
						A leveza também é uma porcentagem, 0% é preto, 50% não é claro ou escuro, 100% é branco.</p>
					   <h3 style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</h3>
					   <h3 style="background-color:hsl(240, 100%, 50%);">hsl(240, 100%, 50%)</h3>
					   <h3 style="background-color:hsl(180, 50%, 40%);">hsl(180, 50%, 40%)</h3>
					   <h3 style="background-color:hsl(300, 76%, 72%);">hsl(300, 76%, 72%)</h3>
					   <h3 style="background-color:hsl(39, 100%, 50%);">hsl(39, 100%, 50%)</h3>
					   <h3 style="background-color:hsl(248, 53%, 58%);">hsl(248, 53%, 58%)</h3>
					   <h2 class="centralizado">Saturação (<EM>saturation</EM>)</h2>
					   <p>A saturação pode ser descrita como a intensidade de uma cor.
						100% é cor pura, sem tons de cinza,
						50% é cinza, mas você ainda pode ver a cor.
						0% é completamente cinza, você não pode mais ver a cor.</p>
					    <h3 style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</h3>
						<h3 style="background-color:hsl(0, 80%, 50%);">hsl(0, 80%, 50%)</h3>
						<h3 style="background-color:hsl(0, 60%, 50%);">hsl(0, 60%, 50%)</h3>
						<h3 style="background-color:hsl(0, 40%, 50%);">hsl(0, 40%, 50%)</h3>
						<h3 style="background-color:hsl(0, 20%, 50%);">hsl(0, 20%, 50%)</h3>
						<h3 style="background-color:hsl(0, 0%, 50%);">hsl(0, 0%, 50%)</h3>
						<p>Com cores HSL, menos saturação significa menos cor. 0% é completamente cinza.</p>
						<h2 class="centralizado">Luminosidade (<EM>lightness</EM>)</h2>
						<p>A luminosidade de uma cor pode ser descrita como a quantidade de luz que você quer dar a cor, onde 0% significa sem luz (preto), 50% significa luz 50% (nem escura nem luz) 100% significa brilho total </p>
						<h3 style="background-color:hsl(0, 100%, 0%);">hsl(0, 100%, 0%)</h3>
						<h3 style="background-color:hsl(0, 100%, 25%);">hsl(0, 100%, 25%)</h3>
						<h3 style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</h3>
						<h3 style="background-color:hsl(0, 100%, 75%);">hsl(0, 100%, 75%)</h3>
						<h3 style="background-color:hsl(0, 100%, 90%);">hsl(0, 100%, 90%)</h3>
						<p>As máscaras de cinza são muitas vezes definidas definindo a tonalidade e a saturação para 0, e ajustar a leveza de 0% a 100% para obter tons mais escuros ou mais claros:</p>
						<h3 style="background-color:hsl(0, 0%, 0%);">hsl(0, 0%, 0%)</h3>
						<h3 style="background-color:hsl(0, 0%, 24%);">hsl(0, 0%, 24%)</h3>
						<h3 style="background-color:hsl(0, 0%, 47%);">hsl(0, 0%, 47%)</h3>
						<h3 style="background-color:hsl(0, 0%, 71%);">hsl(0, 0%, 71%)</h3>
				  </main>
				</article>
    		</div>
			
			<script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="../gabriel/jquery.min.js"><\/script>')</script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/popper.min.js"></script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/bootstrap.min.js"></script>
	</body>
</html>
