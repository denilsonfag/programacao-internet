<?php
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$servername = "localhost";
$username = "bruno";
$password = "12345";
$dbname = "bruno";

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
}else{
   echo"<script language='javascript' type='text/javascript'>alert('Usuario ou Senha Incorreto!');window.location.href='index.php';</script>";
}
?>
