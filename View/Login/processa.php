<?php

$conn = mysqli_connect('localhost:3306','root','','usuario');

$nome = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "insert into usuario (usuario,senha) values('$nome','$senha')";
$salvar = mysqli_query($conn,$sql);

mysqli_close($conn);
