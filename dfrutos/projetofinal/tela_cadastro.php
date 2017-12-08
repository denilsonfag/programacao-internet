<?php
include('/cadastro.php'); // Inclui o script da telad e login
    if(isset($_SESSION['login_user'])){
        header("location: profile.php");
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="image/png"      href="../../images/favicon.png">
            
        <title>danielf</title>
            <link href="style.css" rel="stylesheet" type="text/css">
        </head>
        
    <body>
        <div id="main">
            <h1>CADASTRO</h1>
            <div id="login">
                <h2>Novo Usuário</h2>
                <form action="" method="post">
                    <label>Nome de Usuário :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Senha :</label>
                    <input id="password" name="password" placeholder="**********" type="password">
                    <label>Confirmar Senha :</label>
                    <input id="password" name="password2" placeholder="**********" type="password">
                    
                    <input name="submit" type="submit" value="Enviar Dados">
                    
                    <button type="button" onclick="window.location.href='index.php'"> Voltar p/ Login</button>

                                        
                    
                    <span><?php echo $error; ?></span>
                </form>
            </div>
        </div>
        </body>
        </html>
