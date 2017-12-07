<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=1');
  }
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
            <h2>BEM VINDO <?= $_SESSION['usuario'] ?> !</h2>
            <a href="canvas.php">Canvas</a><br>
            <a href="EstruturasCondicionais.php">Estruturas Condicionais</a><br />
            <a href="formatacao-texto.php">Formatações de Texto</a><br /><br />
            <p class="message"><a href="logout.php">Logout</a>
        </div>
    </div>

</body>

</html>
