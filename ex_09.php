<?php

function analisarNumero($numero) {
 
$parOuImpar = ($numero % 2 == 0) ? "par" : "ímpar";

$primo= true;
if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
}
    $numeroPrimo = $primo ? "é primo" : "não é primo";

$somaDivisores = 0;
for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $somaDivisores += $i;
    }
}
$numeroPerfeito = ($somaDivisores == $numero) ? "é perfeito" : "não é perfeito";


 return [$parOuImpar, $numeroPrimo, $numeroPerfeito];
}

