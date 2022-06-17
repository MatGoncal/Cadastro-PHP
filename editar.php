<?php  include_once "conexao.php"; 
        include_once "top.php" ?>

<?php
$id = $_GET['id'];

$conn = mysqli_connect($servidor, $usuario, $senha, $name);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM cadastro WHERE id='$id' LIMIT 1";
$resultado_nomes = mysqli_query($conn, $result_nomes);
while ($row = mysqli_fetch_array($resultado_nomes)) {
    $id = $row['id'];
    $nome = $row['Nome'];
    $email = $row['Email'];
    $celular = $row['Celular'];
}

?>

<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Cliente</title>
<body>
    <form method="GET" name="formbusca" action="pesquisa.php">
        <label>Pesquisa</label>
        <input type="text" name="busca">
        <input type="submit" name="" value="ok">
    </form>
    <form action="atualizar.php" name="cliente" method="POST">
        <label>Nome</label>
         <input type="text" name="nome" value="<?php echo $nome;?>"><br>
         <input type="hidden" name="id" value="<?php echo $id;?>"><br>
         <label>Email</label>
         <input type="email" name="email" value="<?php echo $email;?>"><br>
         <label>Celular</label>
         <input type="celular" name="celular" value="<?php echo $celular;?>"><br>
         <label>Senha</label>
         <input type="password" name="senha" ><br>
         <input type="submit" name="enviar" value="Salvar Dados">
         <a href="formulario.php">Voltar ao Formulario</a>

    </form>

</body>

</html>