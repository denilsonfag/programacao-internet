<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>

<script type="text/javascript">
	function Nova(){
	location.href=" index.php"
	}
</script>

</head>
<body>
	<div class="barra-sup"></div>

	<div id="main-wropper">
		<img src="imgs/avatar.png" class="avatar">
			<form action="cadastrar-usuario.php" method="POST">
				<input type="text" class="inputvalues" placeholder="Usuário" name="login" required><br>
				<input type="password" class="inputvalues" placeholder="Senha" name="senha" required><br>
				<input type="password" class="inputvalues" placeholder="Confirmar Senha" name="confirmaSenha" required><br>
				<input type="submit" class="button" value="Cadastrar"><br>
				<input type="submit" class="button" value="Voltar" onclick="Nova()">
			</form>
	</div>
</body>
</html>
