<?php
include("dbconexao.php");

    
$nome = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$email = $_POST['email'];
$telefone = $_POST['number'];
$senha = $_POST['password'];
    
$inserir = "INSERT INTO cadastros(nome, sobrenome, email, telefone, senha) VALUES('$nome', '$sobrenome', '$email', '$telefone', '$senha')";
mysqli_query($mysqli, $inserir);
mysqli_close($mysqli);

?>
