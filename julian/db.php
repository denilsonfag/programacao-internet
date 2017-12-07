<?php
	class db {

			//host
			private $host = 'localhost';

			//usuario
			private $usuario = 'root';

			//senha
			private $senha = '';

			//banco de dados
			private $database = 'julian';

			public function conecta_mysql(){
				//criando conexão com o banco
				$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

				//ajusta o charset de comunicação entre a aplicação e o banco de dados
				mysqli_set_charset($con, 'utf8');

				//verificar se houve erro de conexão
				if(mysqli_connect_errno()){
					echo 'Houve um erro ao tenntar se conectar com o BD: '.mysqli_connect_error();
				}
				return $con;
			}
	}

?>
