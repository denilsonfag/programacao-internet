<?php #  mysqli_connect.php OK

	//Este arquivo estabelece a uma conexão com o banco de dados

	DEFINE ('BD_USUARIO', 'joao');
	DEFINE ('BD_SENHA', 'bandaDjavu');
	DEFINE ('BD_HOST', 'localhost');
	DEFINE ('BD_NOME', 'joaopaulo');

	// Faz a conexão:
	$bdc = @mysqli_connect (BD_HOST, BD_USUARIO, BD_SENHA, BD_NOME);

	if(!$bdc){
		trigger_error ('Não foi possivel estabelecer uma conexão com o MySQL: ' . mysqli_connect_error() );
	}

?>
