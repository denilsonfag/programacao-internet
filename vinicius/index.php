<?php
  session_start();
  
  if(isset($_SESSION['user'])) {
    header('location:php/silent.php');
    die();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/icon.png">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <script type="text/javascript" src="script/main.js"></script>
  <title>Pacific Atlantic</title>
</head>
<body>
  <section>
    <figure>
      <img src="images/user.png" alt="Fazer login">
    </figure>
    <form action="php/login.php" method="post">
      <input type="text" name="inputName" placeholder="Usuário" required autofocus>
      <input type="password" name="inputPassword" placeholder="Senha" required>
      <p id="errorMessage"></p>
      <input type="submit" value="Entrar">
    </form>
    <hr>
    <a href="php/novo-usuario.php">Cadastrar-se</a>
    
    <?php
      if(!isset($_SESSION['status'])) {
        $_SESSION['status'] = " ";
      }

      echo
        '<script type="text/javascript">
          showMessage("errorMessage", "' . $_SESSION['status'] . '");
        </script>';

      if ($_SESSION['status'] == 'Cadastrado com sucesso!') {
        echo
          '<script type="text/javascript">
            changeColor("errorMessage");
          </script>';
      }

      $_SESSION['status'] = " ";
    ?>
  </section>
</body>
</html>