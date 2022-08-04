<?php
include('conexao.php');
include ('validar.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastrar exercicio</title>
    </head>
    <body>
    <?php
    $exercicio     = $_POST['exercicio'];
    $series   = $_POST['series'];
    $repeticoes    = $_POST['repeticoes'];

    $sql = "INSERT INTO exercicios VALUES (null, '{$exercicio}', '{$series}', '{$repeticoes}')";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Exercício cadastrado com sucesso!<br>';


        echo '<a href="listar_exercicios.php">Voltar</a>';

    } else {
        echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

    }
    ?>
    </body>
    </html>
<?php
mysqli_close($conexao);
?>