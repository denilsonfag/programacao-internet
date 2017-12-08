<?php
  session_start();
  
  if(isset($_SESSION['user'])) {
    header('location:logout.php');
    die();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/icon.png">
  <link rel="stylesheet" href="../css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <script type="text/javascript" src="../script/main.js"></script>
  <title>Pacific Atlantic</title>
</head>
<body>
  <section>
    <figure>
      <img src="../images/user.png" alt="Fazer cadastro">
    </figure>
    <form name="register" action="../php/cadastrar-usuario.php" method="post" onsubmit="return validateRegisterUserPassword();">
      <input type="text" name="inputName" placeholder="Usuário" required autofocus>
      <input type="password" name="inputPassword" placeholder="Senha" required>
      <input type="password" name="inputPasswordRetry" placeholder="Repita a senha" required>
      <p id="errorMessage"></p>
      <input type="submit" value="Próximo">
    </form>
    <hr>
    <a href="../">Login</a>

    <?php
      if(!isset($_SESSION['status'])) {
        $_SESSION['status'] = " ";
      }
      
      echo
      '<script type="text/javascript">
        showMessage("errorMessage", "' . $_SESSION['status'] . '");
      </script>';

      $_SESSION['status'] = " ";
    ?>
  </section>
</body>
</html>