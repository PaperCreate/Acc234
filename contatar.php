<?php
include("dbmensagem.php");

    
$usuario = $_POST['usuario'];
$email = $_POST['e-mail'];
$mensagem = $_POST['mensagem'];
    
$envio = "INSERT INTO mensagens(nome_completo, email, mensagem) VALUES('$usuario', '$email', '$mensagem')";
mysqli_query($mysqli, $envio);
mysqli_close($mysqli);

?>
