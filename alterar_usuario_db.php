<?php
include('conexao.php');
include('validar.php.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Locadora</title>
</head>
<body>
<?php
$id       = $_POST['id'];
$nome     = $_POST['nome'];
$login    = $_POST['login'];
$senha    = md5($_POST['senha']); //METODO PARA ENCRIPTAR SENHA
$email    = $_POST['email'];
$status    = $_POST['status'];


$sql = "UPDATE usuarios SET nome = '{$nome}', login = '{$login}',senha = '{$senha}', email = '{$email}', status = '{$status}' WHERE id = '{$id}'";
$query = mysqli_query($conexao, $sql);

if($query) {
    echo 'Usuario alterado com sucesso!<br>';
    echo '<a href="listar_usuarios.php">Voltar</a>';

} else {
    echo 'Não foi possível alterar! Erro: ' . mysqli_error($conexao);
}
?>
</body>
</html>
<?php
mysqli_close($conexao);
?>