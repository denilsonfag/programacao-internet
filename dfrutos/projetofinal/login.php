<?php
session_start(); // Inicia sessão
    
$error=''; // Variável para armazenar mensagem de erro

    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Nome de usuário ou senha incorreto. Tente novamente.";
        } else {
            
            // Define $username e  $password
            $username=$_POST['username'];
            $password=$_POST['password'];

            //Estabalecendo uma conexão segura com o servidor passando os dados
            $connection = mysqli_connect("localhost:3306", "root", "");
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);
                
            // selecionando database
            $db = mysqli_select_db( $connection, "danielf");
            
            // Consulta o banco e retorna os dados.
            $query = mysqli_query($connection, "select * from login where password='$password' AND username='$username'");
            $rows = mysqli_num_rows($query);

            if ($rows == 1) {
                $_SESSION['login_user']=$username; // Iniciando sessão
                header("location: profile.php"); // Redirecionando para outra página
            } else {
                $error = "Nome do usuário ou senha incorreta. Tente novamente.";
            }
            
            mysqli_close($connection); // Finaliza conexao
        }
    }

?>