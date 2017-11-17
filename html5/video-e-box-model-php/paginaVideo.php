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
        <header id="page-header">
            <?php include 'page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu.html'; ?>
        </nav>

        <article>

            <td align = left>
            <top>
            <a href="index.html" style="color:white">&lt;&lt; Página inicial!</a>
            </top>
            </td>

            <div class="centro">
            <h1 style="color:white">Assista ao vídeo!</h1>
    
            <video width="500" height="500" controls>
            <source src="../../videos/anaodagota.mp4" type="video/mp4">
            </video>
            </div>

        </article>

        <footer id="page-footer">
            <?php include 'page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
