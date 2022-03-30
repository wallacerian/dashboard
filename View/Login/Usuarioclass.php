<?php

require '../conexao2.php';

class Usuarioclass
{

    public function login($usuario, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("usuario", $usuario);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0) {
           $dado = $sql->fetch();

           $_SESSION['idUser'] =  $dado['id'];

           return true;
        }else{
            return false;
        }
    }

    public function cadastrar($nome, $senha) {

        global $pdo;

        $sql = "INSERT INTO usuario (usuario, senha) values('$nome' , '$senha')";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("usuario", $nome);
        $sql->bindValue("senha", $senha);
        $sql->execute();
    }

}