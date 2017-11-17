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
            <h1 style="color:white" class="centro">Código para inserir vídeo!!</h1>
            <td align = left><top><a href="index.html" style="color:white">&lt;&lt; Página inicial!</a></top></td>

            <p ><h1 style="color:white" class="centro">Para inserir vídeo no HTML utilize o seguinte trecho de código dentro da seu código HTML:<h1></p>
            
            <p >
            <h2 class="centro">Um arquivo de vídeo pode ser inserido em uma página HTML de duas maneiras. A primeira seria usando a tag &lt;embed/&gt; . Essa tag não significa tag de fechamento. Ela funciona, geralmente, da mesma forma que as tags para fotos.</h2>

            <code><h3 style="color:white" class="centro"><strong>&lt;embed src="example.mpeg" autostart="false" height="30" width="144" /&gt;</strong></h3></code>


            </p>

            <p>
                    <h2 class="centro">Você também pode inserir um arquivo de vídeo usando um link.</br></h2>

                    <code><h3 style="color:white" class="centro"><strong>&lt;video width="500" height="500" controls&gt;
                    &lt;source src="../nomedovideo.mp4" type="video/mp4"&gt;&lt;/video&gt;</strong></h3></code>

            </p>
        </article>

        <footer id="page-footer">
            <?php include 'page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
