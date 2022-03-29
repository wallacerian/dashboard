<?php

require 'Usuarioclass.php';
require  '../conexao2.php';

if ($_POST['usuario'] == '' ||$_POST['senha'] == ''){
    echo '<h1>Os Campos Estão Vazios</h1>';
    die;
}

if (isset($_POST['usuario'],$_POST['senha'])) {
    $Usuario = new Usuarioclass;

    $login = addslashes($_POST['usuario']);
    $senha = md5($_POST['senha']);

    $Usuario->cadastrar($login, $senha);
    header("Location: login.php");
}
