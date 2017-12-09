<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$confirmaSenha = MD5($_POST['confirmaSenha']);

//clausulas guardas


if($senha != $confirmaSenha){
    echo"<script language='javascript' type='text/javascript'>alert('As senhas não conferem');window.location.href='novo-usuario.php';</script>";
    die();
    }

    $connect = mysqli_connect('localhost','aldir','111222333');
        $db = mysqli_select_db($connect,'aldir');
        $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
        $select = mysqli_query($connect, $query_select);
        $array = mysqli_fetch_array($select);
        $logarray = $array['login'];

    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>alert('Usuario já existente');window.location.href='novo-usuario.php';</script>";
        die();

      }


        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $busca = mysqli_query($connect, $query);

        if($busca){
          echo"<script language='javascript' type='text/javascript'>alert('Cadastrado realizado com sucesso!');window.location.href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Um erro inesperado aconteceu! Lamentamos! Tente Novamente');window.location.href='novo-usuario.php'</script>";
        }

?>
