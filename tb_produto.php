<?php

$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_loja";

$conexao = new mysqli($server,$user,$password,$database);

$tabela = "create table tb_produto (
    cd_produto int auto_increment primary key,
    nm_produto varchar(50),
    ds_produto varchar(100),
    qt_estoque int,
    vl_produto decimal(6,2)
     );";

$conexao-> query($tabela);

?>