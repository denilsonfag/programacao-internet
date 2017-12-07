<?php

require '../init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Transitions</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../_css/main.css" >
    <style>


    </style>
    <head>
        <meta charset="utf-8">
        <title>Programação para Internet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css" >
    </head>
<body>
<header id="page-header">
    <?php include '../page-header.php'; ?>
</header>
<div id="interface">
    <h1>CSS 3 Transitions</h1>
    <p>As transições no css3 permite alterar os valores de propriedades de um item sem problemas, como tamanho ou prosição,
    em um certo eriodo</p>
    <p><b>Exemplo:</b> Passe o mouse o botão abaixo para ver um efeito de <i>Transition</i></p>

    <submit class="transtion">Transition css3</submit>

    <h2>Suporte dos navegadores</h2>
    <table>
        <tr>
            <th>Propriedade</th>
            <th>Google Chrome</th>
            <th>Microsoft Edge</th>
            <th>Mozilla Firefox</th>
            <th>Safari</th>
            <th>Opera</th>
        </tr>
        <tr>
            <td>transition</td>
            <td>26.04.0 <br>-webkit-</td>
            <td>10.0</td>
            <td>16.04.0 <br>-moz-</td>
            <td>6.13.1 <br>-webkit-</td>
            <td>12.110.5 <br>-o-</td>
        </tr>
        <tr>
            <td>transition-delay</td>
            <td>26.04.0 <br>-webkit-</td>
            <td>10.0</td>
            <td>16.04.0 <br>-moz-</td>
            <td>6.13.1 <br>-webkit-</td>
            <td>12.110.5 <br>-o-</td>
        </tr>
        <tr>
            <td>transition-duration</td>
            <td>26.04.0 <br>-webkit-</td>
            <td>10.0</td>
            <td>16.04.0 <br>-moz-</td>
            <td>6.13.1 <br>-webkit-</td>
            <td>12.110.5 <br>-o-</td>
        </tr>
        <tr>
            <td>transition-property</td>
            <td>26.04.0 <br>-webkit-</td>
            <td>10.0</td>
            <td>16.04.0 <br>-moz-</td>
            <td>6.13.1 <br>-webkit-</td>
            <td>12.110.5 <br>-o-</td>
        </tr>
        <tr>
            <td>transition-timing-function</td>
            <td>26.04.0 <br>-webkit-</td>
            <td>10.0</td>
            <td>16.04.0 <br>-moz-</td>
            <td>6.13.1 <br>-webkit-</td>
            <td>12.110.5 <br>-o-</td>
        </tr>
    </table>

    <h2>Como usar?</h2>
    <p>Para criar uma <i>transition</i>, é necessário especificar 2 atributosos</p>
    <ul>
        <li>A propriedade css que deseja adicionar o efeito</li>
        <li>A duração do efeito</li>
    </ul>
    <p><b>Nota:</b> Se a duração não for especificada, o efeito não será aplicado</p>

    O exemplo a seguir mostra um elemento de 100px * 100px vermelho < div>. O elemento < div> também especificou um efeito de transição para a propriedade de largura, com uma duração de 2 segundos:

    <div class="code">
        <span class="codeTitle">Exemplo</span>
        <br>
        div { <br>
        width: 100px;<br>
        height: 100px;<br>
        background: red;<br>
        -webkit-transition: width 2s; /* Safari */<br>
        transition: width 2s; <br>
        } <br>
    </div>



    <p>O efeito de transição terá início quando a propriedade CSS especificado (largura) altera o valor.

        Agora, vamos especificar um novo valor para a propriedade de largura quando um usuário passar o mouse sobre o elemento < div>:</p>

    <div class="code">
        <span class="codeTitle">Exemplo</span>
        <br>
        div:hover {<br>
        width: 300px;<br>
        }<br>
    </div>
    <p>Observe que quando passamos o cursor do mouse sobre a div, aumenta o tamanho gradualmente, e quando tiramos o mcursor
    do mouse dele, volta, gradualmente, ao tamanho padrão</p>

    <div id ="exemplo1">

    </div>
    <h2>Alterar vários valores de propriedade</h2>
    <div class="code">
        <span class="codeTitle">Exemplo</span>
        <br>
        div {<br>
        -webkit-transition: width 2s, height 4s; /* Safari */<br>
        tra nsition: width 2s, height 4s;<br>
        }<br>
    </div>
    <br>
    <div id ="exemplo2">

    </div>

    <h2>Especifique a curva de  velocidade da transição</h2>
    <p>A propriedade <span class="red">transition-timing-function</span> especifica a curva de velocidade do efeito de transição.</p>

    A<b>transition-timing-function</b>  pode ter os seguintes valores:

    <span class="red">ease</span> - especifica um efeito de transição com um arranque lento, em seguida, rapidamente, em seguida, termina-se lentamente (isto é o padrão)
    <span class="red">linear</span> - especifica um efeito de transição com a mesma velocidade do início ao fim
    <span class="red">ease-in</span> - especifica um efeito de transição com um arranque lento
    <span class="red">ease-out</span> - especifica um efeito de transição com uma extremidade lento
    <span class="red">ease-in-out</span> - especifica um efeito de transição com um lento início e fim
    <span class="red">cubic-bezier(n,n,n,n)</span> - permite definir seus próprios valores em uma função cúbica-bezier
    O exemplo seguinte mostra a algumas das diferentes curvas de velocidade que podem ser utilizados:

    <div class="code">
    <span class="codeTitle">Exemplo</span>
        <br>
    #div1 {transition-timing-function: linear;}<br>
    #div2 {transition-timing-function: ease;}<br>
    #div3 {transition-timing-function: ease-in;}<br>
    #div4 {transition-timing-function: ease-out;}<br>
    #div5 {transition-timing-function: ease-in-out;}<br>
    </div>
    <br>
    <div id ="exemplo3">

    </div>
    <br>
    <div id ="exemplo4">

    </div>
    <br>
    <div id ="exemplo5">

    </div>
    <br>
    <div id ="exemplo6">

    </div>
    <br>
    <div id ="exemplo7">

    </div>

    <h2>Retardar o efeito de transição</h2>

    <p>A transition-delaypropriedade especifica um atraso (em segundos) para o efeito de transição.</p>

    <p>O exemplo seguinte tem um atraso de 1 segundo antes de partida:</p>

    <div class="code">
    <span class="codeTitle">Exemplo</span>
        <br>
    div {<br>
    -webkit-transition-delay: 1s; /* Safari */<br>
    transition-delay: 1s;<br>
    }
    </div>

    <h2>Transição + Transformation</h2>
    <p>O exemplo a seguir adiciona também uma transformação para o efeito de transição:</p>

    <div class="code">
    <span class="codeTitle">Exemplo</span>
        <br>
    div {<br>
    -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* Safari */<br>
    transition: width 2s, height 2s, transform 2s;<br>
    }<br>
    </div>

    <h2>Mais exemplos de transição</h2>
    <p>As propriedades de transição CSS3 pode ser especificado um por um, da seguinte forma:</p>

    <div class="code">
    <span class="codeTitle">Exemplo</span>
        <br>
    div {<br>
    transition-property: width;<br>
    transition-duration: 2s;<br>
    transition-timing-function: linear;<br>
    transition-delay: 1s;<br>
    }<br>
    </div>

    <p>ou usando a propriedade estenográfica transition:</p>

    <div class="code">
    <span class="codeTitle">Exemplo</span>
        <br>
    div {<br>
    transition: width 2s linear 1s;<br>
    }<br>
    </div>
    <h2>Propriedades de transitions</h2>
    <table>
        <tr>
            <th>Propriedade</th>
            <th>Descrição</th>
        </tr>
        <tr>
            <td>transition</td>
            <td>Uma curta propriedade para um unico efeito</td>
        </tr>
        <tr>
            <td>transition-delay</td>
            <td>Especifica um delay (em seconds) para o efeito de transição</td>
        </tr>
        <tr>
            <td>transition-duration</td>
            <td>Especifica quantos segundos ou milisigundos levará para a realização do efeito de transição</td>
        </tr>
        <tr>
            <td>transition-property</td>
            <td>Especifica o nome da propriedade CSS que a transition afetará</td>
        </tr>
        <tr>
            <td>transition-timing-function</td>
            <td>Especifica a curva de velocidade da transição</td>
        </tr>
    </table>
</div>
</body>
</html>
