<?php
//inclui o cabeçalho da pagina:
$page_title = 'Cadastro';
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


?><h1>Cadastro:</h1>
<form action="cadastrar-usuario.php" method="post" align="center">
	<p>Nome:<br> <input type="text" name="usua_nome" size="20" maxlength="60" /> </p>
	<p>Login:<br> <input type="text" name="usua_login" size="20" maxlength="60" /> </p>
	<p>Senha: <br><input type="password" name="usua_senha1" size="20" maxlength="20" /></p>
	<p>Confirme a senha: <br><input type="password" name="usua_senha2" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Entrar" /></p>
</form>

<?php include ('includes/footer.html'); ?>