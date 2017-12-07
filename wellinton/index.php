<!--
Wellinton Vieira
Programação para Internet I
 -->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="css/style.css">
	    <script type="text/javascript" src="js/global.js"></script>
	    <title>Login</title>
	</head>
	<body>
		<form method="POST" action="login.php">
			<fieldset class="fieldsetPage">
				<figure>
					<img src="images/login.png">
				</figure>
				<div>
					<input type="text" name="usuario" placeholder="Usuário" required autofocus><br>
					<input type="password" name="senha" placeholder="Senha" required><br>
					<input type="submit" value="Logar" title="Clique aqui para efetuar o login"><br><br>
					<a href="novo-usuario.php" title="Clique aqui para cadastrar um novo usuário">
					Cadastrar novo usuário</a>
				</div>
			</fieldset>
			<?php
				if(isset($_SESSION['mensagemErro'])){
					echo "<script>mensagemErro()</script>";
					unset($_SESSION['mensagemErro']);
				}
			?>
		</form>
	</body>
</html>
