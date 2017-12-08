<!DOCTYPE html>
<!-- Daniel Frutos 31/10/17-->
<html lang="pt-br">

<head>
    <title>danielf</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png">
    <link rel="stylesheet" href="../componentes/main.css">



    <style>
        /*--------------------------------------
            PARTE1 - FAMILIA QUE DESEJAMOS USAR 
        --------------------------------------*/

        p.serif {
            font-family: "Times New Roman", Times, serif;
            padding-left: 60px;
        }

        p.sansserif {
            font-family: Arial, Helvetica, sans-serif;
            padding-left: 60px;

        }

        p.fantasy {
            font-family: fantasy;
            padding-left: 60px;
        }

        /*---------------------------------------------------
            PARTE2 - ESTILO DO TEXTO QUE DESEJAMOS USAR. 
        ---------------------------------------------------*/

        p.normal {
            font-style: normal;
        }

        p.italic {
            font-style: italic;
        }

        p.oblique {
            font-style: oblique;
        }


        /*---------------------------------------------------
            PARTE3 - TAMANHO DA FONTE. 
        ---------------------------------------------------*/

        p.t1 {
            font-size: 25px;
        }

        p.t2 {
            font-size: 20px;
        }

        p.t3 {
            font-size: 10px;
        }

        /*---------------------------------------------------
            PARTE4 - PESO DA FONTE. 
        ---------------------------------------------------*/

        p.normal {
            font-weight: normal;
        }

        p.light {
            font-weight: lighter;
        }

        p.thick {
            font-weight: bold;
        }

        p.thicker {
            font-weight: 900;
        }


        /*---------------------------------------------------
            PARTE5 - VARIANT. 
        ---------------------------------------------------*/

        p.normal {
            font-variant: normal;
        }

        p.small {
            font-variant: small-caps;
        }

            {
            max-width: 100%;
        }

        a {
            text-decoration: none;
        }

        ul li a:hover {
            font-size: 20px;
            color: #f90056;
        }

        footer[class="pcenter"] a {
            display: block;
        }

        #interface {
            display: flex;
            flex-flow: row wrap;
        }

        #interface>* {
            flex: 1 100%;
        }

        #artigo {
            padding: 8px;
        }

        #page-header,
        #artigo,
        #page-footer {
            font-size: 20px;
            text-align: left;
        }

        #page-header {
            background-image: linear-gradient(to bottom, #b3b3b3, white);
        }

        #side-menu {
            background-image: linear-gradient(to right, #b3b3b3, white);
        }

        #page-footer {
            background-image: linear-gradient(to top, #999999, white);
        }

        @media all and (min-width: 100px) {
            #interface>* {
                flex: 100%;
            }
        }

        @media all and (min-width: 800px) {
            #side-menu {
                flex: 1;
            }
            #interface>section {
                flex: 4;
            }
        }

        /* Imagens */

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        img[alt^="caelum"] {
            width: 200px;
            height: 100px;
        }

        img[alt^="maujor"] {
            width: 150px;
            height: 150px;
        }

        /* Tabelas */

        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 8px;
            border-bottom: 1px solid #cccccc;
        }

        th {
            background-color: #999999;
        }

        tr:hover {
            background-color: #cccccc;
        }

        /* Códigos */

        .codigo {
            background-color: #272822;
            padding: 10px;
        }

        .amarelo {
            color: #e6d95c;
        }

        .azul {
            color: #66d9ef;
        }

        .branco {
            color: #ffffff;
        }

        .cinza,
        h1+h4,
        #interface>header>h1,
        #interface>nav>h2,
        #interface>nav>h3,
        #interface>footer>p {
            color: #757150;
        }

        .rosa,
        p>strong,
        #artigo>header>h1 {
            color: #f90056;
        }

        .roxo {
            color: #ae81ff;
        }

        .verde {
            color: #95dd07;
        }

    </style>
</head>

<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../componentes/page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include '../componentes/side-menu.html'; ?>
        </nav>

        <section>
            <div id="artigo">
                <header class="pcenter">
                    <h1 class="pcenter">SVG: Scalable Vetor Graphics</h1>
                    <h4 class="pcenter">
                        Desenhando como profissinal em seu browser!
                    </h4>
                </header>

                <hr>

                <article class="article">
                    <p><strong>INTRODUÇÃO: O que s&atilde;o vetores gr&aacute;ficos escal&aacute;veis?</strong></p>
                    <p><strong>SVG</strong>&nbsp;&eacute; a abreviatura de Scalable Vector Graphics que pode ser traduzido do ingl&ecirc;s como gr&aacute;ficos vetoriais escal&aacute;veis. Trata-se de uma linguagem XML para descrever de forma vetorial desenhos e gr&aacute;ficos bidimensionais, quer de forma est&aacute;tica, quer din&acirc;mica ou animada.</p>

                    <p>A cria&ccedil;&atilde;o deste formato foi baseada noutros j&aacute; existentes: CSS, DOM, JPEG, PNG, SMIL e XML. &Eacute; um padr&atilde;o aberto desenvolvido desde 1999 por um grupo de trabalho do W3C com base nos formatos PGML, da Adobe, e VML, da Microsoft, submetidos ao W3C por essas empresas em 1998.</p>

                    <p>SVG &eacute; suportado por todos os navegadores Web modernos de forma nativa ou atrav&eacute;s de bibliotecas JavaScript. O suporte nativo no Microsoft Internet Explorer s&oacute; &eacute; poss&iacute;vel a partir da vers&atilde;o 9. Bibliotecas permitem suporte limitado em navegadores mais antigos.</p>
                </article>
                <hr>
                <article class="article">
                    <p><strong>EXEMPLOS: Seguem alguns exemplos de como esta ferramente &eacute; usada.
            </strong></p>
                    <p>Círculo do Brasil:</p>


                    <svg width="100" height="100">
                        <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
                    </svg>

                    <p>Retângulo:</p>

                    <svg width="400" height="100">
                        <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
                    </svg>

                    <p>Strela:</p>

                    <svg width="300" height="200">
                      <polygon points="100,10 40,198 190,78 10,78 160,198"
                      style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
                    </svg>


                    <p>Desenho mais complexo tipo WordArt:</p>
                    <svg height="130" width="500">
                      <defs>
                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                          <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                          <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                        </linearGradient>
                      </defs>
                      <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
                      <text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86">SVG</text>
                    </svg>
                </article>
                <hr>


                <footer>
                    <h2 class="rosa">Referencias:</h2>
                    <li>W3Schools: PHP 5 Strings. Site: <a href="https://www.w3schools.com/php/php_string.asp">https://www.w3schools.com/php/php_string.asp&nbsp;</a>&nbsp;acessado em 02/11/2017</li>
                    <li>Wikip&eacute;dia: SVG. Site: <a href="https://pt.wikipedia.org/wiki/SVG">https://pt.wikipedia.org/wiki/SVG&nbsp;</a>&nbsp;acessado em 22/09/2017</li>
                    <li>W3Schools: SVG Tutorial. Site: <a href="https://www.w3schools.com/graphics/svg_intro.asp">https://www.w3schools.com/graphics/svg_intro.asp</a>&nbsp;acessado em 22/09/2017.</li>
                    <p>#CSTADS - 2017</p>
                </footer>

            </div>
        </section>
        <footer id="page-footer">
            <?php include '../componentes/page-footer.html'; ?>
        </footer>
    </div>
</body>

</html>
