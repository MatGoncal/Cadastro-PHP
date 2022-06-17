<?php include_once "conexao.php"; ?>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$senha = md5($_POST['senha']);

$sql = "INSERT INTO cadastro (nome, email, celular) VALUES 
('$nome', '$email','$celular')";

if (mysqli_query($conn, $sql)) {
    header("Location: formulario.php");
} else {
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>