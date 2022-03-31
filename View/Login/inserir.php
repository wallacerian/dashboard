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
