<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
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
        }

    </style>
</head>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>
        <nav id="side-menu">
            <?php include '../side-menu-h.html'; ?>
        </nav>
        <article id = "artigo">
            <table border="0" width="100%" align="center">

            <tr>
                <td align="right">
                    <a href="formatacao-texto.php">Formatações de Texto</a> |
                    <a href="EstruturasCondicionais.php">Estruturas Condicionais</a> |
                    <a href="arquivos.php">Home</a> |
                    <a href="logout.php">Sair</a>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <h1>CANVAS</h1>

            <h2>O que é?</h2>
            <p>Adicionado ao HTML5, o elemento HTML canvas é um elemento que pode ser usado para desenhar gráficos via código (nomalmente JavaScript). Por exemplo, ele pode ser usado para desenhar gráficos, fazer composição de fotos, criar animações ou até mesmo fazer processamento ou renderização de vídeo em tempo real.</p>
            <p>Aplicativos Mozilla ganharam suporte ao canvas a partir do Gecko 1.8 (por exemplo Firefox 1.5). O elemento foi originalmente introduzido pela Apple para o OS X Dashboard e Safari. Internet Explorer suporta canvas a partir da versão 9; para versões mais antigas do IE, uma página pode efetivamente adicionar suporte para canvas ao incluir um código do projeto da Google chamado Explorer Canvas. Google Chrome e Opera 9 também suportam canvas.</p>
            <p>Segue um link para os tutoriais em desenvolvimento Canvas e tambem um exemplo de gráficos produzidos pelo mesmo!    <a href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial">Canvas Tutoriais</a></p>

            <img src="../images/canvas.jpg" alt="canvas" style="width:450px;height:350px;">

            <h3>Como Utilizar?  </h3>

            <p>Usar o elemento não é muito difícil, mas antes de começar, você precisa de um conhecimento básico sobre HTML e JavaScript. O elemento não é suportado por alguns navegadores antigos, mas é suportado em versões recentes da maioria dos navegadores. O tamanho padrão de um canvas é de 300px * 150px (largura * altura). Porém, tamanhos customizados podem ser definidos usando as propriedades width e height do CSS. Por exemplo este retangulo abaixo.</p>
            <canvas class="canvas" width="200" height="100" style="border:1px solid #000;"></canvas>

            <p>Diferente do SVG , o canvas suporta somente formas primitivas: retangulos. Por exemplo:</p>
            <canvas class="canvas" width="50" height="100" style="border:1px solid #000;"></canvas>
            <canvas id="canvas" width="75" height="150" style="border:1px solid #000;"></canvas>
    </table>
</p><hr size="5">
        </article>



        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
