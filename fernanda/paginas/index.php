<?php
session_start();
if((!isset ($_SESSION['nome']) == true))
{
    unset($_SESSION['nome']);
    header('location:../index.php');
    }

?>
