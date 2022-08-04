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
<div class="container">
    <div class="row">
        <h2>Cadastrar Aluno</h2>
    </div>
    <div class="row">
        <div class="col-md-1">
            <a href="listar_academia.php" class="btn btn-dark">Voltar</a>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="cadastrar_aluno_db.php" method="post">
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="nome">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telefone" class="col-sm-2 col-form-label">CPF</label>
                    <div class="col-sm-10">
                        <input type="text" name="cpf" class="form-control" id="cpf">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="endereco" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" name="Telefone" class="form-control" id="telefone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cnpj" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                        <input type="text" name="endereco" class="form-control" id="endereco">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar aluno</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>