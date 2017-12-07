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

            #sidebar nav ul li{
                display: inline;
                border: 2px solid black;
                border-radius: 10px;
                padding: 10px;
                width: 200px;
            }

            @media all and (min-width: 600px) {
                #sidebar {
                    flex: 1;
                }
                #sidebar nav ul li{
                    display: block;
                }
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

    <section id="sidebar">
      <nav>
        <ul>
          <li><a href="codigo.html" style="color:white">Aprenda a colocar um video no seu código HTML!</a><br/></li>
          <li><a href="paginaVideo.html" style="color:white">Assita um vídeo de exemplo!</a><br/></li>
        </ul>
      </nav>
    </section>

        <article>

            <div class="circulo">

                <img src="../../images/anaodagota.jpg">

            </div>

            <h1 style="color:white">Incluindo vídeo em HTML</h1>

        </article>

        <footer id="page-footer">
            <?php include 'page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
