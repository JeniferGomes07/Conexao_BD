<?php

$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_loja";

$conexao = new mysqli($server,$user,$password,$database);

$insert = "INSERT INTO tb_produto VALUES (null,'Egeo Choc', 'traz a doçura em uma nova embalagem jovem, colorida e cheia de personalidade!', '30', '144.90'),
(null,'Coffee seduction', 'O Coffee Woman Seduction é uma fragrância irresistível, sensual e doce.', '23', '199.90'),
(null,'Floratta red', 'A fragrância feminina do Floratta Red é inspirada na flor da Maçã de Vermont.', '17', '119.90')
";
$conexao-> query($insert);

?>