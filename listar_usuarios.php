<?php
include('validar.php');
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Academias</title>
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if(@$_GET['ok']){
    echo '
                    <div class="col-md-4 offset-md-4">
                       <div class="alert alert-success" role="alert">Usuario excluido com sucesso</div>
                    </div>                 
                    ';
}
?>
<div class="container">
    <div class="row">
        <h2>Listar Usuarios</h2>
    </div>
    <div class="row">
        <div class="col-md-1">
            <a href="painel.php" class="btn btn-dark">Voltar</a>
        </div>
        <?php
        //O codigo abaixo faz a verificaçao do usuario logado
        //Se A(Adm) Logado entao tem permissao
        if($status == "A"){
            echo '
                    <div class="col-md-3">
                        <a href="cadastrar_usuario.php" class="btn btn-success">Novo usuario</a>
                    </div>
                    ';
        }

        ?>
        <?php
        $sql = 'SELECT * FROM usuarios';
        $query = mysqli_query($conexao, $sql);
        if(!$query){
            echo mysqli_error($conexao);
        }else{


        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            <?php
            while($item = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                ?>
                <tr>
                    <th scope="row"><?php echo $item['id']; ?></th>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['login']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['status']; ?></td>
                    <?php
                    //O codigo abaixo faz a verificaçao do usuario logado
                    //Se A(Adm) Logado entao tem permissao
                    if($status == "A"){
                        echo '<td><a href="alterar_usuario.php?id=' . $item['id'] .'"'.'class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>';
                        echo '<td><a href="excluir_usuario.php?id=' . $item['id'] .'"'.'class="btn btn-danger"><i class="bi-trash"></i></a></td>';
                    }
                    ?>

                </tr>

                <?php
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
<?php
}
mysqli_close($conexao);
?>
</html>