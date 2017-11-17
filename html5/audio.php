<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../styles/main.css" >
		<title id=titulo>HTML 5</title>
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
	
			main,audio{
			  margin-top: 2em;
			  flex: 1;
		     }
		
		  	#side-menu{
			   flex: 1;	  
		    }
		  
		   @media all and (min-width: 800px) {
                #artigo{
                    flex: 5;
                    order: 1;
                   }
                #side-menu {
                    flex: 2;
                    order: 1;
                   }
                #page-footer{
                    order:2;
               	   }
            	}
		  
		  
		</style>
	</head>
	

		<body>
    		<div id="interface">
				<header id="page-header" >
					<?php include '../page-header.html'; ?>
				</header>

				<nav id="side-menu">
					<?php include 'side-menu-h.html'; ?>
				</nav>

        		<article id=artigo>
						<header>
							<h1 class="centralizado">Trabalho Audio</h1>
							<h3 class="centralizado">Ouvindo Música pelo Navegador</h3>
						</header>

			  		<main>
						<p>Nesse trabalho vamos ver como colocar audio em uma pagina html.</p>
						<p>Foi usado o comando 'audio controls' e dentro dele foi colocado o diretorio do audio para poder ser reproduzido.</p>
						<p>Se caso o navegador não der suporte ao arquivo de audio aparecerá a seguinte mensagem "Your browser does not support the audio element."</p>
						<p>Os formatos de audio suportados são "MP3", "Wav" e "Ogg".</p>
						<p>Os principais navegadores tem suporte para MP3, apenas o Internet Explorer não tem suporte para Wav e o Ogg e apenas o Safari para o Ogg.</p>

						<audio controls>
							<source src="../audios/audio2.mp3" type="audio/mpeg">
						</audio>
						<audio controls>
							<source src="../audios/audio3.mp3" type="audio/mpeg">
						</audio>
						<audio controls>
							<source src="../audios/aplausos.mp3" type="audio/mpeg">
						</audio>
					</main>
        		</article>

        		<footer id="page-footer">
            		<?php include '../page-footer.html'; ?>
        		</footer>
    		</div>
		</body>
</html>
