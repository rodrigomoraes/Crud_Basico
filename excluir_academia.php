<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM academias WHERE id = {$id}";
$query = mysqli_query($conexao, $sql);
if($query) {
    header('Location: listar_academia.php?ok=1');
} else {
    header('Location: listar_academias.php?error=' . mysqli_error($conexao));
}
mysqli_close($conexao);
?>