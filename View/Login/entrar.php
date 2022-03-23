<?php
session_start();
$conn = mysqli_connect('localhost:3306','root','','usuario');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select idusuario, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: Painel.php');
    exit();
} else {
    header('Location: ../Login/login.php');
    exit();
}
