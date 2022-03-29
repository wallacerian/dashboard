<?php

require 'UsuarioInsert.php';
require '../conexao.php';

if ($_POST['name'] == '' || $_POST['email'] == '') {
    echo '<h1>Seu Nome Esta Vazio</h1>';
    die;
}

if (isset($_POST['name'],$_POST['email'])) {
    $Usuario = new UsuarioInsert();

    $name =      $_POST['name'];
    $email =     $_POST['email'];
    $endereco =  $_POST['endereco'];
    $contatos =  $_POST['contatos'];

    $Usuario->InserirAluno($name, $email, $endereco, $contatos);
    header("Location: index.php");
}


/*if (!$conn) {
    die('Não foi possível conectar ao Banco de Dados');
}

$result_usuario = "INSERT INTO aluno (name, email, endereco, contatos) VALUES ('$name','$email','$endereco','$contatos')";
$result_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){

    header("Location: index.php");
    $_SESSION['msg'] = "<p style='color:green;'>Usuario Criado com sucesso</p>";
} else {
    header("Location: index.php");
      $_SESSION['msg'] = "<p style='color:green;'>Usuario Não Foi Criado</p>";
}*/
