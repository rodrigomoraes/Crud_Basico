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
        <h2>Cadastrar usuario</h2>
    </div>
    <div class="row">
        <div class="col-md-1">
            <a href="listar_usuarios.php" class="btn btn-dark">Voltar</a>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="cadastrar_usuario_db.php" method="post">
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="nome">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="login" class="col-sm-2 col-form-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" class="form-control" id="login">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="text" name="senha" class="form-control" id="senha">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Nivel</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-control" name="status">
                            <option value="U" selected>Usuario</option>
                            <option value="A">Administração</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar usuario</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>