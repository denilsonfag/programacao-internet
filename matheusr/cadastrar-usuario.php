<?php 
	require ("db.php");
	$usuario = $_POST['inputUsuario'];
	$senha = md5($_POST['inputPassword']);
    $senha2 = md5($_POST['inputPassword2']);

    if ($senha == $senha2){
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";

        if ($conn->query($sql)==TRUE){
            header('Location: novo-usuario.php?msg=1');
        }else{
            header('Location: novo-usuario.php?msg=2');
            echo $conn->error;
        }
        $conn->close();
    } else {
        header('Location: novo-usuario.php?msg=3');
    }




 ?>