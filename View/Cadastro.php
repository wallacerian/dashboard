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
            <form action="inserir.php" class="form" method="POST">
                Nome:<br/>
                <input class="field" type="text" name="name" placeholder="Qual seu nome?"><br/><br/>
                E-mail:<br/>
                <input class="field" type="email" name="email" placeholder="Qual seu e-mail?"><br/><br/>
                Endereco:<br/>
                <input class="field" type="endereco" name="endereco"><br/><br/>
                Contato:<br/>
                <input class="field" type="contatos" name="contatos"><br/><br/>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
</body>
</html>
