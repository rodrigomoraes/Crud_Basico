<?php
include('conexao.php');
include ('validar.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastrar Equipamento</title>
    </head>
    <body>
    <?php
    $nome     = $_POST['nome'];

    $sql = "INSERT INTO equipamentos VALUES (null, '{$nome}')";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Equipamento cadastrado com sucesso!<br>';


        echo '<a href="listar_equipamentos.php">Voltar</a>';

    } else {
        echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

    }
    ?>
    </body>
    </html>
<?php
mysqli_close($conexao);
?>