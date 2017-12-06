<?php 
    //if ternário, caso a variável erro exista, será exibida.
    $erro = isset($_GET['erro']) ? ($_GET['erro']) : 0;    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Trabalho Final</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="login-page">
         <div class="form">
            <form method="post" action="login.php" id="formLogin">
                <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />             
                <button type="submit" id="sub_login" name="Entrar">Entrar</button>
                <p class="message">Não possui uma conta? <a href="novo-usuario.php">Crie uma conta agora!</a></p><br /><br />

                    <?php 
                        if($erro == 1){
                            echo '<font color = "#FF0000">Usário ou Senha inválidos.</font>';
                        }
                    ?>                                                
            </form>
        </div>
    </div>
</body>
</html>
