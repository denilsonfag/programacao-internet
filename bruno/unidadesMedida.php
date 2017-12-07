<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}

?>

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

        #interface {
            display: flex;
            flex-flow: row wrap;
        }

        #interface>* {
            flex: 1 100%;
        }

        #side-menu ul li {
            display: inline;
            padding: 5px;
        }

        #side-menu ul {
            list-style-type: none;
            padding: 0;
        }

        @media all and (min-width: 800px) {
            #side-menu {
                flex: 1;
            }
            article#artigo {
                flex: 4;
            }
            #side-menu ul li {
                display: list-item;
                padding: 5px;
            }
        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>

   <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Programação WEB</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Unidades de Medida</a></li>
                <li><a href="tabelas.php">Tabelas</a></li>
                <li><a href="echoPrint.php">Echo e Print</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"><span class="glyphicon glyphicon-user"></span>
          <?php
        $user = $_SESSION['login'];
	       echo "Bem vindo $user";
          ?>
          </a>
                </li>
                <li><a href="logout.php?token='.md5(session_id()).'"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

    <div id="interface">


        <nav id="side-menu">
            <?php include '../css3/side-menu-c.html'; ?>
        </nav>


        <article id="artigo">
            <h1 class="laranja">Unidades de Medida em CSS</h1>
            <p>As unidades de medida CSS geralmente são dividadas em dois grupos:</p>
            <h2 class="laranja">Unidades de Medida de Distancia</h2>
            <h3>Medidas Relativas</h3>
            <ul>
                <li>Para fontes: em, ex, ch, rem</li>
                <li>Porcentagem da viewport: vw, vh, vmin, vmax
                </li>
                <li>A especificação do W3C classifica tecnicamente a porcentagem (%) como tipo de dado e não unidade de medida.</li>
            </ul>
            <h3>Medidas Absolutas</h3>
            <ul>
                <li>Unidades cm, mm, q, in, pt, pc, px</li>
            </ul>
            <h2 class="laranja">Unidades de Medidas para Outras Quantidades</h2>
            <ul>
                <li>Ângulos: deg, grad, rad, turn
                </li>
                <li>Duração: s, ms
                </li>
                <li>Frequência: Hz, kHz
                </li>
                <li>Resolução: dpi, dpcm, dppx
                </li>
            </ul>
            <h2 class="laranja">Unidades de medidas de distância &lt;length>
            </h2>
            <p>As unidades de medida de distância definem medidas na horizontal, na vertical ou em qualquer direção.
            </p>
            <h2 class="laranja">Medidas de Distância Relativas</h2>
            <p>São medidas calculadas em relação a uma outra unidade de medida. Usar unidades de medidas relativas é mais apropriado para se obter ajustes em diferentes tipos de mídia. (por exemplo: ajustar de uma tela de monitor para uma impressora laser).
                <p>O valor é tomado em relação:</p>
                <ul>
                    <li>em: ao tamanho da fonte ('font-size') do elemento no qual a unidade é declarada;</li>
                    <li>ex: a altura da letra x (xis) da fonte herdada;</li>
                    <li> ch: a largura acrescida do espaçamanto em volta do número 0 (zero) da fonte do elemento no qual a unidade é declarada;</li>
                    <li>rem: ao tamanho da fonte ('font-size') do elemento raiz do documento.</li>
                </ul>
                <p>O valor é igual a:</p>
                <ul>
                    <li> cm - centímetro: 96px/2.54;</li>
                    <li>mm - milímetro: 1/10cm;</li>
                    <li>q - 1/4 do milímetro: 1/40cm;</li>
                    <li>in - polegada: 2,54cm = 96px;</li>
                    <li> pc - pica: 12 points ou 1/6in;</li>
                    <li>pt - point: 1/72in;</li>
                    <li>px - pixel: 1/96in;</li>
                </ul>
                <p>Unidades de medidas para outras quantidades</p>

                <ul>
                    <li>Ângulos: unidades: deg, grad, rad, turn
                    </li>
                    <li>Duração: unidades s, ms
                    </li>
                    <li>Frequência: unidades Hz, kHz
                    </li>
                    <li>Resolução: unidades dpi, dpcm, dppx
                    </li>
                </ul>
                <h1 class="laranja">Exemplo de Uso</h1>
                <ol>
                    <li>div { margin:1.5em; }</li>
                    <li> h4 { margin: 2ex; }</li>
                    <li> p { font-size: 14px; }</li>
                    <li>.classe { padding: 90%; }</li>
                    <li>hr { width: 14pt; }</li>
                    <li>h1 { margin: 1pc; }</li>
                    <li>h2 { font-size: 4mm; }</li>
                    <li>p.classe { padding: 0.3cm; }</li>
                    <li>h5.classe { padding: 0.5in; }</li>
                    <li>@media ( min-resolution: 2dppx ) { ... }</li>
                    <li>background-image: linear-gradient( 45deg, white, black );</li>
                    <li>div { width: 50vw; }</li>
                </ol>

        </article>
        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>

</html>
