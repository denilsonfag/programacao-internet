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

                .centro{
                    text-align: center;
                }

        </style>


</head>

<body style="background-color:rgb(94, 19, 19);">
    <div id="interface">

        <article>

            <td align = left>
            <top>
            <a href="indexVideo.php" style="color:white">&lt;&lt; Página inicial!</a>
            </top>
            </td>

            <div class="centro">
            <h1 style="color:white">Assista ao vídeo!</h1>

            <video width="500" height="500" controls>
            <source src="../videos/anaodagota.mp4" type="video/mp4">
            </video>
            </div>

        </article>

    </div>
</body>
</html>
