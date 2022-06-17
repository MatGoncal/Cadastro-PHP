<?php include_once "conexao.php"; ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM cadastro WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header ("location: formulario.php");
}else{
    echo "Deu erro";
}

?>