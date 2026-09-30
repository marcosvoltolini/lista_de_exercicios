<?php
$tamanho = 16;

$senha = bin2hex(random_bytes($tamanho / 2)); 

echo "Sua senha: " . $senha;
?>