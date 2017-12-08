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
	    <title>Novo Usuário</title>
	</head>
	<body>
		<form method="post" action="cadastrar-usuario.php" name="formNovoUsuario" onsubmit="return validarSenhas(this);">
			<fieldset class="fieldsetPage">
					<figure>
						<img src="images/user.png">
					</figure>
					<input type="usuario" name="usuario" placeholder="Usuario" required autofocus><br>
					<input type="password" name="senha" placeholder="Senha" required><br>
					<input type="password" name="senhaRepetida" placeholder="Repita sua senha" required><br>
					<input type="submit" value="Cadastrar" title="Clique aqui para cadastrar"><br><br>
					<a href="index.php" title="Clique aqui para cancelar">Voltar</a>
				</div>
			</fieldset>
		</form>
		<?php
			if(isset($_SESSION['mensagemCadastro'])){
				echo "<script>mensagemCadastro()</script>";
				unset($_SESSION['mensagemCadastro']);
			}
		?>
		<?php
			if(isset($_SESSION['mensagemErroCadastro'])){
				echo "<script>mensagemErroCadastro()</script>";
				unset($_SESSION['mensagemErroCadastro']);
			}
		?>
		<?php
			if(isset($_SESSION['mensagemErroCadastroExistente'])){
				echo "<script>mensagemErroCadastroExistente()</script>";
				unset($_SESSION['mensagemErroCadastroExistente']);
			}
		?>
	</body>
</html>
