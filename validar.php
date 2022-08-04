<?php
session_start();
if(!isset($_SESSION['usuario'])) {

    header('Location: index.php');
}
//Essa linha coloca o status do usuario em uma variavel
$status = $_SESSION['usuario']['status'];
?>