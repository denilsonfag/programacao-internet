<?php
  session_start();
  if(!isset($_SESSION['user'])) {
    header('location:../');
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
  <script type="text/javascript" src="../script/main.js"></script>
  <title>Pacific Atlantic</title>
</head>
<body>
  <header>
    <?php include 'header.php';?>
  </header>
  <div>
    <nav>
      <?php include '../html/menu.html'; ?>    
    </nav>
    <div>
      <iframe src="../images/ifsc_canoinhas.png" name="iframe"></iframe>
    </div>
  </div>
  <footer>
    <?php include '../html/footer.html';?>
  </footer>
</body>
</html>