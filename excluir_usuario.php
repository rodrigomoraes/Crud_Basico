<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = {$id}";
$query = mysqli_query($conexao, $sql);
if($query) {
    header('Location: listar_usuarios.php?ok=1');
} else {
    header('Location: listar_usuarios.php?error=' . mysqli_error($conexao));
}
mysqli_close($conexao);
?>