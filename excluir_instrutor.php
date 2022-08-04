<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM instrutores WHERE id = {$id}";
$query = mysqli_query($conexao, $sql);
if($query) {
    header('Location: listar_instrutores.php?ok=1');
} else {
    header('Location: listar_instrutores.php?error=' . mysqli_error($conexao));
}
mysqli_close($conexao);
?>