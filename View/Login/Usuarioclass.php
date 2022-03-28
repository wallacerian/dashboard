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

           $_SESSION['idUser'] =  $dado['idusuario'];

           return true;
        }else{
            return false;
        }
    }

    public function cadastrar($nome, $senha) {

        global $pdo;

        $sql = "INSERT INTO usuario (usuario, senha, data_cadastro) values($nome , $senha)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("name", $nome);
        $sql->bindValue("name", $nome);
        $sql->execute();
    }
}