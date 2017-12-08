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
		
		   side-menu, main, article, header, section, aside, footer, .article-body {
             flex: 1 100%;
             }
		  
		   #interface{
			 display: flex;
             flex-flow: row wrap;
		     }
		  
		  
		   #sidebar nav ul li{
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
				  <a class="navbar-brand" href="#">Cores</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				  </button>
			   
			  <div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">	
						  <li class="nav-item active">
						  <a class="nav-link" href="../html5/audio.php">Audio <span class="sr-only">(current)</span></a>
						  </li>
						  <li class="nav-item">
						  <a class="nav-link" href="logado.php">Início</a></li>
						  <li class="nav-item">
						  <a class="nav-link" href="index.php">Voltar</a>
						  </li>
						  <li class="nav-item active">
						  <a class="nav-link" href="../gabriel/rgb.php">Próximo <span class="sr-only">(current)</span></a>
						  </li>
					</ul>
			  </div>
			</nav>
			
		<div id="interface"> 
			<article>
				<header>
					<h1 class="centralizado">&nbsp;</h1>
					<h1 class="centralizado">Trabalho CSS</h1>
					<h3 class="centralizado">Cores e Transparência</h3>
			    </header>
			 <main>
					<p>Nesse trabalho vamos ver como mudar as cores de textos, ver exemploes de valores de cores em RGB,HEX,HSL, como usar transparência, como colocar borda.</p>
			  		<p>No HTML é suportado 140 nomes de cores, podemos definir cores de fundo para o HTML </p> 	
			  	<ul>
					<li><nav id="side-menu"><a href="../gabriel/rgb.php"><h4>RGB</h4></a><nav></li>
					<li><nav id="side-menu"><a href="../gabriel/HEX.php"><h4>HEX</h4></a><nav></li>		<li><nav id="side-menu"><a href="../gabriel/borda.php"><h4>Borda</h4></a><nav></li>
					<li><nav id="side-menu"><a href="../gabriel/HSL.php"><h4>HSL</h4</a><nav></li>
					<li><nav id="side-menu"><a href="../gabriel/Tranparencia.php"><h4>Tranparência<h4></a><nav></li>
				</ul>
			  </main>
			</article>
						
			<script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="../gabriel/jquery.min.js"><\/script>')</script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/popper.min.js"></script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/bootstrap.min.js"></script>
							
		</body>
</html>
