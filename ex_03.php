<?php
function mascararcpf($cpf)
{
    $mascararcpf = substr($cpf, 0, 0) . "***********" . substr($cpf, -4);
    return $mascararcpf;
}

$cpf = 12345678910;
echo mascararcpf($cpf);
