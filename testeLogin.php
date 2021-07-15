<?php
    //verificar se a sessão existe e o usuario realmente está logado
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location:index.php");
        exit;
    }

?>


Logado com sucesso