<?php
include('conexao.php');
include ('validar.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastrar academias</title>
    </head>
    <body>
    <?php
    $nome     = $_POST['nome'];
    $cpf   = $_POST['cpf'];
    $telefone    = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO alunos VALUES (null, '{$nome}', '{$cpf}', '{$telefone}', '{$endereco}')";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Aluno cadastrado com sucesso!<br>';


        echo '<a href="listar_alunos.php">Voltar</a>';

    } else {
        echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

    }
    ?>
    </body>
    </html>
<?php
mysqli_close($conexao);
?>