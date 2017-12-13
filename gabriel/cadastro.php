<?php
	include_once("bd.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		 <link href="bootstrap.min.css" rel="stylesheet">
		<link href="navbar-top-fixed.css" rel="stylesheet">
	</head>
	
	<body>		
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		 	 <a class="navbar-brand" href="#">Cadastro</a>
		  	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			 <span class="navbar-toggler-icon"></span>
		 	 </button>
		  
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
				     <a class="nav-link" href="index.php">Entrar<span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="index.php">Voltar</a>
				  </li>
				</ul>
		    </div>
		</nav>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		
		
		<div id "body"> 

			<center>
				<div id="cadastro" style="width: 400px;">
					<h3>Cadastre-se</h3>
					<form action="" method="POST" enctype="multipart/form-data">
						<p><label>Nome</label></br> <input type="text" name="nome" id="nome" placeholder="Meu nome" class="form form-control"/></p>
						<p><label>Usuário</label></br> <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="form form-control"/></p>
						<p><label>Senha</label></br> <input type="password" name="senha" id="senha" placeholder="**********" class="form form-control"/></p>
						<p><input type="submit" value="Cadastrar" class="btn btn-success" style="width: 120px;" /></p>
						<input type="hidden" name="cadastrar" value="register"/>
					</form>
				</div>
			</center>

	<?php
		if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == "register"){
			$nome = $_POST['nome'];
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];
			$senha = md5($senha);

			if(empty($nome) || empty($usuario) || empty($senha)){
				echo "Preencha todos os campos!";
			}else{
				
				$con = conexao();
				$query = "SELECT * FROM usuario WHERE usuario = '$usuario'";
				$result = mysqli_query($con, $query);
				$conta = mysqli_num_rows($result);
				$busca = mysqli_fetch_assoc($result);

				if($conta > 0){
					echo "Usuário já cadastrado.";
				}else{
					$cadastrar = "INSERT INTO usuario (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";
					if(mysqli_query($con, $cadastrar)){
						$_SESSION['nome'] = $nome;
						$_SESSION['usuario'] = $usuario;
						
						echo "Cadastro efetuado com sucesso!<br></br>";	
					}else{
						echo "Erro ao cadastrar, contate um administrador!";
					}
				}
			}
		}
	?>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
		<script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="popper.min.js"></script>
		<script src="bootstrap.min.js"></script>

	</body>
</html>