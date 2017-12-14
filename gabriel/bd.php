<?php 
	

DEFINE ('BD_USUARIO','gabriel');

DEFINE ('BD_SENHA','0898');

DEFINE ('BD_HOST','localhost');

DEFINE ('BD_NOME','login');

	function conexao(){

		$conecta = mysqli_connect(BD_HOST, BD_USUARIO, BD_SENHA) or print(mysqli_connect_error());
		mysqli_select_db($conecta, BD_NOME) or print(mysqli_query());


		if (!$conecta){
			trigger_error('não foi possivel estabelecer a conexão:') . mysqli_connect_error();
			}	
		return($conecta);

	}
?>
