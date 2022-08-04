<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM equipamentos WHERE id = {$id}";
$query = mysqli_query($conexao, $sql);
if($query) {
    header('Location: listar_equipamentos.php?ok=1');
} else {
    header('Location: listar_equipamentos.php?error=' . mysqli_error($conexao));
}
mysqli_close($conexao);
?>