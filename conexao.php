<?php
//Esse arquivo fica responsavel pela conexao com o mysql
$conexao = mysqli_connect('localhost', 'root', 'P@ssword23', 'academia');
mysqli_set_charset($conexao, 'utf8');
?>