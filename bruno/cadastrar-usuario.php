<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$confirmaSenha = MD5($ _POST['confirmaSenha']);
$connect = mysqli_connect('localhost','bruno','12345');
$db = mysqli_select_db($connect,'bruno');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

//clausulas guardas

if($senha != $confirmaSenha){
    echo"<script language='javascript' type='text/javascript'>alert('As senhas não conferem');window.location.href='novo-usuario.php';</script>";
    die();
    }

    if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='novo-usuario.php';</script>";
    die();
    }

    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='novo-usuario.php';</script>";
        die();

      }


//fim das clausulas guardas

        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $busca = mysqli_query($connect, $query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='novo-usuario.php'</script>";
        }

?>
