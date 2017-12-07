<?php
session_start();
if((!isset ($_SESSION['nome']) == true))
{
    unset($_SESSION['nome']);
    header('location:index.php');
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

    <title>Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>
<style type="text/css">
    .espaco {
        margin: 10px  -1px;
    }
</style>
<body>

    <div  class = "btn-warning"> 
        <h3 style=" position: absolute; left: 100px; top: 10px; color: black; font-family: cursive;"> Seja bem vindo, <?php echo $_SESSION['nome'] ?>!</h3>       
        <figure >
            <img src="img/logo.png"  alt="Logo do Site" width="100" height="100" />
        </figure>

    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

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
                            <fieldset>
                                
                                <button  id="video" class="espaco btn btn-warning btn-block">Video com HTML</button>

                                    <script type="text/javascript">
                                        document.getElementById("video").onclick = function () {
                                        location.href = "paginas/indexVideo.php";
                                        };
                                    </script>
                                
                                <button id="box" class="espaco btn btn-warning btn-block">Box Model</button>

                                    <script type="text/javascript">
                                        document.getElementById("box").onclick = function () {
                                        location.href = "paginas/indexBox.php";
                                        };
                                    </script>

                                <button id="logout" class="espaco btn btn-warning btn-block">Logout?</button>

                                    <script type="text/javascript">
                                        document.getElementById("logout").onclick = function () {
                                        location.href = "class/logout.php";
                                        };
                                    </script>


                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>