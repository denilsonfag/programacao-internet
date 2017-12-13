<?php
include('login.php'); // Inclui o script da tela de login

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
            
        <title>Login PHP</title>
            <link href="style.css" rel="stylesheet" type="text/css">
        </head>
        
    <body>
        <div id="main">
            <h1>ÁREA DE LOGIN</h1>
            <div id="login">
                <h2>Dados Cadastrais</h2>
                <form action="" method="post">
                    <label>Usuário :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Senha :</label>
                    <input id="password" name="password" placeholder="**********" type="password">
                    <input name="submit" type="submit" value="Login">

                    
                        <button type="button" onclick="window.location.href='tela_cadastro.php'"> Quero me cadastrar!</button>

                    <span><?php echo $error; ?></span>
                </form>
            </div>
        </div>
        </body>
        </html>
