<?php

    require_once 'classes/Usuario.php';
    $Usuario = new Usuario;

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
    <title>Registre-se</title>
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
    <div class="red-blur" id="red-blur" style="display: none;"></div>
        <div class="img-robo">
            <img src="./src/imagens/robo-inicio.png" alt="Imagem de um robo" id="robo-inicio" >
            <img src="./src/imagens/robo-erro.png" alt="Imagem de um robo" id="robo-erro" style="display: none;" >
        </div>

        <div class="box-login box-register">
           <div class="title">
               <h1>Bem-Vindo(a)</h1>
           </div>

           <div class="inputs">
               <form method="post">
                    <label for="username">User</label> <br>
                    <input type="text" class="username" name="username" id="username" maxlength="30"> <br> <br>

                    <label for="email">Email</label> <br>
                    <input type="email" class="email" name="email" id="email" maxlength="40"> <br> <br>

                    <label for="password" class="labelPassword">Senha</label> <br>
                    <input type="text" name="password" class="password" maxlength="32"> <br> <br>

                    <label for="password" class="labelPassword">Repita a senha</label> <br>
                    <input type="text" name="confPassword" class="password" maxlength="32"> <br>

                    <div class="btn-login">
                        <button class="botao-login" id="botao-login">Cadastrar</button>
                        <button class="botao-login-erro" id="botao-login-erro" style="display: none;">Erro</button>
                    </div>

                    <div class="create-account">
                        <p>Já possui uma conta?<a href="./index.php"> Entre</a></p>
                    </div>
                </form>
           </div>
        </div>



<?php

    //verificar se clicou no botao
    if (isset($_POST['username'])) {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $confPassword = addslashes($_POST['confPassword']);

        //verificar se está tudo preenchido
        if (!empty($username) && !empty($email) && !empty($password) && !empty($confPassword)) {
            $Usuario->conectar("projeto_robo", "localhost", "root", "");
            if ($Usuario->$msgErroConexaoBD == "") {
                if ($password == $confPassword) {
                    if ($Usuario->cadastrar($username, $email, $password)) {
                    
?>
                        <div id="msg-sucesso" >
                             Cadastrado com sucesso!
                        </div>


<?php

                    } else {
                        echo '<script>
                        window.onload = function(){ mudaCor(); };
                        </script>';
?>

                        <div class="msg-erro" id="msg-erro">
                            Email ja cadastrado!
                        </div>

<?php
}
            } else {
                echo '<script>
                window.onload = function(){ mudaCor(); };
                </script>';
?>
                    <div class="msg-erro" id="msg-erro">
                        As senhas não correspondem!
                    </div>
<?php
}
        } else {
            echo '<script>
            window.onload = function(){ mudaCor(); };
            </script>';
?>
                <div class="msg-erro" id="msg-erro">
                    <?php echo "Erro: " . $Usuario->$msgErroConexaoBD; ?>
                </div>
<?php
}
    } else {
        echo '<script>
        window.onload = function(){ mudaCor(); };
        </script>';
?>
            <div class="msg-erro" id="msg-erro">
                Preencha todos os campos!
            </div>

<?php
    }
}
?>
    </section>
    <footer>
        <p>Com ❤️ por <a href="https://github.com/alinebeatrizw">Aline Wille</a> 😊</p>
    </footer>



    <script>
        function mudaCor() {
            //troca o robo azul pelo robo vermelho
            document.getElementById("robo-inicio").style.display = "none";
            document.getElementById("robo-erro").style.display = "initial";
            //faz aparecer o blur vermelho atras do robp
            document.getElementById("red-blur").style.display = "initial";


            //faz o botao ficar vermelho
            document.getElementById("botao-login").style.display = "none";
            document.getElementById("botao-login-erro").style.display = "initial";
            document.getElementById("red-blur").style.display = "initial";


            //depois de 2s o robo volta ao normal
            setTimeout(function() {
                document.getElementById("robo-inicio").style.display = "initial";
                document.getElementById("robo-erro").style.display = "none";
                document.getElementById("red-blur").style.display = "none";


                document.getElementById("botao-login").style.display = "initial";
                document.getElementById("botao-login-erro").style.display = "none";
                document.getElementById("red-blur").style.display = "none"; 

                document.getElementById("msg-erro").style.display = "none"; 
            }, 5000);
            }
    </script>
    <script src="./src/js/script.js"></script>
</body>
</html>