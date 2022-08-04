
<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Locadora - Alterar Usuarios</title>
</head>
<body>
<?php
$id       = $_POST['id'];
$nome     = $_POST['nome'];
$cpf    = $_POST['cpf'];
$telefone    = $_POST['telefone'];
$endereco    = $_POST['endereco'];


$sql = "UPDATE instrutores SET nome = '{$nome}', cpf = '{$cpf}',telefone = '{$telefone}', endereco = '{$endereco}' WHERE id = '{$id}'";
$query = mysqli_query($conexao, $sql);

if($query) {
    echo 'Instrutor alterado com sucesso!<br>';
    echo '<a href="listar_instrutores.php">Voltar</a>';

} else {
    echo 'Não foi possível alterar! Erro: ' . mysqli_error($conexao);
}
?>
</body>
</html>
<?php
mysqli_close($conexao);
?>