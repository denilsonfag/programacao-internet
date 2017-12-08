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
				  <a class="navbar-brand" href="#">RGB</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item active">
						     <a class="nav-link" href="logado.php">Início<span class="sr-only">(current)</span></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="../gabriel/csss.php">Voltar</a>
							  <li class="nav-item active">
								<a class="nav-link" href="../gabriel/HEX.php">Próximo <span class="sr-only">(current)</span></a>
						     </li>
						  </li>
						</ul>
				  </div>
   		   </nav>
			
			
    		<div id="interface">
			  <article>
				<header>
					<h1 class="centralizado">&nbsp;</h1>
					<h1 class="centralizado">RGB</h1>
				</header>
		         <main>
			      <p> -> O significafo de RGB é Red,Green, Blue, que é vermelho, Verde e Azul.</p>
			      
				  <h3 style="background-color:rgba(255,0,4,1.00);"> Usando: rgb(255, 0, 4)</h3>
				  <h3 style="background-color:rgba(29,177,0,1.00);">Usando: rgb(29, 177, 0) </h3>
				  <h3 style="background-color:rgba(26,0,198,1.00);">Usando: rgb(26, 0, 198)</h3>
				  
				  <p>No HTML é possível fazer varias combinações usando o RGB </p>
				  
				  <p style="background-color:rgb(255, 0, 0);">rgb(255, 0, 0)</p>
				  <p style="background-color:rgb(0, 0, 255);">rgb(0, 0, 255)</p>
				  <p style="background-color:rgb(60, 179, 113);">rgb(60, 179, 113)</p>
				  <p style="background-color:rgb(238, 130, 238);">rgb(238, 130, 238)</p>
				  <p style="background-color:rgb(255, 165, 0);">rgb(255, 165, 0)</p>
				  <p style="background-color:rgb(106, 90, 205);">rgb(106, 90, 205)</p>
				  <p>Ao usar valores iguais para vermelho, verde e azul, você terá diferentes tons de cinza</p>
				  <p style="background-color:rgb(0, 0, 0);">rgb(0, 0, 0)</p>
				  <p style="background-color:rgb(60, 60, 60);">rgb(60, 60, 60)</p>
				  <p style="background-color:rgb(120, 120, 120);">rgb(120, 120, 120)</p>
				  <p style="background-color:rgb(180, 180, 180);">rgb(180, 180, 180)</p>
			    </main>
			  </article>
    		</div>
			
			<script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="../gabriel/jquery.min.js"><\/script>')</script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/popper.min.js"></script>
			<script src="file:///C|/xampp/htdocs/programacao-internet/html5/bootstrap.min.js"></script>
		</body>
</html>
