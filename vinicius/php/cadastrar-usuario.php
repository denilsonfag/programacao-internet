<?php
  session_start();

  if (!isset($_POST['inputName'])) {
    header('location:novo-usuario.php');
    die();
  }

  require 'database.php';

  $dataBase = new DataBase();

  $isSuccessfulConnection = $dataBase->connectToTheDb();

  if (!$isSuccessfulConnection) {
    exception("Falha na conexão com o banco.");
  }

  $inputName = $_POST['inputName'];
  $inputPassword = $_POST['inputPassword'];

  $search = $dataBase->selectUserNameFromDb($inputName);

  if ($search != null) {
    exception('Nome de usuário indisponível.');
  }

  $dataBase->insertIntoTheDb($inputName, sha1($inputPassword));
  $dataBase->closeConnection();  
  $_SESSION['status'] = 'Cadastrado com sucesso!';
  header('location:../');

  function exception($message) {
    $_SESSION['status'] = $message;
    header('location:novo-usuario.php');
    die();
  }
?>