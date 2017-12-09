<!DOCTYPE html>
<!-- Daniel Frutos 31/10/17-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../styles/main.css">
    <title>cssFontes</title>
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
            <?php include '../page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include '../side-menu.html'; ?>
        </nav>

        <section>
            <div id="artigo">
                <header class="pcenter">
                    <h1 class="pcenter">Familia de Fontes do CSS</h1>
                    <h4 class="pcenter">
                        Definindo estilos de fontes e configurações de letra utilizando CSS.
                    </h4>
                </header>

                <hr>

                <section>
                    <article>
                        <h2>1. A estilização de fontes</h2>
                        <p>As propriedades para estilização de fontes, definem os diferentes aspectos de apresentação dos glifos (letras e caracteres) que compõem os conteúdos textuais dos diferentes elementos da marcação HTML. As propriedades básicas para estilizar fontes que serão estudadas neste tutorial são as listadas a seguir:</p><br>
                        <table>
                            <tr>
                                <th>Função</th>
                                <th>Descrição</th>
                            </tr>
                            <tr>
                                <td>color</td>
                                <td>cor da fonte</td>
                            </tr>
                            <tr>
                                <td>font-family</td>
                                <td>família ou tipo da fonte</td>
                            </tr>
                            <tr>
                                <td>font-size</td>
                                <td>tamanho da fonte</td>
                            </tr>
                            <tr>
                                <td>font-style</td>
                                <td>estilo da fonte</td>
                            </tr>
                            <tr>
                                <td>font-variant</td>
                                <td>fontes maiúsculas de menor altura</td>
                            </tr>
                            <tr>
                                <td>font-weight</td>
                                <td>peso da fonte</td>
                            </tr>
                            <tr>
                                <td>font-stretch</td>
                                <td>grau de espansão/contração dos glifos</td>
                            </tr>
                        </table>


                        <br>
                        <p>Vamos conhecer um pouco mais como podemos fazer para alterar o texto dentro do código HTML.Uma vez que nem todas as fontes existentes estão instaladas nos computadores dos usuários (existem milhares de fontes e a maioria delas não é gratuita), CSS fornece um mecanismo para compensar esta lacuna. </p>


                        <p>
                            Você define uma lista de fontes para seu documento a serem usadas na ordem que você definiu (se a primeira da lista não estiver disponível no computador do usuário usar a segunda e assim por diante) e a última fonte da lista deverá ser uma&nbsp;<em>f</em><em>onte genérica&nbsp;</em>dentre uma das cinco disponíveis:&nbsp;<strong>serif, sans-serif, monospace, cursive</strong>&nbsp;e&nbsp;<strong>fantasy.</strong></p>



                    </article>
<br>
                    <article>
                        <h2>2. Exemplos</h2>
                        <p>
                            Seguem exemplos das formatações que podemos fazer com as fontes utilizando CSS e classes em relação a fontes de apresentação de uma página.
                        </p>

                        <article>
                            <br>
                            <h3>2.1 Familia de fontes</h3>
                            <p>
                                CSS fornece um mecanismo para compensar esta lacuna. Você define uma lista de fontes para seu documento a serem usadas na ordem que você definiu (se a primeira da lista não estiver disponível no computador do usuário usar a segunda e assim por diante) e a última fonte da lista deverá ser uma fonte genérica dentre uma das cinco disponíveis: serif, sans-serif, monospace, cursive e fantasy.
                            </p>


                            <br>
                            <p> <strong>Times New Roman:</strong>
                            </p>

                            <p class="serif">→ Esta é uma frase que deverá estar em: Times New Roman.</p>
                            <p>
                                <Strong>Arial:</Strong>
                            </p>
                            <p class="sansserif">→ Esta é uma frase que deverá estar em Arial.</p>

                            <p>
                                <Strong>Fantasy:</Strong>
                            </p>
                            <p class="fantasy">→ Esta é uma frase que deverá estar em Fantasy.</p>


                        </article>

                        <article>
                            <br>
                            <h3>2.2 Estilo das Fontes</h3>
                            <p>
                                A propriedade font-style define a escolha da fonte em normal, italic ou oblique. Itálico e obliquo são textos curvos, sendo o primeiro menos acentuado e o segundo mais acentuado, respectivamente. No exemplo a seguir todos as cabeçalhos serão em itálico.
                            </p>
                            <br>
                            <p>Exemplo:</p>

                            <p class="normal">- Este é um parágrafo em estilo normal.</p>
                            <p class="italic">- Este é um parágrafo em estilo itálico.</p>
                            <p class="oblique">- Este é um parágrafo em estilo oblíquo.</p>


                        </article>

                        <article>
                            <br>
                            <h3>2.3 Tamanho das Fontes</h3>
                            <p>
                                CSS nos permite alterar o tamanho de uma fonte de diversas maneiras, que podem ser dividas em medidas absolutas e relativas. Sem dúvidas, a maneira mais comum de se definir o tamanho de um texto, é através de pixel, através da abreviação "px", por exemplo: 10px, 12px, 18px, 20 px. Dizemos que essa maneira de definir o tamanho (que é a altura) da fonte é absoluta, pois uma vez dito que é 14 pixels, esse tamanho será sempre o mesmo, independente da configuração da tela do usuário, browser, se estar em um computador, celular ou tablet, pois pixel é uma medida fixa de tamanho, para mensurar distâncias na tela.
                            </p>
                            <br>
                            <p>Exemplo:</p>

                            <p class="t1">- Este é o tamanho 25px.</p>
                            <p class="t2">- Este é o tamanho 20px.</p>
                            <p class="t3">- Este é o tamanho 10px.</p>
                        </article>

                        <article>
                            <br>
                            <h3>2.4 Peso das Fontes</h3>
                            <p>
                                O CSS nos permite definir a espessura, o grau ou peso (weight) de negrito que queremos aplicar em uma fonte. Inclusive nos permitindo deixar mais espesso ou mais fina a fonte, tudo fica de acordo com sua vontade. Essas possibilidades de negrito com a propriedade font-weight podem não parecer tão úteis para a maioria das pessoas, mas mostram todo o poder e versatilidade do CSS.
                            </p>
                            <br>
                            <p>Exemplo:
                            </p>

                            <p class="normal">- Esta é a "normal".</p>
                            <p class="light">- Esta é a "leve".</p>
                            <p class="thick">- Esta é a "grossa".</p>
                            <p class="thicker">- Esta é a "mais grossa".</p>
                        </article>

                        <article>
                            <br>
                            <h3>2.5 Variações da Fonte</h3>
                            <p>
                                A propriedade font-variant é usada para escolher as variantes normal ou small-caps. Uma fonte small-caps é aquela que usa letras maiúsculas de tamanhos reduzidos. Se a propriedade font-variant for definida para small-caps e não estiver disponível na máquina do usuário, será usada fonte em maiúscula.
                            </p>

                            <br>
                            <p> Exemplo:</p>


                            <p class="normal">- Esta é uma variante normal.</p>
                            <p class="small">- Esta é uma variante small-caps.</p>
                        </article>


<hr>
                        <footer class="pcenter">
                            <h2 class="rosa">Referencias:</h2>


                            <p>
                                <li>Wikip&eacute;dia: SVG. Site: <a href="https://pt.wikipedia.org/wiki/SVG">https://pt.wikipedia.org/wiki/SVG&nbsp;</a>&nbsp;acessado em 22/09/</li>
                                <li>W3Schools: SVG Tutorial. Site: <a href="https://www.w3schools.com/graphics/svg_intro.asp"> https://www.w3schools.com/graphics/svg_intro.asp</a>&nbsp;acessado em 22/09/2017.</li>
                            </p>

                            <p class="pcenter">#CSTADS - 2017</p>
                        </footer>
            </div>
            </section>

            <footer id="page-footer">
                <?php include '../page-footer.html'; ?>
            </footer>
    </div>
</body>

</html>
