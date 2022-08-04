
<?php
include('conexao.php');
include ('validar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar treino</title>
</head>
<body>
<?php
$nome     = $_POST['nome'];

$sql = "INSERT INTO treinos VALUES (null, '{$nome}')";
$query = mysqli_query($conexao, $sql);

if($query) {
    echo 'Treino cadastrado com sucesso!<br>';


    echo '<a href="listar_treinos.php">Voltar</a>';

} else {
    echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

}
?>
</body>
</html>
<?php
mysqli_close($conexao);
?>