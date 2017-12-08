<?php
  session_start();

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

  if ($row == null || $inputPassword != $row[0]['userPassword']) {
    exception("Usuário ou senha inválida.");
  }

  unset($_SESSION['status']);
  $_SESSION['user'] = $inputName;
  $dataBase->closeConnection();
  header('location:welcome.php');
  
  function exception($message) {
    session_start();
    $_SESSION['status'] = $message;
    header('location:../');
    die();
  }
?>