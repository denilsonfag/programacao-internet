<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="login-page">
        <div class="form">
             <form class="login-form" action="cadastrar-usuario.php" method="post">
                <form method="post" action="cadastrar-usuario.php" id="formCadastrarse">
                    <input type="text" id="usuario" name="usuario" placeholder="Usuário" required="requiored">                              <input type="password" id="senha" name="senha" placeholder="Senha" required="requiored">
                    <input type="password" id="senha" name="confirmarsenha" placeholder="Repita a senha" required="requiored">            
                    <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
                </form>
                <p class="message">Já possui uma conta? <a href="index.php">Logue agora!</a></p>
                <p class="message"><a href="index.php">Voltar para Home</a>
            </form>

        </div>
    </div>

</body>

</html>
