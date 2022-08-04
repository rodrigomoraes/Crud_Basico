<?php
include('conexao.php');
include ('validar.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastrar usuario</title>
    </head>
    <body>
    <?php
    $nome     = $_POST['nome'];
    $login   = $_POST['login'];
    $senha    = md5($_POST['senha']);//METODO QUE FAZ ENCRIPTAÇÃO DAS SENHAS
    $email = $_POST['email'];
    $status = $_POST['status'];

    $sql = "INSERT INTO usuarios VALUES (null, '{$nome}', '{$login}', '{$senha}', '{$email}','{$status}')";
    $query = mysqli_query($conexao, $sql);

    if($query) {
        echo 'Usuario cadastrado com sucesso!<br>';


        echo '<a href="listar_usuarios.php">Voltar</a>';

    } else {
        echo 'Não foi possível cadastrar, Erro: ' . mysqli_error($conexao);

    }
    ?>
    </body>
    </html>
<?php
mysqli_close($conexao);
?>