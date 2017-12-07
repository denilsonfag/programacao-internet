<!-- 
Wellinton Vieira
Programação para Internet I
 -->
 
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="css/style.css" >
	    <script type="text/javascript" src="js/global.js"></script>
		<title>Principal</title>
		<?php  
			session_start();
			if((!isset ($_SESSION['usuario']) == true)){
				unset($_SESSION['usuario']);
				header('location:index.php');
			}
			$usuario = $_SESSION['usuario'];
		?>
	</head>
	<body>
		<div class="mainPage">
			<figure>
				<img src="images/user.png">
			</figure>
				<p>
					<?php echo "Seja bem vindo $usuario"; ?>
				</p>
			<header class="mainPageHeader">
				<button class="mainPageHeaderButton">
					<a href="arquivos/elementos-comuns.php" target="iframe">HTML</a>
				</button>
				<button class="mainPageHeaderButton">
					<a href="arquivos/cantos-arredondados-&-bordas-&-imagens.php" target="iframe">CSS</a>
				</button>
				<button class="mainPageHeaderButton">
					<a href="arquivos/tipos_de_dados_php.php" target="iframe">PHP</a>
				</button>
				<button class="mainPageHeaderButton">
					<?php  
					echo '<a href="logout.php?token='.md5(session_id()).'">SAIR</a>';
					?>
				</button>
			</header>
			<hr>
			<iframe src="arquivos/elementos-comuns.php" name="iframe" id="iframePage"></iframe>
			<hr>
			<footer class="mainPageFooter">
				<p>Copyright &copy; 2017 Wellinton Vieira. Todos os direitos reservados.</p>
			</footer>
		</div>
	</body>
</html>