<?php

$login = $_POST['login'];
$senha = MD5(MD5($_POST['senha']));
$confirmaSenha = MD5(MD5($_POST['confirmaSenha']));

if($senha != $confirmaSenha){
    echo"<script language='javascript' type='text/javascript'>alert('As senhas não conferem');window.location.href='novo-usuario.php';</script>";
    die();
    }

    $connect = mysqli_connect('localhost','maicon','12345');
        $db = mysqli_select_db($connect,'maicon');
        $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
        $select = mysqli_query($connect, $query_select);
        $array = mysqli_fetch_array($select);
        $logarray = $array['login'];

    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='novo-usuario.php';</script>";
        die();

      }

        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $busca = mysqli_query($connect, $query);

        if($busca){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='novo-usuario.php'</script>";
        }

?>