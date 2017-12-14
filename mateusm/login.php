<?php


$login = $_POST['inputLogin'];
$senha = MD5($_POST['inputPassword']);
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "cadasto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM pessoa WHERE Login = '$login' and Senha = '$senha'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:logado.php');
}else{
   header('location:index.php');
}
?>