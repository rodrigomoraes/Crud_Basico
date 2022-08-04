
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
    $telefone    = $_POST['telefone'];
    $endereco    = $_POST['endereco'];
    $cnpj    = $_POST['cnpj'];


    $sql = "UPDATE academias SET nome = '{$nome}', telefone = '{$telefone}',endereco = '{$endereco}', cnpj = '{$cnpj}' WHERE id = '{$id}'";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Academia alterada com sucesso!<br>';
        echo '<a href="listar_academia.php">Voltar</a>';

    } else {
        echo 'Não foi possível alterar! Erro: ' . mysqli_error($conexao);
    }
    ?>
    </body>
    </html>
<?php
	mysqli_close($conexao);
?>