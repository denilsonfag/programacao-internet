<?php
session_start(); // Starting Session

    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2']) ) {
            $error = "Favor preencher todos os campos.";
        } 
        elseif ( strcmp($_POST['password'], $_POST['password2'] )) {   
            $error = "As senhas não conferem.";
        } 
        
        else {
            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];
            

            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $connection = mysqli_connect("localhost:3306", "root", "");

            // To protect MySQL injection for Security purpose
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);
                
            // Selecting Database
            //$db = mysqli_select_db( "company", $connection);
            $db = mysqli_select_db( $connection, "company");
            
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysqli_query($connection, "insert into login  (username, password) values ('$username','$password')"); 
            $error = "Cadastro Realizado!";
            
            mysqli_close($connection); // Closing Connection
        }
    }

?>