<!--
Wellinton Vieira
Programação para Internet I
 -->

<?php
	$conn = new mysqli("localhost", "root", "123", "wellinton");
	if ($conn->connect_error) {
	    die("Erro: " . $conn->connect_error);
	}
?>
