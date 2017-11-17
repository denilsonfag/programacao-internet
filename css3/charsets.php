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
                <h1>Charsets</h1>
                <h2> O que é ? </h2>
            </header>
            <p>O Charset serve pra indicar o formato de codificação de caracteres utilizado no documento. O mais usado em páginas atualmente é o UTF-8.</p>
            <hr/>
            <h2>Exemplos:</h2>
            <h3>ASCII</h3>
            <p>
                O mais conhecido é o código ASCII (American Standard Code for Information Interchange). Este é um padrão americano, mas é um dos mais utilizados em todo o mundo. O código ASCII define, com precisão, a correspondência entre símbolos e números até o número 127:
            </p>
            <img src="../images/ascii.png"/>
            <br/>
            <h3>
                Unicode
            </h3>
            <p>
                Em vez de usar apenas os códigos de 0 a 127, o UNICODE utiliza códigos de valor bem maiores. Com isso, pode representar todos os caracteres específicos de diversos idiomas. Novos códigos são regularmente atribuídos para novos caracteres, como caracteres latinos (acentuados ou não), gregos, cirílicos, armênios, hebraicos, tailandeses, hiraganas, katakanas etc. Só o alfabeto chinês Kanji contém 6.879 caracteres. Assim sendo, o UNICODE define uma correspondência entre símbolos e números.
            </p>
            <br/>
            <hr/>
            <h3>
                UTF-8
            </h3>
            <p>
                Em teoria, o UNICODE é muito bom. Porém, na prática, a história é outra. Normalmente, em UNICODE, um caractere usa 2 bytes. Em outras palavras, qualquer texto usa duas vezes mais espaço do que no ASCII. É um desperdício. Além disso, se tomarmos como exemplo um texto em português, a grande maioria dos caracteres só utiliza o código ASCII. São raros os caracteres que requerem UNICODE. Mas há um truque: o UTF-8.
            </p>
            <p>
                Um texto em UTF-8 é simples, é feito completamente em ASCII e, quando precisamos de um caractere do UNICODE, usamos um caractere especial, que indica 'Atenção, o seguinte caractere está em UNICODE'.
            </p>
            <h2>
                - Como usar em HTML 4
            </h2>
            <br/>
            <p>
                No HTML 4 temos que usar o seguinte comando dentro do &lt;head&gt;:
            </p>
            <code>
                <p>&lt;meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> </p>
            </code>
            <img src="../images/html4charset.jpg"/>
            <hr/>
            <h2>
                - Como usar em HTML 5
            </h2>
            <p>
                No HTML 5 temos que usar o seguinte comando dentro do &lt;head&gt;:
            </p>
            <code>
                <p>&lt;meta charset="UTF-8"&gt;</p>
            </code>
            <img src="../images/exemplocodigo2.png"/>
        </div>
    </article>
    <footer id="page-footer">
        <?php include '../page-footer.html'; ?>
    </footer>
</div>
</body>
</html>
