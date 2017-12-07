<?php

$mysqli = new mysqli("127.0.0.1", "denilson", "denishow", "fernanda");

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>