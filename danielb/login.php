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

$sql = "SELECT usua_codi, usua_nome FROM usuarios WHERE usua_nome = :usua_nome AND usua_senh = :usua_senh";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':usua_nome', $usua_nome);
$stmt->bindParam(':usua_senh', $usua_senhaHASH);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['usua_codi'] = $user['usua_codi'];
$_SESSION['usua_nome'] = $user['usua_nome'];

header('Location: index.php');
