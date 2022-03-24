<?php

$conn = mysqli_connect('localhost:3306','root','','clientes');

?>

<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-hotjar"></span>Mahout</h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li><a href="" class="active"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>
            </li>
            <li><a href="Cadastro.php"><span class="las la-users"></span>
                <span>Cadastrar Clientes</span></a>
            </li>
        </ul>
    </div>
</div>
<div class="main-content">
    <header>
        <h2>
            <label for="">
                <span class="las la-bars"></span>
            </label>
            Dashboard
        </h2>
        <div class="user-wrapper">
            <img src="../img/2.jpg" alt="" width="40px" height="30px">
            <div>
                <h4>Timm</h4>
                <small>Super admin</small>
            </div>
        </div>
    </header>
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1><?php
                       $query_aluno = "SELECT COUNT(id) AS name FROM aluno";
                        $query_alunos = mysqli_query($conn, $query_aluno);
                        $row_alunos = mysqli_fetch_assoc($query_alunos);
                       echo "Clientes: " . $row_alunos['name'] ?></h1>
                    <span>Clientes</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1><?php
                        $query_aluno = "SELECT COUNT(endereco) AS endereco FROM aluno";
                        $query_alunos = mysqli_query($conn, $query_aluno);
                        $row_alunos = mysqli_fetch_assoc($query_alunos);
                        echo "Endereços: " . $row_alunos['endereco'] ?></h1>
                    <span>Endereços</span>
                </div>
                <div>
                    <span class="las la-location-arrow"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1><?php
                        $query_aluno = "SELECT COUNT(contatos) AS contatos FROM aluno";
                        $query_alunos = mysqli_query($conn, $query_aluno);
                        $row_alunos = mysqli_fetch_assoc($query_alunos);
                        echo "Contatos: " . $row_alunos['contatos'] ?></h1>
                    <span>Contatos</span>
                </div>
                <div>
                    <span class="las la-phone-volume"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1><?php
                        $data = date('d/m/Y');
                        echo $data;
                        ?></h1>
                    <span>Data Atual</span>
                </div>
                <div>
                    <span class="las la-calendar"></span>
                </div>
            </div>
        </div>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>Clientes Recentes</h3>
                        <button>Ver todos <span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Clientes</td>
                                    <td>Email</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $result_alunos = "SELECT * FROM aluno WHERE id";
                                $resultado_alunos = mysqli_query($conn, $result_alunos);
                                while($row_alunos = mysqli_fetch_assoc($resultado_alunos)) {?>
                                <tr>
                                    <td><?=$row_alunos['id'];?></td>
                                    <input type="hidden" name="id" value="<?=$row_alunos['id']?>">
                                    <td><a href="Editar.php?=<?=$row_alunos['id']?>"><?=$row_alunos['name'];?></a></td>
                                    <td><?=$row_alunos['email'];?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customers">
                <div class="card">
                    <div class="card-header">
                        <h3>Novo cliente</h3>
                        <button>Ver Todos <span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                         <div class="customer">
                             <div>
                                 <img src="../img/2.jpg" width="40px" alt="" height="40px">
                             </div>
                             <div>
                                 <h4>Tim</h4>
                                 <small>CEO Mahout</small>
                             </div>
                         </div>
                        <div>
                            <span class="las la-user-circle"></span>
                            <span class="las la-comment"></span>
                            <span class="las la-phone"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <img src="../img/2.jpg" width="40px" alt="" height="40px">
                            </div>
                            <div>
                                <h4>Timm</h4>
                                <small>CEO Mahout</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="las la-user-circle"></span>
                            <span class="las la-comment"></span>
                            <span class="las la-phone"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>