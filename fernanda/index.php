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
    <link href="sb-admin-2.css" rel="stylesheet">


</head>
<body>

    <figure class = "btn-warning">
        <img src="img/logo.png" alt="Logo do Site" width="100" height="100"/>
    </figure>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
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
                        <form method="post" action="login.php"  role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input value="<?php if(isset($_SESSION['nome'])) echo $_SESSION['nome']; ?>" class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Senha" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Lembrar-me
                                    </label>
                                </div>

                                <button type="submit" name="login" value="true" class="btn btn-warning btn-block">Login</button>

                                <button id="cadastro" class="btn btn-warning btn-block">Novo por aqui?</button>

                                    <script type="text/javascript">
                                        document.getElementById("cadastro").onclick = function () {
                                        location.href = "novo-usuario.php";
                                        };
                                    </script>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
