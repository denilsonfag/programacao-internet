<?php
	require ("db.php");
	if(isset($_GET['msg'])){
			$msg = $_GET['msg'];

			switch($msg){
				case 1:
                    ?>
                        <div class="message">
                            <div class="alert alert-success">
                                <a href="index.php" class="close" data-dismiss="alert">&times</a>
                                Usuário cadastrado com sucesso.
                            </div>
                        </div>
                    <?php
                    break;
                case 2:
                    ?>
                    <div class="message">
                        <div class="alert alert-danger">
                            Verifique se o banco de dados está online ou se o usuário informado já existe
                        </div>
                    </div>
                    <?php
                    break;
                case 3:
                    ?>
                    <div class="message">
                        <div class="alert alert-danger">
                            As senhas informadas não são iguais...
                        </div>
                    </div>
                    <?php
                    break;
			}
		}
		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<form action="cadastrar-usuario.php" method="post" class="form-cadusu">
			<h2 class="form-login-heading">Cadastre o usuário</h2>
			<label for="inputUsuario">Usuario</label>
			<input type="usuario" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Usuario" required>
			<label for="inputPassword">Senha</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
            <label for="inputPassword2">Informe novamente sua senha</label>
            <input type="password" id="inputPassword2" name="inputPassword2" class="form-control" placeholder="Senha" required>
			<button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar</button>
            <a href="index.php  ">Voltar para página de login</a>
		</form>
	</div>
</body>
</html>
