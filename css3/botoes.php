<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>CSS 3</title>
</head>
 <style>
     #interface{
         display: flex;
         flex-flow: row wrap;
     }
     #interface > * {
         flex: 1 100%;

     }

     @media all and (min-width: 800px){
         #side-menu{
             flex: 1;
             order: 1;
             padding-right: 35px;
         }
         #artigo{
             flex: 4;
             order: 3;

         }
         #page-footer{
             order: 3;
         }

     }
     code {
         display:block;
         /* Below are styles for the codebox (not the code itself) */
         border:1px solid black;
         background-color:ghostwhite;
         width:100%;
         overflow:hidden;
         padding:1px;
         /* Styles in here affect the text of the codebox */
         font-size: 1.0em;
         font-family: 'PT Sans Narrow', sans-serif;
         color:black;
         align: left;
         /* You could also put all sorts of styling here, like different font, color, underline, etc. for the code. */
     }
     body{
         background-color: whitesmoke;
     }
     .p1{
         text-align: center;
     }
     h1 {
         text-align: left;
         font-size: 3.5em;
     }
     h2{
         font-size: 2.0em;
         color: #2369dc;
         text-align: left;
     }
     h3{
         font-size: 1.0em;
     }
     .button {
         background-color: #4CAF50; /* Green */
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
     }
     .button2 {background-color: #008CBA;} /* Blue */
     .button3 {background-color: #f44336;} /* Red */
     .button4 {background-color: #e7e7e7; color: black;} /* Gray */
     .button5 {background-color: #555555;} /* Black */
     .button6 {padding: 10px 24px;}
     .button7 {padding: 12px 28px;}
     .button8 {padding: 14px 40px;}
     .button9 {padding: 32px 16px;}
     .button10 {padding: 16px;}

    </style>
<body>

    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu-c.html'; ?>
        </nav>

        <article id = "artigo">
            <div>
                <!-- Cabeçalho da página -->
                <header id="page-header">  <!-- tag que representa um cabeçalho -->
                    <h1>Botões/Buttons</h1>
                </header>
                <p> A linguagem HTML dispõe de controles nativos para exibir botões em páginas web, tais como as tags button e input (type=button, submit ou reset). Porém, em termos de aparência, estes botões assumem os estilos originais que dependem do browser e do sistema operacional. Para estilizar estes botões, geralmente aplica-se CSS e define-se cores de plano de fundo, dimensões, fonte, entre outras características. Abaixo veremos alguns exemplos de estilizações de botões juntamente com os códigos fonte.<p>

                    <!-- Primeiro post do blog -->
                <hr/>
                <h2>Estilo de botão básico</h2>
                <button>Botão básico</button>
                <a href="#" class="button">Link Button</a><br/>
                <br/>
                <h3>
                    Código botão básico
                </h3>
                <code>
                    &lt;button>Botão básico&lt;/button&gt;
                </code>
                <h3>
                    Código Link Button
                </h3>
                <code>
                    .button {<br/>
                    background-color: #4CAF50; /* Green */<br/>
                    border: none;<br/>
                    color: white;<br/>
                    padding: 15px 32px;<br/>
                    text-align: center;<br/>
                    text-decoration: none;<br/>
                    display: inline-block;<br/>
                    font-size: 16px;<br/>
                    }
                </code>
                <br/>
                <hr/>

                <!-- Segundo post do blog -->
                <h2>
                    Cores dos botões
                </h2>
                <p>
                    Use a propriedade 'background-color' para alterar a cor de fundo do botão.
                </p>
                <button class="button">Green</button>
                <button class="button button2">Blue</button>
                <button class="button button3">Red</button>
                <button class="button button4">Gray</button>
                <button class="button button5">Black</button>
                <br/>
                <br/>
                <h3>Código fonte:</h3>
                <code>
                    .button1 {background-color: #4CAF50;} -- Verde<br/>
                    .button2 {background-color: #008CBA;} -- Azul<br/>
                    .button3 {background-color: #f44336;} -- Vermelho<br/>
                    .button4 {background-color: #e7e7e7; color: black;} -- Cinza<br/>
                    .button5 {background-color: #555555;} --Preto<br/>
                </code>
                <br/>
                <hr/>
                <h2>
                    Tamanho dos botões
                </h2>
                <p>
                    Para alterarmos o tamanho dos botões devemos configurar a propriedade 'padding':
                </p>
                <button class="button button6">10px 24px</button>
                <button class="button button7">12px 28px</button>
                <button class="button button8">14px 40px</button>
                <button class="button button9">32px 16px</button>
                <button class="button button10">16px</button>
                <br/>
                <br/>
                <h3>Código fonte:</h3>
                <code>
                    .button1 {padding: 10px 24px;}<br/>
                    .button2 {padding: 12px 28px;}<br/>
                    .button3 {padding: 14px 40px;}<br/>
                    .button4 {padding: 32px 16px;}<br/>
                    .button5 {padding: 16px;}<br/>
                </code>
                <br/>
            </div>
        </article>



        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
