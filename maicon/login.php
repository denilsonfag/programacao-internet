<?php

$login = $_POST['login'];
$senha = MD5(MD5($_POST['senha']));
$servername = "localhost";
$username = "maicon";
$password = "12345";
$dbname = "maicon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo"<script language='javascript' type='text/javascript'>alert('Banco de dados não existe!');window.location.href='novo-usuario.php';</script>";
}

$sql = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //sucesso
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:homepage.php');

}else{
   echo"<script language='javascript' type='text/javascript'>alert('Usuario ou Senha Incorreto!');window.location.href='index.php';</script>";
}
?>
