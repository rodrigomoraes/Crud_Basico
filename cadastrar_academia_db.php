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
    $telefone    = $_POST['telefone'];
    $endereco    = $_POST['endereco'];
    $cnpj= $_POST['cnpj'];

    $sql = "INSERT INTO academias VALUES (null, '{$nome}', '{$telefone}', '{$endereco}', '{$cnpj}')";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Academia cadastrada com sucesso!<br>';


        echo '<a href="listar_academia.php">Voltar</a>';

    } else {
        echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

    }
    ?>
    </body>
    </html>
<?php
mysqli_close($conexao);
?>