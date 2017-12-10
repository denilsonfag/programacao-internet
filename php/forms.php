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
    <link rel="stylesheet" href="../styles/main.css" >
    <link rel="stylesheet" href="../mateusm/css/logout.css" >
    <title>MANIPULAÇÃO DE FORMULARIO PHP</title>
</head>
<body>
    <div id="interface">
        <header id="page-header"><div id="logout">
                <?php 
                echo "Bem Vindo " . $_SESSION['login'];
                 ?>
                <form action="../mateusm/logout.php" method="post" class="form-logout"> 
                <button type="submit" class="btn btn-lg btn-primary btn-block">Logout</button> 
             </form>
            <?php include '../page-header.html'; ?>


            </div>

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

                    <div id = implements>
                    <form action="welcome.php" method="post">
                    Name: <input type="text" name="name"><br></br>
                    E-mail: <input type="text" name="email"><br>
                    </br>
                    <input type="submit">
                    </form>
                    </div>
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
            </div>


            <h5>
            </br></br>
            E podendo ser exibido dessa maneira!

            </h5>

            <div id = code>
            </br>
                    &lt;html>
                    &lt;body&gt;</br>

                    &lt;Welcome <?php echo $_GET["name"]; ?>&gt;<br>
                    &lt;Your email address is: <?php echo $_GET["email"]; ?> &gt;</br>

                    &lt;/body&gt;</br>
                    &lt;/html&gt;</br>
            </div>


            <div id = implements>
            </br></br></br>
                     <html>
                    <body>

                    Welcome <?php echo $_GET["name"]; ?><br>
                    Your email address is: <?php echo $_GET["email"]; ?>

                    </body>
                    </html>
                    </div>




            <h5>

            PHP VALIDAÇÃO DE FORMULÁRIOS.

            <h1>Text Fields</h1>

            <form action="welcome.php" method="post"></br>
                    Name: <input type="text" name="name"></br>
                     E-mail: <input type="text" name="email"></br>
                     Website: <input type="text" name="website"></br>
                     Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                    </br>

                    </form>



            </br></br>
            Codigo exemplo! </h5>
            </br>
            <div id = code>
            </br>
                    &lt;html></br>
                    &lt;body&gt;</br>
            ;Name: &lt;input type="text" name="name"&gt;</br>
            E-mail: &lt;input type="text" name="email"&gt;</br>
            Website: &lt;input type="text" name="website"&gt;</br>
            Comment: &lt;textarea name="comment" rows="5" cols="40">&lt;/textarea&gt;</br>
            </div>




            <h1>

            Botões Rádio
            </h1>

             <form action="welcome.php" method="post"></br>
                    Genero
                    <input type="radio" name="genero" value="feminino">Feminino
                    <input type="radio" name="genero" value="masculino">Masculino
                    </br>

                    </form>



            </br></br>
            Codigo exemplo! </h5>
            </br>
            <div id = code>
            </br>
                    &lt;html></br>
                    &lt;body&gt;</br>
            Genero</br>
                    &lt;input type="radio" name="genero" value="feminino"&gt;Feminino</br>
                    &lt;input type="radio" name="genero" value="masculino"&gt;Masculino
                    </br>

                    </form>
            </div>


           <h1>PHP - Mantenha os valores no formulário</h1>


                    Name: <input type="text" name="name" value="<?php echo $name;?>"></br>

                    E-mail: <input type="text" name="email" value="<?php echo $email;?>"></br>

                    Website: <input type="text" name="website" value="<?php echo $website;?>"></br>

                    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></br>

                    Gender:
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="female") echo "checked";?>
                    value="female">Female
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="male") echo "checked";?>
                    value="male">Male





            </br></br>
            Codigo exemplo! </h5>
            </br>
            <div id = code>
            </br>
                    &lt;html></br>
                    &lt;body&gt;</br>
            Name: &lt;input type="text" name="name" value="<?php echo $name;?>"&gt;</br>

                    E-mail: &lt;input type="text" name="email" value="<?php echo $email;?>"&gt;</br>

                    Website: &lt;input type="text" name="website" value="<?php echo $website;?>"&gt;</br>

                    Comment: &lt;textarea name="comment" rows="5" cols="40">

                <?php echo $comment;?>&gt; &lt;/textarea&gt;</br>

                    Gender:
                    &lt;input type="radio" name="gender"&gt;
                    &lt;?php if (isset($gender) && $gender=="female") echo "checked";?&gt;
                    value="female">Female&gt;
                    &lt;input type="radio" name="gender"&gt;
                    &lt;?php if (isset($gender) && $gender=="male") echo "checked";&gt;?>
                    value="male">Male
                    </br>

                    </form>
            </div>


















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
