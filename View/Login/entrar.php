<?php

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty(isset($_POST['senha'])))
{
    require '../conexao2.php';
    require 'Usuarioclass.php';

    $u = new Usuarioclass();

    $redirect =  header("location: ../login/login.php");

    $login = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    if ($u->login($login, $senha) == true) {
         if (isset($_SESSION['idUser'])) {
             header("location: ../login/index.php");
         } else {
             $redirect;
         }
    } else {
        $redirect;
    }

}
