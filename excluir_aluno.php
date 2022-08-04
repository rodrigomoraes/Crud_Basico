<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM alunos WHERE id = {$id}";
$query = mysqli_query($conexao, $sql);
if($query) {
    header('Location: listar_alunos.php?ok=1');
} else {
    header('Location: listar_alunos.php?error=' . mysqli_error($conexao));
}
mysqli_close($conexao);
?>