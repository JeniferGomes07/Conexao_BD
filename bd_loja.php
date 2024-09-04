<?php

$server = "localhost";
$user = "root";
$password = "root";

$conexao = new mysqli($server,$user,$password);

$banco = "create database bd_loja";
$conexao->query($banco);

?>



