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
        <?php include '../css3/side-menu-c.html'; ?>
    </nav>

    <article id = "artigo">
        <table border="0" width="100%" align="center">
            <tr>
                <td align="right">
                    <a href="dashboard.php">Página Inicial</a> |
                    <a href="charsets.php">Charsets</a> |
                    <a href="botoes.php">Botões</a> |
                    <a href="logout.php">Sair</a>
                </td>
            </tr>
            <table>
                    <!-- Cabeçalho da página -->
                    <header id="page-header">  <!-- tag que representa um cabeçalho -->
                        <h1>While loop</h1>
                    </header>
                    <p>O loop while executa um bloco de código enquanto uma condição específica for verdadeira</p>

                    <!-- Primeiro post do blog -->
                    <hr/>
                    <h2>While</h2>
                    <p>
                        Para utilizarmos o while precisamos usar a seguinte sintaxe:
                    </p>
                    <code>
                        while(condição) {
                        <br><p>código que será executado;</p><br>
                        }
                    </code>
                    <br/>
                    <h3>
                        Exemplo:
                    </h3>
                    <code>
                        &lt;?php<br>
                        $x = 1;<br>

                        while ($x <= 5) {
                        <p>O valor da variável é:</p>
                        <p>$x++;</p>
                        }<br>
                        ?>
                    </code>
                    <h3>
                        A saída desse exemplo é a seguinte:
                    </h3>
                    <code>
                        O Valor da variável é: 1<br>
                        O Valor da variável é: 2<br>
                        O Valor da variável é: 3<br>
                        O Valor da variável é: 4<br>
                        O Valor da variável é: 5<br>
                    </code>
                    <br/>
                    <hr/>

                    <!-- Segundo post do blog -->
                    <h2>
                        Do...While
                    </h2>
                    <p>
                        O do...while sempre executa o bloco de código pelo menos uma vez, então após a primeira execução ele verificará a condição, se for verdadeira repetirá o loop.
                    </p>
                    <h3>
                        Exemplo:
                    </h3>
                    <code>
                        &lt;?php<br>
                        $x = 6;<br>

                        do {
                        <p>O valor da variável é:</p>
                        <p>$x++;</p>
                        } while ($x <= 5)<br>
                        ?>
                    </code>
                    <h3>
                        A saída desse exemplo é a seguinte:
                    </h3>
                    <code>
                        O Valor da variável é: 6<br>
                    </code>
                    <br/>
                    <hr/>
            </table>
    </article>
    <footer id="page-footer">
        <?php include '../page-footer.html'; ?>
    </footer>
</div>
</body>
</html>
