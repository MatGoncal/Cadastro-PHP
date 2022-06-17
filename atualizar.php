<?php include_once "conexao.php"; ?>
<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];

$sql = "UPDATE cadastro  SET Nome='$nome', Email='$email', Celular='$celular' 
    WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: editar.php?id=$id");
} else {
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
