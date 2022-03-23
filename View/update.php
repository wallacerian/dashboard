<?php
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$contatos = $_POST['contatos'];

$conn = mysqli_connect('localhost:3306','root','','clientes');

if (!$conn) {
    die('Não foi possível conectar ao Banco de Dados');
}

$result_usuario = "UPDATE aluno SET name='$name', email='$email',endereco='$endereco', contatos='$contatos' WHERE id='$id'";
$result_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuario editado com sucesso</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:green;'>Usuario Nao foi Editado com sucesso</p>";
    header("Location: editar.php?=$id");
}