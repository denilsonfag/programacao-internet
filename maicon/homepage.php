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
<html>
<head>
	<meta charset="utf-8">
	<title>FlexBox</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/home.css" >
</head>
<body>
      <div class="hero">
      	<p>Pagina <span>desenvolvida</span> por</p>
      		<h1>Maicon<span>Fuck</span></h1>
      	<p>Contato: maikonsx@gmail.com</p>
      	<a href="logout.php" class="btn">Sair</a>
      </div>

      <div class="tarefas">
          <div class="tarefa">
              <h2>Listas</h2>
              <p>Avaliação sobre o conhecimento do aluno em relação à criação de páginas HTML.</p>
              <a href="listas.php" class="btn">Ir!</a>
          </div>
          <div class="tarefa">
              <h2>Backgrounds</h2>
              <p>Avaliação sobre o conhecimento do aluno em relação à criação de páginas HTML com estilos CSS.</p>
              <a href="backgrounds.php" class="btn">Ir!</a>
          </div>
          <div class="tarefa">
              <h2>Media Query</h2>
              <p>Avaliar o conhecimento do aluno em relação à criação de páginas HTML com layout responsivo utilizando CSS.</p>
              <a href="mediaquery.php" class="btn">Ir!</a>
          </div>
      </div>

<div class="cta">
  <div class="cta-text">
    <h2>Página <span>de Login</span></h2>
    <p>Página desenvolvida com o intuito de realizar um login em php, com cadastro de usuários na base de dados local.</p>
  </div>
</div>
</body>
</html>
