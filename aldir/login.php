<?php
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$servername = "localhost";
$username = "aldir";
$password = "111222333";
$dbname = "aldir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //sucesso
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:border-outline.php');

}else{
   echo"<script language='javascript' type='text/javascript'>alert('Usuario ou Senha Incorreto!');window.location.href='index.php';</script>";
}
?>
