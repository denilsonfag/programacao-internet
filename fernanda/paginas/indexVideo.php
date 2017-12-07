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
    <title>HTML - VÍDEO</title>

        <style>



            .circulo{
            width:130px;
            height:130px;
            border-radius:50%;
            border:5px solid #000;
            z-index:5;
            background:#000;
            position:relative;
            top:50%;
            left:45%;
            }

            .voltar{
            width: 300px;
            border: 25px;
            padding: 25px;
            margin: 10px;
            height: 100px;
            }

            p {
            color: white;
            border: 2px solid black;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
            }
        
            body {
                font-family: Georgia;
                text-align: center;
            }
        
            img {
                z-index:5;
                width:130px;
                height:130px;
                opacity:0.5; 
                border-radius:50%;
                border:-1px solid #000;
                background:#000;
            }

            a:hover {
                color: white;
            }

            a:active {
                color: #561c1c;
            }

            a{
                color: white;
            }
    
        </style>

</head>

<body style="background-color:rgb(94, 19, 19);">
    <div id="interface">


        <article>

            <div class="voltar">
                <p><a href="../homepage.php">Homepage</a></p>
            </div>

            <div class="circulo">
            
                <img src="../img/anaodagota.jpg">
        
            </div>

            <h1 style="color:white">Incluindo vídeo em HTML</h1>
        
            <h2><a href="codigo.php" style="color:white">Aprenda a colocar um video no seu código HTML!</a></h2>
        
            <h2><a href="paginaVideo.php" style="color:white">Assita um vídeo de exemplo!</a></h2>
            
        </article>


    </div>
</body>
</html>
