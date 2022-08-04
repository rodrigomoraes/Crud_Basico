<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM treinos WHERE id = {$id}";
$query = mysqli_query($conexao, $sql);
if($query) {
    header('Location: listar_treinos.php?ok=1');
} else {
    header('Location: listar_treinos.php?error=' . mysqli_error($conexao));
}
mysqli_close($conexao);
?>