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
    $_SESSION['nome'] = $mysqli->escape_string($_POST['nome']);


    // Validação de dados
    if(strlen($nome) == null)
        $erro[] = "Preencha seu <strong>nome</strong> corretamente.";

    if(strlen($senha) < 5 || strlen($senha) > 16)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";

    if(count($erro) == 0){

        $sql = "SELECT senha_usuario as senha, id_usuario as valor 
        FROM usuarios 
        WHERE nome_usuario = '$_SESSION[nome]'";
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();

        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>nome</strong> informado.";

        elseif(strcmp($dado['senha'], sha1(($senha))) == 0){
            $_SESSION['logado'] = $dado['valor'];
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";



        if(count($erro) == 0){
            header("Location: homepage.php");
            exit();
            unset($_SESSION['nome']);
        }



    }


}

include ('index.php');


?>
