
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
    <header id="page-header">
        <?php include '../page-header.php'; ?>
    </header>

        <div id="interface">

            <h1>Citações</h1>

            <p>As citações em HTML ou XHTML têm o propósito de fornecer informações sobre algo dito por alguém. Em se tratando de
               citações, existem duas tags que proporcionam tal formatação e entendimento, as tags blockquote e q.</p>

            <h1>Blockquote</h1>

            <p>A tag blockquote fornece a delimitação de um parágrafo citado que pode conter várias linhas. Esta tag destaca o parágrafo,
                deslocando-o um pouco para a direita (dependendo da direção do texto). O uso de blockquote como forma de identar o texto
                foi definido como inadequado pela W3C em favorecimento ao uso de folhas de estilo. </p>

            <p>Blockquote ainda possui um atributo chamado cite. Cite serve para determinar a página fonte da citação,
            ou seja, de qual página da internet veio tal citação. Para demonstrar o uso de citações de parágrafo, abaixo
            está uma pequena parte do discurso de J. Kennedy sobre a corrida espacial retirada do site Wikipédia.</p>

            <div class="code">
            &lt;BLOCKQUOTE CITE="http://pt.wikipedia.org/wiki/John_F._Kennedy"&gt
              <P>Eu acredito que a nação deva se comprometer para alcançar o objetivo,<BR>
                antes do fim da década, de aterrissar o homem na lua<BR>
                e fazê-lo voltar em segurança para a Terra.</P>
            &lt;/BLOCKQUOTE&gt
            </div>

            <h1>Q</h1>
            <p>A tag Q tem a mesma finalidade que blockquote, mas a diferença é que ela apenas delimita uma pequena porção
                dentro do texto. Então, se blockquote serve para identificar um parágrafo inteiro que tenha sido citado, q serve apenas
                para identificar uma pequena frase.</p>

            <div class ="code">
            <P>Albert Einstein um dia disse:
              &lt;Q&gtSe eu não fosse físico,
                seria provavelmente músico.
                &lt;/Q&gt</P>
            </div>

            <p>Existem uma curiosidade na tag Q quanto aos browsers. O browser Internet Explorer, simplesmente, não modifica a
                formatação do texto. Já o Mozilla Firefox irá substituir as tags Q por aspas ("). Como no exemplo abaixo:</p>

            Albert Einstein um dia disse: "Se eu não fosse físico, seria provavelmente músico"

            <table>
                <tr>
                  <th colspan="4">Características - tag BLOCKQUOTE (texto - citação)</th>
                </tr>
                <tr>
                  <td rowspan="3">Uso<br></td>
                  <td>HTML 4.01</td>
                  <td colspan="2">&lt;BLOCKQUOTE&gt;...&lt;/BLOCKQUOTE&gt;</td>
                </tr>
                <tr>
                  <td>XHTML</td>
                  <td colspan="2">&lt;BLOCKQUOTE&gt;...&lt;/BLOCKQUOTE&gt;</td>
                </tr>
                <tr>
                  <td>HTML5</td>
                  <td colspan="2">&lt;BLOCKQUOTE&gt;...&lt;/BLOCKQUOTE&gt;</td>
                </tr>
                <tr>
                  <td rowspan="5">Formatação Padrão</td>
                  <td rowspan="4">Margem<br></td>
                  <td>Superior</td>
                  <td>16px</td>
                </tr>
                <tr>
                  <td>Inferior<br></td>
                  <td>16px</td>
                </tr>
                <tr>
                  <td>Direita</td>
                  <td>40px</td>
                </tr>
                <tr>
                  <td>Esquerda<br></td>
                  <td>40px</td>
                </tr>
                <tr>
                  <td colspan="2">Visualizacao:</td>
                  <td>Bloco</td>
                </tr>
                <tr>
                  <td>Atributos Aceitos</td>
                  <td colspan="3">id, class, cite, lang ,dir , title , style</td>
                </tr>
                <tr>
                  <td>Eventos Possíveis</td>
                  <td colspan="3">onclick, ondblclick, onmousedown, onmouseup, onmouseover, onmousemove, onmouseout, onkeypress, onkeydown, onkeyup</td>
                </tr>
            </table>

            <table>
                <tr>
                  <th colspan="4">Características - tag Q (texto - citação)</th>
                </tr>
                <tr>
                  <td rowspan="3">Uso<br></td>
                  <td>HTML 4.01</td>
                  <td colspan="2">&lt;Q&gt;...&lt;/Q&gt;</td>
                </tr>
                <tr>
                  <td>XHTML</td>
                  <td colspan="2">&lt;Q&gt;...&lt;/Q&gt;</td>
                </tr>
                <tr>
                  <td>HTML5</td>
                  <td colspan="2">&lt;Q&gt;...&lt;/Q&gt;</td>
                </tr>
                <tr>
                  <td>Formatação Padrão</td>
                  <td>Margens<br></td>
                  <td colspan="2">0px</td>
                </tr>
                <tr>
                  <td></td>
                  <td colspan="2">Visualizacao:</td>
                  <td>Inline</td>
                </tr>
                <tr>
                  <td>Atributos Aceitos</td>
                  <td colspan="3">id, class, cite, lang ,dir , title , style</td>
                </tr>
                <tr>
                  <td>Eventos Possíveis</td>
                  <td colspan="3">onclick, ondblclick, onmousedown, onmouseup, onmouseover, onmousemove, onmouseout, onkeypress, onkeydown, onkeyup</td>
                </tr>
            </table>
        </div>

    </body>

</html>

