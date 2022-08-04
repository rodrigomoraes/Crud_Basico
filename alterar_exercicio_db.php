
<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alterar Exercicio</title>
</head>
<body>
<?php
$id       = $_POST['id'];
$exercicio     = $_POST['exercicio'];
$series    = $_POST['series'];
$repeticoes    = $_POST['repeticoes'];


$sql = "UPDATE exercicios SET exercicio = '{$exercicio}', series = '{$series}',repeticoes = '{$repeticoes}' WHERE id = '{$id}'";
$query = mysqli_query($conexao, $sql);

if($query) {
    echo 'Exercicio alterado com sucesso!<br>';
    echo '<a href="listar_exercicios.php">Voltar</a>';

} else {
    echo 'Não foi possível alterar! Erro: ' . mysqli_error($conexao);
}
?>
</body>
</html>
<?php
mysqli_close($conexao);
?>