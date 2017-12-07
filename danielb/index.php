<?php
session_start();

require 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/main.css" >
    <title>Programação para Internet</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php if (isLoggedIn()): ?>

    <div id="interface">
        <header id="page-header">
            <?php include 'page-header.php'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu.html'; ?>

        </nav>
        <h1>Seja bem vindo <?php echo $_SESSION['usua_nome'] ?>!!!</h1>

        <footer id="page-footer">
            <?php include 'page-footer.html'; ?>
        </footer>
    </div>

<?php else: ?>
    <div id="interface">
        <header id="page-header">
            <?php include 'page-header.php'; ?>
        </header>

        <nav id="side-menu">
            <p><a href="form-login.php">Conectar</a> </p>
        </nav>

        <footer id="page-footer">
            <?php include 'page-footer.html'; ?>
        </footer>
    </div>

<div


<?php endif; ?>

</body>
</html>


