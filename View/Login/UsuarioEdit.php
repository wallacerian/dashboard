<?php

require '../conexao.php';

class UsuarioEdit
{

    public function editar($name, $email, $endereco, $contatos)
    {
        global $pdo;

        $sql = "SELECT * FROM aluno WHERE id = :id ";
        $pdo = $pdo->prepare($sql);
        $pdo->bindValue("name", $name);
        $pdo->bindValue("email", $email);
        $pdo->bindValue("endereco", $endereco);
        $pdo->bindValue("contatos", $contatos);
        $pdo->execute();
    }
}