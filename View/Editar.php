<?php
session_start();

$conn = mysqli_connect('localhost:3306','root','','clientes');


$id = $_GET['id'];
$result_aluno = "SELECT * FROM aluno WHERE id = $id ";
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
    <label class="field">Nome</label><br>
    <input type="text" class="field" name="name" placeholder="Qual seu nome?" value="<?= $row_aluno['name']; ?>"><br/><br/>
    <label class="field">E-mail</label><br>
    <input type="email" class="field"name="email"  value="<?= $row_aluno['email'];?>"><br/><br/>
    <label class="field">Endereco</label><br>
    <input type="endereco" class="field" name="endereco" value="<?= $row_aluno['endereco'];?>"><br/><br/>
    <label class="field">Contato</label><br>
    <input type="contatos" class="field" name="contatos" value="<?= $row_aluno['contatos'];?>"><br/><br/>
    <button class="field" type="submit">Editar</button>
</form>
<style>
    body{
        background: #FFC107;
    }
    .field {
        position: relative;
        left: 35%;
        border-radius: 15px;
    }
</style>
</body>
</html>