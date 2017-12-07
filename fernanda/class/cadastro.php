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

    if(strlen($senha) < 5)
        $erro[] = "Sua senha deve ter no <strong>mínimo</strong> 5 caracteres";
    if(strlen($senha) > 16){
        $erro[] = "Sua senha deve ter no <strong>máximo</strong> 16 caracteres";
    }

    if(count($erro) == 0){

        $sql = "SELECT senha_usuario as senha, id_usuario as valor
        FROM usuarios
        WHERE nome_usuario = '$_SESSION[nome]'";
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();

        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>nome</strong> informado.";

        elseif(strcmp($dado[senha], ($senha)) == 0){
            $_SESSION['logado'] = $dado['valor'];
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";

        if(count($erro) == 0){
            header("Location: login.php");
            exit();
            unset($_SESSION['nome']);
        }

    }


}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cadastro</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if(isset($erro))
                            if(count($erro) > 0){ ?>
                                <div class="alert alert-danger">
                                    <?php foreach($erro as $msg) echo "$msg <br>"; ?>
                                </div>
                            <?php
                            }
                            ?>
                        <form method="post" action="" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input value="<?php if(isset($_SESSION['nome'])) echo $_SESSION['nome']; ?>" class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Senha" name="password" type="password" value="">
                                </div>

                                <button type="submit" name="login" value="true" class="btn btn-success btn-block">Cadastrar</button>


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
