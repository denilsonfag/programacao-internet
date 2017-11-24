<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div class="login-page">
         <div class="form">
            <form class="login-form" action="login.php" method="post">
                <input type="text" placeholder="Login" name = "login" id="login" required/>
                <input type="password" placeholder="Senha" name = "senha" id="senha" required/>
                <button type="submit" id="entrar" name="entrar">Login</button>
                <p class="message">Não é cadastrado? <a href="novo-usuario.php">Crie uma conta</a></p>
            </form>
        </div>
    </div>

</body>

</html>
