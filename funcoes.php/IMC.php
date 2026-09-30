<?php

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

$peso = 82;
$altura = 1.82;

echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC = " . calcularIMC($peso, $altura);