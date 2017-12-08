<?php 
	include("bd.php");
	session_start();

	$nome = $_SESSION['nome'];
	$usuario = $_SESSION['usuario'];

	if(!isset($_SESSION['nome']) && !isset($_SESSION['usuario'])){
		header("Location: index.php");
	}

?>

<!doctype html>
	<link rel="stylesheet" href="main.css" >
	<style>
		#p{
			text-align: center;
		}
		
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
			background-color: #4CAF50;
			color: white;
		}

		li a:hover:not(.active) {
			background-color: #555;
			color: white;
		}
	</style>

<center>
	<html>
		<head>
			<title>Bem vindo <?php echo $nome;?></title>
			 <link href="bootstrap.min.css" rel="stylesheet">
			<link href="navbar-top-fixed.css" rel="stylesheet">
		</head>
		
		<body>
			
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<a class="navbar-brand" href="logado.php">Bem vindo <?php echo $nome;?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				 </button>

					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav mr-auto">
							 <li class="nav-item">
							 <a class="nav-link disabled" href="sair.php">Sair</a> 
							 </li>
						</ul>
					</div>
			</nav>	
			
			<div style="position: absolute; left: 43%; top: 100px">
				<ul>

					<li><nav id="side-menu"><a href="../html5/audio.php"><h2>Audio</h2></a><nav></li>
					<li><nav id="side-menu"><a href="csss.php"><h2>Cores</h2></a></nav></li>

				</ul>
			</div>
				
				<script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    			<script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
				<script src="popper.min.js"></script>
				<script src="bootstrap.min.js"></script>
				
		</body>
	
	</html>
</center>
