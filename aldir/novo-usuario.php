<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

     <style>
       .principal{
			max-width: 350px;
			position: absolute;
			top: 10%;
			left: 37%;
	   }
    </style>
</head>

<body>
    <?php
    ?>
    <div class="principal">
        <div class="form">
             <form class="login-form" action="cadastrar-usuario.php" method="post">
                <div class="form-group ls-login-user">
                    <input class="form-control ls-login-bg-user input-lg" type="text" placeholder="Login" name = "login" id="login" required/>
                </div>
                <div class="form-group ls-login-password">
                    <input class="form-control ls-login-bg-password input-lg" type="password" placeholder="Senha" name = "senha" id="senha" required/>

                    <input class="form-control ls-login-bg-password input-lg" type="password" placeholder="Confirmar Senha" name = "confirmaSenha" id="senha" required/>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="entrar">Cadastrar</button>
                <p class="message">Já é cadastrado? <a href="index.php">Login</a></p>
            </form>

        </div>
    </div>

</body>

</html>
