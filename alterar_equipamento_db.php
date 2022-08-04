
<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Academia - Alterar Equipamentos</title>
</head>
<body>
<?php
$id       = $_POST['id'];
$nome     = $_POST['nome'];

$sql = "UPDATE equipamentos SET nome = '{$nome}' WHERE id = '{$id}'";
$query = mysqli_query($conexao, $sql);

if($query) {
    echo 'Equipamento alterado com sucesso!<br>';
    echo '<a href="listar_equipamentos.php">Voltar</a>';

} else {
    echo 'Não foi possível alterar! Erro: ' . mysqli_error($conexao);
}
?>
</body>
</html>
<?php
mysqli_close($conexao);
?>