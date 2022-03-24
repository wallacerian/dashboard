<?php

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty(isset($_POST['senha'])))
{
    require '../conexao2.php';
    require 'Usuarioclass.php';

    $u = new Usuarioclass();

    $login = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    if ($u->login($login, $senha) == true){
         if (isset($_SESSION['idUser'])){
             header("location: ../index.php");
         } else {
             header("location: ../login/login.php");
         }
    }else{
        header("location: ../login/login.php");
    }

} else {
    header("location: ../login/login.php");
}
