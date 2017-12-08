<?php
  if (!isset($_POST['inputName'])) {
    header('location:../');
    die();
  }

  require 'database.php';

  $dataBase = new DataBase();

  $isSuccessfulConnection = $dataBase->connectToTheDb();

  if (!$isSuccessfulConnection) {
    exception("Falha na conexão com o banco.");
  }
  
  $inputName = $_POST['inputName'];
  $inputPassword = sha1($_POST['inputPassword']);

  $row = $dataBase->selectRowFromDb($inputName);

  if ($row == null) {
    exception("Usuário ou senha inválida.");
  }

  if ($inputPassword == $row[0]['userPassword']) {
    session_start();
    unset($_SESSION['status']);
    $_SESSION['user'] = $inputName;
    $dataBase->closeConnection();
    header('location:welcome.php');
    die();
  } else {
    exception("Usuário ou senha inválida.");
  }
  
  function exception($message) {
    session_start();
    $_SESSION['status'] = $message;
    header('location:../');
    die();
  }
?>