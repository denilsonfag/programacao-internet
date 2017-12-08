<?php
	include_once("bd.php");
	
	@session_start();

	if(isset($_SESSION['nome']) && isset($_SESSION['usuario'])){
		header('Location: logado.php');
		exit;
	}

?>


<html>
	<head>
		<title>Login</title>
	</head>

	<body>
   		 <link href="login css/bootstrap.min.css" rel="stylesheet">
    	 <link href="login css/signin.css" rel="stylesheet">
	
	<center>
		<div id="login" style="width: 200px;">
		<h1>Entrar</h1>
			<link href="bootstrap.min.css" rel="stylesheet">
			<link href="navbar-top-fixed.css" rel="stylesheet">
			
			<form action="" method="POST" enctype="multipart/form-data">
				
				<h1><input type="text" name="usuario" id="usuario" placeholder="Usuário" class="form form-control"></h1>
				<h1><input type="password" name="senha" id="senha" placeholder="*********" class="form form-control"></h1>
				<h1><input type="submit" class="btn btn-success" style="width: 120px;" value="Entrar" /></h1>
				<input type="hidden" name="entrar" value="login">
				<a href="cadastro.php" class="btn btn-info"><h4>Cadastrar</h4></a>
			
			</form>
		</div>
	</center>

		<?php
			if(isset($_SESSION['nome']) && isset($_SESSION['usuario'])){
				header('Location: index.php?pagina=logado');
				exit;
			}

			if(isset($_POST['entrar']) && $_POST['entrar'] == "login"){
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];

				if(empty($usuario) || empty($senha)){
					echo 'Preencha todos os campos!';
				}else{
					$con = conexao();
					$query = "SELECT nome, usuario, senha FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
					$result = mysqli_query($con, $query);
					$busca = mysqli_num_rows($result);
					$linha = mysqli_fetch_assoc($result);

					
					
					if($busca > 0){
						$_SESSION['nome'] = $linha['nome'];
						$_SESSION['usuario'] = $linha['usuario'];
						header('Location: ?pagina=logado');
						exit;
					}else{
						echo 'Usuário ou senha inválidos.';
					}
				}
			}

		?>
	</body>
</html>