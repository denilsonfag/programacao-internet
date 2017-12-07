<?php
session_start();
if((!isset ($_SESSION['nome']) == true))
{
    unset($_SESSION['nome']);
    header('location:../index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css" >
    <title>CSS E HTML</title>

    <style>

        @import url('https://fonts.googleapis.com/css?family=Raleway');
        
        p {
            color: white;
            border: 2px solid #561c1c;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }

        h1 {
            color: white;
            text-align: center;
        }

        .corpo {
            border: 25px;
            padding: 25px;
            margin: auto;
            height: 100px;
            width: 50%;
            
        }
        .voltar{
            width: 300px;
            border: 25px;
            padding: 25px;
            margin: 10px;
            height: 100px;
        }

        .titulo{
            border: 25px;
            padding: 90px;
            margin: auto;
            height: 50px;
            width: 50%;
        }

        body{
            background-color: black;
            font-family: Raleway;
        }

        a:hover {
            color: black;
        }

        a:active {
            color: #561c1c;
        }

        a{
            color: white;
        }

    </style>

</head>
<body>
    <div id="interface">

        <article>
                <div class="voltar">
                    <p><a href="../homepage.php">Homepage</a></p>
                </div>
                
                <div class="titulo">
                    <h1>Aprendendo CSS</h1>
                </div>

                <div class="corpo">
                    <p><a href="boxModel.php">Box model</a></p>

                
</body>
</html>
