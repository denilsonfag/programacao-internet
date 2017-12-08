<?php

require '../init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas em HTML 5</title>
    <link rel="stylesheet" href="../_css/main.css" class="main">
    <style>


    </style>
</head>

<body>




    <div id="interface">
        <?php include '../page-header.php'; ?>
        <h1> Loop FOR no PHP</h1>
        <p>PHP utiliza loops FOR para executar um bloco de código de um número especificado de vezes.</p>

        <p>O laço for é usado quando você sabe de antemão quantas vezes o script deve ser executado.</p>

        <div class="code">
            <span class="codeTitle">Sintaxe</span>
            for (init counter; test counter; increment counter) {<br />
            code to be executed;<br />
            }<br />
        </div>


        <h1>parâmetros:</h1>
        <ul>
            <li>contador de init : Inicializar o valor do contador de circuito</li>
            <li>contador de testes : avaliada para cada iteração. Se for avaliado como TRUE, o loop continua. Se for avaliado como FALSE, o laço termina.</li>
            <li>contador de incremento : aumenta o valor do contador de circuito</li>
        </ul>

        <p>O exemplo a seguir mostra os números de 0 a 10:</p>

        <div class="code">
            <span class="codeTitle">Exemplo</span>
            < ?php<br />
                for ($x = 0; $x <= 10; $x++) {<br />
                echo "The number is: $x";<br />
                }<br />
            ?><br />
        </div>

        <h1> Loop PHP foreach </h1>
        <p>O loop foreach funciona somente em matrizes, e é usado para passar através de cada par de chave / valor de uma matriz.</p>

        <div class="code">
            <span class="codeTitle">Sintaxe</span><br />
            foreach ($array as $value) {<br />
            code to be executed;<br />
            }<br />
        </div>

        <p>Para cada iteração do loop, o valor do elemento do array corrente é atribuído a $ valor eo ponteiro do array é movido por um, até que ele atinja o último elemento do array.</p>

        <p> exemplo seguinte demonstra um circuito que produzirá os valores da matriz dada ($ cores):</p>

        <div class="code">
            < ?php<br />
                $colors = array("red", "green", "blue", "yellow");<br />
                foreach ($colors as $value) {<br />
                    echo "$value";<br />
                }<br />
            ?><br />
        </div>

    </div>
</body>

</html>

