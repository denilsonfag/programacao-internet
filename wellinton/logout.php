<!-- 
Wellinton Vieira
Programação para Internet I
 -->
<?php  
	session_start();
	$token = md5(session_id());
	if(isset($_GET['token']) && $_GET['token'] === $token) {
	   session_destroy();
	   header("location: index.php");
	   exit();
	} else {
	   echo '<a href="logout.php?token='.$token.'>Deseja Sair?</a>';
	}
?>