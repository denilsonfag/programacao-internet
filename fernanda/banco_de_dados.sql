-- Banco de Dados Simples para Cadastro de Usuários --
-- Version 1.0 --

-- All rights reserved to Fernanda Machado Belem. --

--
-- Criando o banco 
--

CREATE DATABASE IF NOT EXISTS fernanda ;

--
-- Iniciando a utilização do banco 
--

USE  fernanda;

--
-- Criando um usuário 
--

CREATE USER 'denilson'@'localhost' IDENTIFIED BY 'denishow';

--
-- Estrutura de tabela para a tabela 'usuarios'
--

CREATE TABLE usuarios (
	id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_usuario VARCHAR(70) NOT NULL UNIQUE,
	senha_usuario VARCHAR(20) NOT NULL
);

-- 
-- Concedendo permissões a um usuário
--
 
GRANT INSERT, SELECT ON fernanda.usuarios TO 'denilson'@'localhost';


