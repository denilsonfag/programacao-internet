<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Tabelas</title>
    <style>
        * {
            font-family: sans-serif;
        }

        pre {
            background-color: #ededed;
            padding-top: 20px;
            align-content: center;
        }

        h1.laranja,
        h2.laranja {
            text-align: center;
            background-color: #e88d1e;
            color: white;
            padding: 4px;
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        #interface{
            display: flex;
            flex-flow: row wrap;

        }

        #interface > * {
            flex: 1 100%;

        }
        #side-menu ul li{
            display: inline;
            padding: 0px;
        }
        #side-menu ul{
           list-style-type: none;

        }


         @media all and (min-width: 800px) {

             #side-menu {
                 flex: 1;
             }
             article#artigo{
                 flex: 4;
             }


        #side-menu  ul li{
            display: list-item;
            padding: 2px
        }
        }
    </style>
</head>

<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu-h.html'; ?>
        </nav>

        <article id="artigo">
            <h1 class="laranja">Tabelas em HTML</h1>
            <p>As tabelas são definidas com a tag &lttable&gt. Uma tabela é dividida em linhas (com a tag &lttr&gt), e cada linha é dividida em células de dados (com a tag &lttd&gt). As letras td significam "table data," que é o conteúdo de uma célula de dados. Uma célula de dados pode conter texto, imagens, listas, parágrafos, formulários, filetes horizontias, tabelas, etc.</p>

            <pre>
        &lt;table&gt;
        &lt;tr&gt;
            &lt;td&gt;linha 1, célula 1&lt;/td&gt;
            &lt;td&gt;linha 1, célula 2&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;linha 2, célula 1&lt;/td&gt;
            &lt;td&gt;linha 2, célula 2&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/table&gt;
    </pre>

            <p>No navegador apareceria algo do genero:</p>
            <table id="borda">
                <tr>
                    <td>linha 1, célula 1</td>
                    <td>linha 1, célula 2</td>
                </tr>
                <tr>
                    <td>linha 2, célula 1</td>
                    <td>linha 2, célula 2</td>
                </tr>
            </table>

            <h2 class="laranja">O atribudo border:</h2>
            <p>Se não for especificados um elemento border, a tabela sera exibida sem ela, sem as linhas que separam as colunas/linhas.</p>


            <h2 class="laranja">Existem mais atributos?</h2>
            <p>Claro que sim, podemos ter atributos como: width, align(alinhamento horizontal da tabela, linha ou celula) e valign(alinhamento vertical </p>
            <h2 class="laranja">Por exemplo:</h2>
            <pre>
       &lttd align="right" valign="top">Célula 1&lt/td&gt
   </pre>

            <h2 class="laranja">Cabeçalhos de uma tabela:</h2>
            <p>Os cabeçalhos de uma tabela são definidos com a tag &ltth&gt:</p>
            <pre>
        &lt;table&gt;
        &lt;tr&gt;
            &lt;th&gt; Cabeçalho1 &lt;/th&gt;
            &lt;th&gt; Cabeçalho2 &lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;linha 1, célula 1&lt;/td&gt;
            &lt;td&gt;linha 1, célula 2&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;linha 2, célula 1&lt;/td&gt;
            &lt;td&gt;linha 2, célula 2&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/table&gt;
    </pre>

            <h2 class="laranja">A visualização ficaria assim:</h2>

            <table>
                <tr>
                    <th> Cabeçalho1 </th>
                    <th> Cabeçalho2 </th>
                </tr>
                <tr>
                    <td>linha 1, célula 1</td>
                    <td>linha 1, célula 2</td>
                </tr>
                <tr>
                    <td>linha 2, célula 1</td>
                    <td>linha 2, célula 2</td>
                </tr>
            </table>

            <h2 class="laranja">Tags de Tabela</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Tag</th>
                        <th>Descrição</th>
                    </tr>
                    <tr>
                        <td>&lt;table&gt;</td>
                        <td>Define uma tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;th&gt;</td>
                        <td>Define um cabeçalho de tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;tr&gt;</td>
                        <td>Define uma linha de tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;td&gt;</td>
                        <td>Define uma célula de tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;caption&gt;</td>
                        <td>Define um título de tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;colgroup&gt;</td>
                        <td>Define um grupo de colunas de tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;col&gt;</td>
                        <td>Define os valores de atributo para uma ou mais colunas em uma tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;thead&gt;</td>
                        <td>Define um cabeçalho de tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;tbody&gt;</td>
                        <td>Define o corpo de uma tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;tfoot&gt;</td>
                        <td>Defines o rodapé (footer) de uma tabela</td>
                    </tr>
                    <tr>
                        <td>&lt;colspan&gt;</td>
                        <td>Indicar quantas colunas estarão contidas em uma célula</td>
                    </tr>
                    <tr>
                        <td>&lt;rowspan&gt;</td>
                        <td>Indicar quantas colunas estarão contidas em uma célula</td>
                    </tr>
                </tbody>
            </table>

            <h2 class="laranja">Colspan e Rowspan</h2>

            <p>O Colspan usamos para expandirmos células para que fiquem do tamanho de quantas colunas quisermos. Vamos a um exemplo prático:</p>
            <pre>
        &lt;table&gt;
        &lt;tr&gt;
            &lt;td colspan="2"&gt;linha 1, célula 1&lt;/td&gt
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;linha 2, célula 1&lt;/td&gt;
            &lt;td&gt;linha 2, célula 2&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/table&gt;
    </pre>

            <p>Sera renderizado assim:</p>

            <table>
                <tr>
                    <td colspan="2">linha 1, célula 1</td>
                </tr>
                <tr>
                    <td>linha 2, célula 1</td>
                    <td>linha 2, célula 2</td>
                </tr>
            </table>

            <p>O Rowspan usamos para expandirmos Colunas para que fiquem do tamanho de quantas celulas quisermos. Vamos a um exemplo prático:</p>
            <pre>
        &lt;table&gt;
        &lt;tr&gt;
            &lt;td rowspan="2"&gt;linha 1, célula 1&lt;/td&gt
            &lt;td&gt;linha 1, célula 2&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;linha 2, célula 1&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/table&gt;
    </pre>

            <p>Sera renderizado assim:</p>
            <table>
                <tr>
                    <td rowspan="2">linha 1, célula 1</td>
                    <td>linha 1, célula2</td>
                </tr>
                <tr>
                    <td>linha 2, célula 2</td>
                </tr>
            </table>

            <footer id="page-footer">
                <?php include '../page-footer.html'; ?>
            </footer>
    </div>
</body>

</html>
