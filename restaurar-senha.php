<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./src/imagens/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Alterar Senha</title>
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

 
        <div class="red-blur" style="display: none;"></div>
        <div class="img-robo">
            <img src="./src/imagens/robo-inicio.png" alt="Imagem de um robo" id="robo-inicio" > 
            <img src="./src/imagens/robo-erro.png" alt="Imagem de um robo" id="robo-erro" style="display: none;" >
        </div>

        <div class="box-login box-register">
           <div class="title">
               <h1>Esqueceu a Senha?</h1>
           </div>

           <div class="inputs">
               <label for="username">User</label> <br>
               <input type="text" class="username" name="username" id="username"> <br> <br>

               <label for="email">Email</label> <br>
               <input type="email" class="email" name="email" id="email"> <br> <br>

               <label for="password" class="labelPassword">Nova Senha</label> <br>
               <input type="text" name="password" class="password"> <br> <br>

               <label for="password" class="labelPassword">Repita a Senha</label> <br>
               <input type="text" name="password" class="password"> <br> 

                <div class="btn-login">
                    <button class="botao-login">Alterar Senha</button>
                    <button class="botao-login-erro" style="display: none;">Erro</button>
                </div>

                <div class="create-account">
                    <p><a href="./index.html">Voltar</a></p> 
                </div>
           </div>

           
        </div>
    </section>

    <footer>
        <p>Com ❤️ por <a href="https://github.com/alinebeatrizw">Aline Wille</a> 😊</p>
    </footer>
    <script src="./src/js/script.js"></script>
</body>
</html>