<?php

require '../conexao2.php';
require '../conexao.php';

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

    public function editar($name, $email)
    {
        global $sql;

        $pdo = "SELECT * FROM aluno WHERE id = :id ";
        $pdo = $sql->prepare($pdo);
        $pdo->bindValue("name", $name);
        $pdo->execute();


    }
}