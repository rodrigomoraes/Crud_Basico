<?php
include('../conexao.php');
$json = $_POST['json'];
$array = json_decode($json, true);

$sql = "INSERT INTO alunos VALUES (null, '{$array['nome']}', '{$array['cpf']}', '{$array['telefone']}', '{$array['endereco']}')";
$query = mysqli_query($conexao, $sql);
if($query) {
    echo 'Aluno cadastrado com sucesso!<br>';


    echo '<a href="listar_alunos.php">Voltar</a>';

} else {
    echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

}

mysqli_close($conexao);
?>