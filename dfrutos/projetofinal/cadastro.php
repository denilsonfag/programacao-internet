<?php
session_start(); // Inicia sessão

    $error=''; // Variável para armazenar mensagem de erro
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2']) ) {
            $error = "Favor preencher todos os campos.";
        } 
        elseif ( strcmp($_POST['password'], $_POST['password2'] )) {   
            $error = "As senhas não conferem.";
        } 
        
        else {
            // Definimos usuario e password
            $username=$_POST['username'];
            $password=$_POST['password'];
            

            // estabelecendo conexão com o servidor passado os dados inseridos
            $connection = mysqli_connect("localhost:3306", "root", "");

            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);
                
            // Selecionando DB
            $db = mysqli_select_db( $connection, "danielf");
            
            // buscando informações no banco
            $query = mysqli_query($connection, "insert into login  (username, password) values ('$username','$password')"); 
            $error = "Cadastro Realizado!";
            
            mysqli_close($connection); // fechar conexão
        }
    }

?>