<?php
    //verificar se a sessão existe e o usuario realmente está logado
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location:index.php");
        exit;
    }

?>








<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./src/imagens/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="http://fonts.cdnfonts.com/css/anurati" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">LOGO</div>
        <div class="hamburger">
            <div class="hr1">___</div>
            <div class="hr2">__</div>
            <div class="hr3">_</div>
        </div>
    </header>

    <section>
        <div class="blue-blur" ></div>
        
        <div class="img-robo">
            <h1 class="txt-bem">
                BEM
            </h1>
            <img src="./src/imagens/robo-inteiro.png" alt="Imagem de um robo" id="robo-inicio" >
            <h1 class="txt-vindo">
                VINDO
            </h1>
        </div>
    </section>
    <footer>
        <p>Com ❤️ por <a href="https://github.com/alinebeatrizw">Aline Wille</a> 😊</p>
    </footer>

</body>
</html>