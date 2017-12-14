<?php

// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'danielb');
define('DB_PASS', 'password');
define('DB_NAME', 'danielb');

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);

// inclui o arquivo de funçõees
require_once 'functions.php';
