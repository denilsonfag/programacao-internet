<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/icon.png">
  <link rel="stylesheet" href="../css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
  <title>Pacific Atlantic</title>
</head>
<body>
  <section>
    <figure>
      <img src="../images/user.png" alt="Fazer login">
    </figure>
  	<?php
      session_start();
      echo '<p id="welcome">Bem vindo, ' . $_SESSION['user'] . '!</p>';
      echo '<meta http-equiv="Refresh" content="2;url=silent.php">';
    ?>
  </section>
</body>
</html>