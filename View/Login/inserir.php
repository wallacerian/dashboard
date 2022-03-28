<?php

if ($_POST['name'] == '' || $_POST['email'] == '') {
    echo '<h1>Seu Nome Esta Vazio</h1>';
    die;
}

$conn = mysqli_connect('localhost:3306','root','','clientes');

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
$contatos = mysqli_real_escape_string($conn, $_POST['contatos']);


if (!$conn) {
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
}
