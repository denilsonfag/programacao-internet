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
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      font-family: Arial, sans-serif;
      font-size: 20px;
    }

    iframe{
      width: 320px;
      height: 240px;
      border: 1px solid;
    }

    p{
      display: inline-block;
    }

    div{
      text-align: center;
    }
  </style>
</head>
<body>
  <div>
    <iframe src="../../images/nature-mini.jpg" name="iframe"></iframe>
  </div>
  <div>
    <p><a href="../../images/nature-menor.jpg" target="iframe">Ampliar</a></p>
    <p><a href="../../images/nature-mini.jpg" target="iframe">Reduzir</a></p>
  </div>
</body>
</html>