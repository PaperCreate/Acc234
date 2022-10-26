<?php

if(isset($_REQUEST['entrar'])) {

    session_start();
    include("dbconexao.php");

    $_SESSION['$email'] = $_POST[$email];
    $_SESSION['$senha'] = $_POST[$senha];

    $consulta = "SELECT email, senha FROM cadastros WHERE email = '$email' AND senha = '$senha'";
    $result = $mysqli ->query($consulta);

    if($result == 0){
        header('Location: entrar.html');
    }else{
        header('Location: produtos.html');
    }
}

?>
