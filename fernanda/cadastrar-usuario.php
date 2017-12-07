<?php
if(!isset($_SESSION))
    session_start();

//Login de Usários
if(isset($_POST['login'])){

  include('class/conexao.php');


  $erro = array();

  // Captação de dados
    $senha = $_POST['password'];
    $nome = $_POST['nome'];
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $mysqli->escape_string($_POST['nome']);


    // Validação de dados
    if(strlen($nome) == null)
        $erro[] = "Preencha seu <strong>nome</strong> corretamente.";
    if(strlen($senha) < 5)
        $erro[] = "Sua senha deve ter no <strong>mínimo</strong> 5 caracteres";
    if(strlen($senha) > 16){
        $erro[] = "Sua senha deve ter no <strong>máximo</strong> 16 caracteres";
    }

    if(count($erro) == 0){

        $sql = "INSERT INTO usuarios (nome_usuario, senha_usuario)
                VALUES ('$_SESSION[nome]', SHA1('$_SESSION[senha]'))";

        if($mysqli->query($sql) === TRUE){
            header("Location: index.php");
            exit();
            unset($_SESSION['nome']);

        }else{
            $erro[] = "Já  existe um usuário  '$_SESSION[nome]' cadastado, tente outro nome!";
        }

        if(count($erro) == 0){
            header("Location: index.php");
            exit();
            unset($_SESSION['nome']);
        }

    }


}

include ('novo-usuario.php');

?>
