<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="_css/main.css">


</head>

<body>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastrar - se</a></li>
        <li class="tab"><a href="#login">Entrar</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Registre - se</h1>

            <form action="cadastro.php" method="post">

                <div class="field-wrap">
                    <label>
                        Usuário<span class="req">*</span>
                    </label>
                    <input type="text" required autocomplete="off" name="usua_nome" id="usua_nome"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Senha<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off" name="usua_senh" id="usua_senh"/>
                </div>

                <button type="submit" class="button button-block"/>Cadastre - se</button>

            </form>

        </div>

        <div id="login">
            <h1>Bem Vindo !</h1>

            <form action="login.php" method="post">

                <div class="field-wrap">
                    <label>
                        Usuário<span class="req">*</span>
                    </label>
                    <input type="text"required autocomplete="off" name="usua_nome" id="usua_nome"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Senha<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off" name="usua_senh" id="usua_senh"/>
                </div>

                <p class="forgot"><a href="#">Esqueceu sua senha?</a></p>

                <button class="button button-block"/>Entrar</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="_js/index.js"></script>

</body>
</html>
