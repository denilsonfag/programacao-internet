<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >

    <style>

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 200px;
		}

		li a {
			display: block;
			color: #030022;
			padding: 8px 16px;
			text-decoration: none;
		}

		li a.active {
    		background-color: #050039;
    		color: #FF0004;
		}

		li a:hover:not(.active) {
  		    background-color: #600001;
    		color: #FFFFFF;
		}



    	li page-footer-c  {
			display: inline-block;
			color: #030022;
			padding: 8px 16px;
			text-decoration: none;
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

	    	h1,h2,h4{
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
                #artigo-c{
                    flex: 5;
                    order: 1;
                }

			    #side-menu-c {
                flex: 2;
               		order: 1;
                }

			    #page-footer-c{
                	order:2;
                }
            }


	</style>


		<title>CSS 3</title>
	</head>
	<body>
    	<div id="interface">
        	<header id="page-header">
            	<?php include '../page-header.html'; ?>
       	 	</header>

			<article>
				<br/>
				<h2 class="pcenter">CSS 3</h2>
				<br>
			</article>

			<nav id="side-menu-c">
				<?php include 'side-menu-c.html'; ?>
			</nav>



			<article id=artigo-c>
					<header>
						<h1 class="centralizado">Trabalho CSS</h1>

						<h3 class="centralizado">Cores e Transparência</h3>
					</header>

		  		<main>
						<p>Nesse trabalho vamos ver como mudar as cores de textos, ver exemploes de valores de cores em RGB,HEX,HSL, como usar transparência, como colocar borda.</p>
						<p>No HTML é suportado 140 nomes de cores, podemos definir cores de fundo para o HTML </p>
			  		<ul>
						<p> <li><a href="../css3/cores/Tranparencia.html"> Cores de fundo nos textos e Tranparência </a></li><li><a href="../css3/cores/RGB.html">RGB</a></li><li><a href="../css3/cores/HEX.html">HEX </a></li><li><a href="../css3/cores/HSL.html">HSL </a></li><li><a href="../css3/cores/borda.html">Borda </li></a></p>
				    </ul>
		   		 </main>
			 </article>

			<footer id="page-footer-c">
				<?php include '../page-footer.html'; ?>
			</footer>

			<h4>Aluno: Gabriel Moreschi</h4>
		</div>

	</body>
</html>
