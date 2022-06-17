<?php include_once "conexao.php"; ?>
<?php

$busca = $_GET['busca'];

$query = "SELECT * FROM cadastro WHERE nome like '%$busca%'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    echo $name = $row['Nome'];
    echo '<a href= deletar.php?id='.$row['id'].'>Deletar</a> | <a 
        href= editar.php?id='.$row['id'].'>Editar</a>';
    echo '<br>';
}

?>