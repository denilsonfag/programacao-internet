<?php

	
		$login = $_POST['inputLogin'];
		$senha = MD5($_POST['inputPassword']);
		$nome = ($_POST['inputNome']);
		
		
		    $connect = mysqli_connect('localhost','root','');
		        $db = mysqli_select_db($connect,'cadasto');
		        $query_select = "SELECT login FROM pessoa WHERE Login = '$login'";
		        $select = mysqli_query($connect, $query_select);
		        $array = mysqli_fetch_array($select);
		        $logarray = $array['login'];
		    if($logarray == $login){
		        echo"<script language='javascript' type='text/javascript'>alert('Erro: Esse login ja está em uso');window.location.href='cadastrarInterface.php';</script>";
		        die();
		      }
		        
		        $query = "INSERT INTO pessoa (Nome, Login, Senha) VALUES ('$nome','$login','$senha')";
		        $busca = mysqli_query($connect, $query);
		        if($busca){
		          echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href='index.php'</script>";
		        }else{
		          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrarInterface.php'</script>";
		        }
?>