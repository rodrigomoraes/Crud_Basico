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
$id = $_GET['id'];
$sql = "SELECT * FROM equipamentos WHERE id = '{$id}'";
$query = mysqli_query($conexao, $sql);
$item = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<div class="container">
    <div class="row">
        <h2>Alterar Equipamento</h2>
    </div>
    <div class="row">
        <div class="col-md-1">
            <a href="listar_equipamentos.php" class="btn btn-dark">Voltar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="alterar_equipamento_db.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" value="<?php echo $item['id'];?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $item['nome'];?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Alterar equipamento</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
    </html><?php
