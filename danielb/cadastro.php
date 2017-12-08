<?php

// inclui o arquivo de inicialização
require 'init.php';

// resgata variáveis do formulário
$usua_nome = isset($_POST['usua_nome']) ? $_POST['usua_nome'] : '';
$usua_senh = isset($_POST['usua_senh']) ? $_POST['usua_senh'] : '';

if (empty($usua_nome) || empty($usua_senh))
{
    echo "Informe usuario e senhaewfsdafsdafsd";
    exit;
}

// cria o hash da senha
$usua_senhaHASH = make_hash($usua_senh);

$PDO = db_connect();

$sql = "insert into usuarios(usua_nome, usua_senh) values(:usua_nome, :usua_senh)";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':usua_nome', $usua_nome);
$stmt->bindParam(':usua_senh', $usua_senhaHASH);

$stmt->execute();

header('Location: form-login.php');
