<?php

$conn = mysqli_connect('localhost:3306','root','','usuario');

require 'Usuarioclass.php';

if (isset($_POST['usuario'],$_POST['senha'])) {
    $Usuario = new Usuarioclass;
    $Usuario->usuario = $_POST['usuario'];
    $Usuario->senha = $_POST['senha'];
}

$nome = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$sql = "insert into usuario (usuario,senha) values('$nome','$senha')";
$salvar = mysqli_query($conn,$sql);

mysqli_close($conn);
