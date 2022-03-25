<html lang="en">
<head>
    <title>Cadastro</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Ccompatible" content="ie=edge">
<body>
    <section class="content">
        <div class="contato">
            <form action="login/inserir.php" class="form" method="POST">
                <label class="field"> Nome:</label>
                <br>
                <input class="field" type="text" name="name" placeholder="Qual seu nome?"><br/><br/>
                <label class="field"> E-mail:</label>
                <br>
                <input class="field" type="email" name="email" placeholder="Qual seu e-mail?"><br/><br/>
                <label class="field"> Endereco:</label>
                <br>
                <input class="field" type="endereco" name="endereco"><br/><br/>
                <label class="field"> Contato:</label>
                <br>
                <input class="field" type="contatos" name="contatos"><br/><br/>
                <button class="field" type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
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
