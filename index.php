<!DOCTYPE html>
<html>
<head>
    <title>Locadora - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">

        <?php
        //Esse bloco faz mostrar uma mansagem de erro na tela, caso o usuario nao seja cadastrado no banco de dados
            if(@$_GET['error'] == 1){
                echo '
                    <div class="col-md-4 offset-md-4">
                        <div class="alert alert-danger" role="alert">Usuario ou senha invalida!</div>
                    </div>
                ';
            }elseif(@$_GET['error']) {
                echo '
                    <div class="col-md-4 offset-md-4">
                        <div class="alert alert-danger" role="alert">Houve um erro ao logar-se!</div>
                    </div>
                    ';
            }

        ?>
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <form action="login_db.php" method="POST" class="row g-3">
                    <h4>Sistema de Academia</h4>
                    <div class="col-12">
                        <label for="login">Login</label>
                        <input type="text" name="login" class="form-control" placeholder="" maxlength="20">
                    </div>
                    <div class="col-12">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe"> Remember me</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark float-end">Entrar</button>
                    </div>
                </form>
                <hr class="mt-4">
                <div class="col-12">
                    <p class="text-center mb-0">Não e registrado? <a href="#">Criar conta</a></p>
                </div>
            </div>
        </div>
    </div>
</div>












