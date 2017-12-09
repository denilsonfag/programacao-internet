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
                    <h1 class="pcenter">Manipulação de Strings utilizando PHP</h1>
                    <h4 class="pcenter">
                        Uma variável tipo string é utilizada para armazenar e manipular texto e caracteres.
                    </h4>
                </header>

                <hr>

                <section>
                    <article>
                        <h2>1. Strings e PHP</h2>
                        <p>Essencialmente strings são cadeia de caracteres utilizadas para expressar palavras. Neste tutorial vamos mostraras funções mais comuns na manipulação de strings e funções que o PHP oferece. </p><br>
                        <table>
                            <tr>
                                <th>Função</th>
                                <th>Descrição</th>
                            </tr>
                            <tr>
                                <td>strlen()</td>
                                <td>Retorna o tamanho de uma string (conta o número de caracteres). </td>
                            </tr>
                            <tr>
                                <td>str_word_count()</td>
                                <td>Retorna o número de palavras de uma string.</td>
                            </tr>
                            <tr>
                                <td>strrev()</td>
                                <td>Reverte uma string.</td>
                            </tr>
                            <tr>
                                <td>strpos()</td>
                                <td>Busca um caractere em especial e retorna a primeira posição em que ele se encontra.</td>
                            </tr>
                            <tr>
                                <td>str_replace()</td>
                                <td>Substitui uma fonte por outra.</td>
                            </tr>
                        </table>


                        <br>
                        <p>Vamos por em prática as funções acima e verificar como cada uma dela se comporta em situações reais. </p>


                    </article>
                    <br>
                    <article>

                        <h2>2. Exemplos práticos com Strings</h2>
                        <p>
                            Seguem exemplos das formatações que podemos fazer com as fontes utilizando PHP em relação a strings e sua apresentação no navegador.
                        </p>

                        <article>
                            <br>
                            <h3>2.1 Comprimento de uma String: strlen() </h3>
                            <p>
                                O comprimento de uma string é utilizado normalmente em loops e outras funções quando é importante saber por exemplo quando a string termina. Exemplo: quando queremos saber o momento que terminou uma string. Exemplo:</p>

                            <code style="COLOR:blue">
                            <?php 
                            
                                echo "Este parágrafo está escrita em PHP. O comprimento de uma string é utilizado normalmente em loops e outras funções quando é importante saber por exemplo quando a string termina. Exemplo: quando queremos saber o momento que terminou uma string. A funcao 'srtlen' conta o numero de caracteres de uma string. Considerando a string 'Hello World' (12 letras),temos: 
                                <br> 
                                <br>
                                - strleng('Hello World')= ";
                                echo strlen("Hello world!");
                                echo "."
                                
                                ?>
                                </code>


                        </article>

                        <article>
                            <br>
                            <h3>2.2 Contando palavras: str_word_count()</h3>

                            <code style="COLOR:blue">
                            <?php 
                            
                                echo "Este parágrafo está escrita em PHP. Utilizando a mesma frase Hello World, vamos utilizar esta função para ver o seu retorno. 
                                <br> 
                                <br>
                                
                                - str_word_count('Hello World')= ";
                                echo str_word_count("Hello world!");
                                echo "."
                                
                                ?>
                                </code>

                        </article>

                        <article>
                            <br>
                            <h3>2.3 Revertendo uma string: strrev()</h3>
                            <code style="COLOR:blue">
                            <?php 
                            
                                echo "Este parágrafo está escrita em PHP. Vamos utilizar a função acima para reverter a frase padrão 'Hello World', qual seria seu retorno?. 
                                <br> 
                                <br>
                                
                                - strrev('Hello World')= ";
                                echo strrev("Hello world!");
                                echo "."
                                
                                ?>
                                </code>

                        </article>

                        <article>
                            <br>
                            <h3>2.4 Busca caractere: strpos() </h3>

                            <code style="COLOR:blue">
                            <?php 
                            
                                echo "Este parágrafo está escrita em PHP. Vamos utilizar a função acima para buscar a palavra 'World' na string 'Hello World', qual seria seu retorno?. 
                                <br> 
                                <br>
                                
                                - strpos('Hello world!', 'world')= ";
                                echo strpos("Hello world!", "world");
                                echo "."
                                
                                ?>
                                </code>

                        </article>

                        <article>
                            <br>
                            <h3>2.5 Trocando caractere: str_replace() </h3>
                            <code style="COLOR:blue">
                                <?php 
                                echo "Este parágrafo está escrita em PHP. Vamos utilizar a função acima para trocar a palavra  'World' por 'Dolly' na string 'Hello World'.
                                <br> 
                                <br>
                                
                                - str_replace('world', 'Dolly', 'Hello world!')= ";
                                echo str_replace("world", "Dolly", "Hello world!");
                                echo "."
                                ?>
                            </code>

                        </article>
                        <hr>
                        <footer class="pcenter">
                            <h2 class="rosa">Referencias:</h2>


                            <li>W3Schools: PHP 5 Strings. Site: <a href="https://www.w3schools.com/php/php_string.asp">https://www.w3schools.com/php/php_string.asp&nbsp;</a>&nbsp;acessado em 02/11/2017</li>



                            <p class="pcenter">#CSTADS - 2017</p>
                        </footer>
            </div>
            </section>

            <footer id="page-footer">
                <?php include '../componentes/page-footer.html'; ?>
            </footer>
    </div>
</body>

</html>
