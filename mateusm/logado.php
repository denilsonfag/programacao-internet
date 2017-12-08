<?php 

session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
	echo"<script language='javascript' type='text/javascript'>alert('Erro: Esse login ja está em uso');window.location.href='index.php';</script>";
	header('Location: index.php');

}



 ?>

 <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logado.css">
    <link rel="stylesheet" href="css/logout.css">
    <title>Caracteres Especiais</title>
    
</head>

<body>
    <div id="interface">
        <header id="page-header">
            <div id="logout">
                <?php 
                echo "Bem Vindo " . $_SESSION['login'];
                 ?>
                <form action="logout.php" method="post" class="form-logout"> 
                <button type="submit" class="btn btn-lg btn-primary btn-block">Logout</button> 
             </form>
            <?php include '../page-header.html'; ?>


            </div>

        </header>

        <nav id="side-menu">
            <h2>Git</h2>
        <ul>
            <li><a href="../css3/gradiente.php">Gradiente em CSS3</a></li>
             <li><a href="../php/forms.php">Formulario em PHP</a></li>
            <li><a href="../git/func-basico.html">Funcionamento básico</a></li>
            <li><a href="../git/ambiente-desenvolvimento.html">Ambiente de desenvolvimento</a></li>
            <li><a href="../git/atualizacao-repositorio.html">Passos para atualização do repositório original
                (entrega dos trabalhos)</a></li>
        </ul>
        </nav>

        <article id="conteudo">
            <h1 class="titulo">Caracteres Especiais</h1>
            <p>Alguns caracteres como acentuação e definidos como "caracteres especiais" não são facilmente implementado no HTML, é necessário usar um metodo para escape.</br>
            Os Principais são.</p>

            <pre>            Caractere / Modelo</br>   
            Á ------ &amp;Aacute;
            á -------- &amp;aacute;
            Â -------- &amp;Acirc;
            â -------- &amp;acirc;
            À -------- &amp;Agrave;
            à --------  &amp;agrave;
            Å -------- &amp;Aring;
            å -------- &amp;aring;
            Ã -------- &amp;Atilde;
            ã -------- &amp;atilde;
            Ä -------- &amp;Auml;
            ä -------- &amp;auml;
            Æ -------- &amp;AElig;
            æ -------- &amp;aelig;
            É -------- &amp;Eacute;
            é -------- &amp;eacute;
            Ê -------- &amp;Ecirc;
            ê -------- &amp;ecirc;
            È -------- &amp;Egrave;
            è -------- &amp;egrave;
            Ë -------- &amp;Euml;
            ë -------- &amp;euml;
            Ð -------- &amp;ETH;
            ð ------ &amp;eth;
            Í -------- &amp;Iacute;
            í -------- &amp;iacute;
            Î -------- &amp;Icirc;
            î -------- &amp;icirc;
            Ì -------- &amp;Igrave;
            ì -------- &amp;igrave;
            Ï -------- &amp;Iuml;
            ï -------- &amp;iuml;
            Ó -------- &amp;Oacute;
            ó -------- &amp;oacute;
            Ô -------- &amp;Ocirc;
            ô -------- &amp;ocirc;
            Ò -------- &amp;Ograve;
            ò -------- &amp;ograve;
            Ø -------- &amp;Oslash;
            ø -------- &amp;oslash;
            Õ -------- &amp;Otilde;
            õ -------- &amp;otilde;
            Ö -------- &amp;Ouml;
            ö -------- &amp;ouml;
            Ú -------- &amp;Uacute;
            ú -------- &amp;uacute;
            Û -------- &amp;Ucirc;
            û -------- &amp;ucirc;
            Ù -------- &amp;Ugrave;
            ù -------- &amp;ugrave;
            Ü -------- &amp;Uuml;
            ü -------- &amp;uuml;
            Ç -------- &amp;Ccedil;
            ç -------- &amp;ccedil;
            Ñ -------- &amp;Ntilde;
            ñ -------- &amp;ntilde;
            &lt; -------- &amp;lt;
            &gt; -------- &amp;gt;
            &amp; -------- &amp;amp;
            " -------- &amp;quot;
            ® -------- &amp;reg;
            © --------  &amp;copy;
            Ý -------- &amp;Yacute;
            ý -------- &amp;yacute;
            Þ -------- &amp;THORN;
            þ -------- &amp;thorn;
            ß --------- &amp;szlig;
    </pre>
            </table>

            </article>
             <footer id="page-footer">
                <?php include '../page-footer.html'; ?>
            </footer>
    </div>
</body>

</html>
