<?php
include('conexao.php');
include ('validar.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastrar Instrutor</title>
    </head>
    <body>
    <?php
    $nome     = $_POST['nome'];
    $cpf   = $_POST['cpf'];
    $telefone    = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO instrutores VALUES (null, '{$nome}', '{$cpf}', '{$telefone}', '{$endereco}')";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Instrutor cadastrado com sucesso!<br>';


        echo '<a href="listar_instrutores.php">Voltar</a>';

    } else {
        echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

    }
    ?>
    </body>
    </html>
<?php
mysqli_close($conexao);
?>