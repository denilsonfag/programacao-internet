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
				  <a class="navbar-brand" href="#">Transparência</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				  </button>
			   
			    <div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
					   <a class="nav-link" href="logado.php">Início<span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="../gabriel/csss.php">Cores <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="../gabriel/HSL.php">Voltar</a>
					  </li>
					</ul>
			  </div>
			</nav>
			
    		<div id="interface">
				<article>
					<header>
						<h1 class="centralizado">&nbsp;</h1>
						<h1 class="centralizado">Cores: Valores e Transparência</h1>
					</header>
				    <main>
					  <p style="background-color:rgba(16,36,66,1.00);"> -> Em HTML podemos colocar uma cor de fundo nos textos com o comando style="background-color:"cor escolhida".</p>
					  <p> -> Em HTML, as cores também podem ser especificadas usando valores RGB, valores HEX, valores HSL, valores RGBA e valores HSLA:</p>
					  <h2 style="background-color:rgb(00, 00, 00);"> Usando: rgb(0, 0, 0)</h2>
					  <h3 style="background-color:#FF0000;">		   Usando Valores HEX: #FF0000 </h3>
					  <h4 style="background-color:hsla(58,100%,55%,1.00);"> Usando hsla(9, 100%, 64%)</h4>
					  <h2 class="centralizado">Transparência</h2>
					  <p>Para colocar tranparência nas cores de fundo basta colocar ,"0.5" ou a quantidade de transparência que desejar no final de cada valor.</p>
					  <h2 style="background-color:rgba(0,0,0,0.2);"> Usando: rgb(0, 0, 0, 0.2)</h2>
					  <h3 style="background-color:rgba(255,0,4,0.68);"> Usando: rgb(0, 0, 0, 0.68)</h3>
					  <h4 style="background-color:hsla(59, 100%, 55%, 0.4);">Usando hsla(59, 100%, 55%, 0.4)</h4>
				    </main>
			  </article>
    		</div>
			
			
			<script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="../gabriel/jquery.min.js"><\/script>')</script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/popper.min.js"></script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/bootstrap.min.js"></script>
	</body>
</html>
