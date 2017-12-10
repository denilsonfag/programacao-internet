<?php
    session_start();
    if(session_destroy()) { // Destrói todas as sessões
	   header("Location: ../../dfrutos/projetofinal/index.php"); // Redireciona para a Home Page
    }
?>