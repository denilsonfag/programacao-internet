<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>
</head>
<body>
	<div class="barra-sup"></div>
		
	<div id="main-wropper">
		<img src="imgs/avatar.png" class="avatar">
			<form class="login-form" action="login.php" method="POST">
				<input type="text" class="inputvalues" placeholder="Usuário" name="login" required><br>
				<input type="password" class="inputvalues" placeholder="Senha" name="senha" required><br>
				<input type="submit" class="button" value="Login"><br><br>
				<a id="link" href="novo-usuario.php">Não está cadastrado? Clique Aqui.</a>
			</form>
	</div>	
</body>

</html>