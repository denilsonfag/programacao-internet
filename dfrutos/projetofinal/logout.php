<?php
    session_start();
    if(session_destroy()) { // Destroying All Sessions 
	   header("Location: ../../dfrutos/projetofinal/index.php"); // Redirecting To Home Page
    }
?>