<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>MANIPULAÇÃO DE FORMAS PHP</title>
</head>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <article>
               <h1>Exemplo de codigo.</h1>

                
                    <div id = code>&lt;html&gt;</br>
                    &lt;body&gt;</br>

                    &lt;form action="welcome.php" method="post"&gt;</br>
                    &lt;Name: input type="texto" name="Nome"&gt;</br>
                    &lt;E-mail: input type="texto" name="email"&gt;</br>
                    &lt;input type="submit"&gt;</br>
                    &lt;/form&gt;</br>

                    &lt;/body&gt;</br>
                    &lt;/html&gt;</br></br></br>
                    </h4>
                </div>

                Agora esse exemplo implementado ficaria assim!!!

                </br></br>
                <html>
                    <body>

                    <form action="welcome.php" method="post">
                    Name: <input type="text" name="name"><br></br>
                    E-mail: <input type="text" name="email"><br>
                    </br>
                    <input type="submit">
                    </form>

                    </body>
                </html></br></br></br>

                <h5>
                  Quando o usuário preenche o formulário acima e clica no botão enviar, os dados do formulário são enviados para processamento para um arquivo PHP chamado "welcome.php". Os dados do formulário são enviados com o método HTTP POST.

                 Para exibir os dados enviados, você pode simplesmente repetir todas as variáveis. O "welcome.php" parece assim:
                
                </h5>
                    <div id = code>
                    &lt;html&gt;</br>
                        &lt;body&gt;</br>

                            Welcome &lt;?php echo $_POST["name"]; ?&gt;<br>
                            Your email address is: &lt;?php echo</br> $_POST["email"]; ?&gt;</br>

                        &lt;/body&gt;</br>
                    &lt;/html&gt;</br>
                    </div>


            <br>

            <h5>
                E é gravado no arquivo os dados digitados pelo usuário.

                ex.
                Bem Vindo John
                Seu email é john.doe@example.com
            </h5>

            O mesmo resultado também pode ser alcançado usando o método HTTP GET:

            <div id = code>
            &lt;html&gt;</br>
            &lt;body&gt;</br>

            &lt;form action="welcome_get.php" method="get"&gt;</br>
            Name: &lt;input type="text" name="name"&gt;</br><br>
            E-mail: &lt;input type="text" name="email"&gt;</br><br>
            &lt;input type="submit"&gt;</br>
            &lt;/form&gt;</br>

            &lt;/body&gt;</br>
            &lt;/html&gt;</br>


        </article>

        <nav id="side-menu">
            <?php include 'side-menu-h.html'; ?>
        </nav>

        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
