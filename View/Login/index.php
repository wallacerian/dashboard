<?php

require '../conexao.php';

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
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
            <li><a href="../Cadastro.php"><span class="las la-users"></span>
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
            <img src="../../img/2.jpg" alt="" width="40px" height="30px">
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
                       global $pdo;
                       $cmd = $pdo->prepare("SELECT COUNT(id) AS name FROM aluno");
                       $cmd->execute();
                       $row_alunos = $cmd->fetch();
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
                        $cmg = $pdo->prepare("SELECT COUNT(endereco) AS endereco FROM aluno");
                        $cmg->execute();
                        $row_alunos = $cmg->fetch();
                        echo "Endere??os: " . $row_alunos['endereco'] ?></h1>
                    <span>Endere??os</span>
                </div>
                <div>
                    <span class="las la-location-arrow"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1><?php
                        $cmc = $pdo->prepare("SELECT COUNT(contatos) AS contatos FROM aluno");
                        $cmc->execute();
                        $row_alunos = $cmc->fetch();
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
                            <table>
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Clientes</td>
                                    <td>Email</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $cmb = $pdo->prepare("SELECT * FROM aluno WHERE id");
                                $cmb->execute();
                                while($row_alunos = $cmb->fetch()) {?>
                                <tr>
                                    <td><?=$row_alunos['id'];?></td>
                                    <input type="hidden" name="id" value="<?=$row_alunos['id']?>">
                                    <td><?=$row_alunos['name'];?></td>
                                    <td><?=$row_alunos['email'];?></td>
                                    <td><a href='../Editar.php?id=<?=$row_alunos['id']?>'>Editar</a></td>
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
                                 <img src="../../img/2.jpg" width="40px" alt="" height="40px">
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
                                <img src="../../img/2.jpg" width="40px" alt="" height="40px">
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