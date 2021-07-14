<?php

class Usuario{
    private $pdo;
    public $msgErroConexaoBD = "";


    public function conectar($nome, $host, $user, $password){
        global $pdo;

        //conecta com o banco de dados
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $user, $password);
        } catch (PDOException $e) {
            global $msgErroConexaoBD;
            $msgErroConexaoBD = $e->getMessage();
        }
        
    }
    public function cadastrar($username, $email, $password){
        global $pdo;

        //busca o email no banco de dados
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email=:email");
        $sql->bindValue(":email",$email);
        $sql->execute();

        //verifica se o email ja esta cadastrado
        if($sql->rowCount()>0){
            return false;
        }else{
        //se não estiver cadastrado, cadastra
        $sql = $pdo->prepare("INSERT INTO usuarios(username, email, password) VALUES(:username, :email, :password)");
        $sql->bindValue(":username",$username);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":password",md5($password));//s funçao md5 criptografa a senha
        $sql->execute();
        return true;
        }   
    }
    public function logar($username, $password){
        global $pdo;

        //busca o username e senha digitados no input, no banco de dados
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE username=:username AND password=:password");
        $sql->bindValue(":username",$username);
        $sql->bindValue(":password",md5($password));
        $sql->execute();

        //se achar os dados no banco, cria uma sessão de login
        if($sql->rowCount()>0){
            $dado = $sql->fetch();//fetch transforma tudo que vier do banco de dados em um array com os nomes das colunas
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;
        }else{
            return false;
        }
    }
}



?>