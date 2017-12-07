<?php

//inclui o cabeçalho da pagina:
$page_title = 'Login';
include ('includes/header.html');

// Mostra mensagens de erro, se ouverem:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Erro!</h1>
	<p class="error">Os seguintes erros ocorreram:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Por favor tente novamente.</p>';
}

// Mostra o formulário de login:
?><h1>Login</h1>
<form action="login.php" method="post" align="center">
	<p>Usuário:<br> <input type="text" name="usua_login" size="20" maxlength="60" /> </p>
	<p>Senha: <br><input type="password" name="usua_senha" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Entrar" /></p>
</form>
<center><a href="novo-usuario.php">Ainda não é cadastrado? Clique aqui.</a></center>

<?php include ('includes/footer.html'); ?>