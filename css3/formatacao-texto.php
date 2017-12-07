<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css" >
    <title>HTML 5</title>
    <style>

        #interface{
            display: flex;
            flex-flow: row wrap;
        }
        #interface > *{
            flex: 1 100%;
        }

        @media all and (min-width: 800px) {
            #side-menu {
                flex: 1;
            }
            #artigo {
                flex: 4;
            }


        body {
            background-color: white;
        }

        h1 {
            color: black;
            text-align: center;
            text-decoration: underline;
        }
        h2 {
            color: black;
        }
        h3 {
            color: green;
        }
        h4 {
            text-align: center;
        }
        h5 {
            text-decoration: underline;
        }
        h6{
            font-size: 15px;
            text-indent: 50px;
        }
        h7{
            letter-spacing:15px
        }
        h8{
            line-height: 4
        }
        h9{
            direction: rtl;
        }
        h10{
            word-spacing: 20px;
        }
        h11{
            text-shadow: 5px -9px 3px #000;
        }
        h12{
            hyphens: auto;
        }

        p {
            font-family: verdana;
            font-size: 15px;
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
        <article id = "artigo">
            <h1>FORMATACOES DE TEXTO</h1>

            <h2>Alteracao de Cores</h2>

                <p>Para alterar cores de texto usa-se a funcao "COLOR", por exemplo: h1 {
                color: green;
                } Tudo que estiver dentro da TAG h1, sera da cor escolhida.</p>

            <h3>A cor da letra mudou.</h3>

            <h2>Alteracao de Alinhamento</h2>

                <p>Para alterar o alinhamento do texto, usa-se a funcao "TEXT-ALIGN", por exemplo: h1 {
                text-align: center;
                } Tudo que estiver dentro da TAG h1, sera centralizado.

            <h4>O texto foi centralizado.</h4>

            <h2>Decoracao de Texto</h2>
                <p>Para alterar a decoracao de texto, podemos usar a funcao text-decoration, por exemplo h5 {
                text-decoration: underline;    }, tudo que estiver dentro da tag h5, estara sublinhado.</p>
            <h5>Este texto esta sublinhado.</h5>

            <h2>Transformacao e Direcao de Texto</h2>
                <p>Esta funcao nos permite aplicar transformacoes em elementos 2D e 3D, como por exemplo o texto abaixo. Usando a funcao "direction: rtl;", podemaos alterar a direcao conforme eh escrito.</p>
            <div>Este texto contem uma transformacao e uma alteracao de direcao.</div>

            <h2>Indentacao</h2>
                <p>Esta funcao permite adicionar um espacamento quando inicia um novo paragrafo, como texto abaixo.</p>
            <h6>Este texto contem uma Indentacao</h6>

            <h2>Espacamento das letras</h2>
                <p>Esta funcao permite controlar o espacamento entre as letras do paragrafo, usando "letter-spacing", como por exemplo abaixo.</p>
            <h7>Este texto contem espacamento nas letras.</h7>

            <h2>Altura da Linha</h2>
                <p>Nesta funcao, permite controlar a altura das linhas conforme desejado, usando o "line-height", como por exemplo abaixo.</p>
            <h8>Este texto contem espacamento entre as linhas, Este texto contem espacamento entre as linhas, Este texto contem espacamento entre as linhas, Este texto contem espacamento entre as linhas, Este texto contem espacamento entre as linhas.</h8>

            <h2>Direcao de Texto</h2>
                <p>O CSS permite alterar a direcao do texto, como por exemplo alterar a escrita da direita para esquerda, usando a funcao direction.                Como no exemplo abaixo.</p>
            <h9>Este texto esta com a direcao alterada.</h9>

            <h2>Espacamento Entre Palavras</h2>
                <p>Esta funcao permite alterar o espacamento entre as palavras, usando "word-spacing", como o exemplo abaixo.</p>
            <h10>Este texto contem espacamento entre palavras.</h10>

            <h2>Sombra</h2>
                <p>Esta funcao permite criar uma sombra envolta do texto, usando "text-shadow: 5px -9px 3px #000;", como no texto abaixo.</p>
            <h11>Este texto contem uma sombra.</h11>

            <h2>Hifenizacao</h2>
                <p>Esta funcao insere automaticamente os hifens no texto, usando o "hyphens: auto;"</p>
        </article>

        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
