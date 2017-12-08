<?php
  session_start();
  if(!isset($_SESSION['user'])) {
    header('location:../');
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
  <link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
  <title>Pacific Atlantic</title>
</head>
<body>
  <header>
    <h2>Programação para Internet</h2>
    <a href="logout.php">
      <figure>
        <img src="../images/user.png" title="Logout" alt="Logout">
      </figure>
    </a>
  </header>
  <div>
    <nav>
      <ul>
        <div>
          <span>HTML</span>
          <li>
            <a href="iframe.php" target="iframe">Iframe</a>
          </li>
        </div>
        <div>
          <span>CSS</span>
          <li>
            <a href="layout-iframe.php" target="iframe">Layout Iframe</a>
          </li>
          <li>
            <a href="layout-seletores.php" target="iframe">Layout Seletores</a>
          </li>
        </div>
        <div>
          <span>PHP</span>
          <li>
            <a href="seletores.php" target="iframe">Seletores</a>
          </li>
          <li>
            <a href="operators.php" target="iframe">Operadores</a>
          </li>
        </div>
      </ul>
    </nav>
    <div>
      <iframe src="calculadora-js.php" name="iframe"></iframe>
    </div>
  </div>
  <footer>
    <div>
      <figure>
        <img src="../images/ifsc_canoinhas.png" title="Câmpus Canoinhas" alt="ifsc_canoinhas.png">
      </figure>
      <div>
        <h3>Contato</h3>
        <p>Av. Expedicionários, 2150, Bairro Campo da Água Verde, Canoinhas/SC</p>
        <p>E-mail autor: systems.analysis.contact@gmail.com</p>
      </div>
    </div>
    <h3>2017 - Instituto Federal de Santa Catarina - CSTADS</h3>
  </footer>
</body>
</html>