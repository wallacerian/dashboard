<?php

require 'conexao.php';
require 'Login/UsuarioEdit.php';


if ($_POST['name'] == '' ||$_POST['email'] == '') {
    echo '<h1>Os Campos Estão Vazios</h1>';
    die;
}

if (isset($_POST['name'],$_POST['email'])) {

    $UsuarioEdit = new UsuarioEdit();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $contatos = $_POST['contatos'];

    $UsuarioEdit->update($id, $name, $email, $endereco, $contatos);
    header("Location: Login/index.php");
}
