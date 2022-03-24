<?php
session_start();

$conn = mysqli_connect('localhost:3306','root','','clientes');

$result_aluno = "SELECT * FROM aluno WHERE id = '5' ";
$resultado_aluno = mysqli_query($conn, $result_aluno);
$row_aluno = mysqli_fetch_assoc($resultado_aluno);

?>
<html lang="en">
<head>
    <title>Editar</title>
</head>
<body>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row_aluno['id']; ?>">

    Nome:<br/>
    <input type="text" name="name" placeholder="Qual seu nome?" value="<?= $row_aluno['name']; ?>"><br/><br/>
    E-mail:<br/>
    <input type="email" name="email"  value="<?= $row_aluno['email'];?>"><br/><br/>
    Endereco:<br/>
    <input type="endereco" name="endereco" value="<?= $row_aluno['endereco'];?>"><br/><br/>
    Contato:<br/>
    <input type="contatos" name="contatos" value="<?= $row_aluno['contatos'];?>"><br/><br/>
    <button type="submit">Editar</button>
</form>
</body>
</html>