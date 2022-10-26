<?php

$hostname = "localhost";
$user = "root";
$senha = "";
$db = "cadastro";

$mysqli = new mysqli($hostname, $user, $senha, $db);

if($mysqli->connect_errno)
 
?>
