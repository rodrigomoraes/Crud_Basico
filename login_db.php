<?php
//Esse arquivo fica responsavel por checar os dados do login
//Se os dados estiverem ok, iremos criar uma SESSION
session_start();
require_once ('conexao.php');

$login = mysqli_real_escape_string($conexao, $_POST['login']);

$senha = md5($_POST['senha']);
//$senha = $_POST['senha'];


$sql = "SELECT * FROM usuarios WHERE login = '{$login}' AND senha = '{$senha}'";

$query = mysqli_query($conexao, $sql);
if($query) {
    if(mysqli_num_rows($query) == 1) {

        $item = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $_SESSION['usuario'] = $item;


        header('Location: painel.php');
    } else {
        header('Location: index.php?error=1');
    }
} else {
    header('Location: index.php?error=' . mysqli_error($conexao));
}

mysqli_close($conexao);
?>