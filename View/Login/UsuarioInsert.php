<?php

require '../conexao.php';

class UsuarioInsert
{

    public function InserirAluno($name, $email, $endereco, $contatos)
    {
        global $pdo;

        $sql = "INSERT INTO aluno (name, email, endereco, contatos) VALUES ('$name','$email','$endereco','$contatos')";
        $pdo = $pdo->prepare($sql);
        $pdo->bindValue("name", $name);
        $pdo->bindValue("email", $email);
        $pdo->bindValue("endereco", $endereco);
        $pdo->bindValue("contatos", $contatos);
        $pdo->execute();
        return true;

    }
}