<?php include_once "top.php"; ?>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Cliente</title>
<body>
    <div class="container-fluid">
        <form method="GET" name="formbusca" action="pesquisa.php">
            <label>Pesquisa</label>
            <input type="text" name="busca" required>
            <input type="submit" name="" value="ok" >
        </form>
        <form action="cadastro.php" method="POST">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" placeholder="nome" required><br>
            <label>Email</label>
            <input class="form-control" type="email" name="email" placeholder="email" required><br>
            <label>Celular</label>
            <input class="form-control" type="celular" name="celular" placeholder="celular" required><br>
            <label>Senha</label>
            <input class="form-control" type="password" name="senha" placeholder="senha" required><br>
            <input type="submit" name="Enviar">
            
        </form>
    </div>
        
    </body>

</html>