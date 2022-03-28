<?php

require 'conexao.php';

class UsuarioEdit
{

    public function update($id, $name, $email, $endereco, $contatos)
    {
        global $pdo;

        $sql = "UPDATE aluno SET name: = $name, email: = $email, endereco: = $endereco, $contatos: = contatos WHERE id = :id";
        $pdo = $pdo->prepare($sql);
        $pdo->bindValue("name", $name);
        $pdo->bindValue("email", $email);
        $pdo->bindValue("endereco", $endereco);
        $pdo->bindValue("contatos", $contatos);
        $pdo->execute();
        return true;
    }
}