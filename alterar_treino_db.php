
<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Academia - Alterar Treino</title>
</head>
<body>
<?php
$id       = $_POST['id'];
$nome     = $_POST['nome'];

$sql = "UPDATE treinos SET nome = '{$nome}' WHERE id = '{$id}'";
$query = mysqli_query($conexao, $sql);

if($query) {
    echo 'Treino alterado com sucesso!<br>';
    echo '<a href="listar_treinos.php">Voltar</a>';

} else {
    echo 'Não foi possível alterar! Erro: ' . mysqli_error($conexao);
}
?>
</body>
</html>
<?php
mysqli_close($conexao);
?>