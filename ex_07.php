<?php

function calcularDesconto($valor){

if ($valor < 100){
    return "sem desconto";
}
else if ($valor < 500){
    return $valor - ($valor*0.1);
}
else if ($valor < 1000){
    return $valor - ($valor*0.2);
}
else if ($valor > 1000){
    return $valor - ($valor*0.3);
}


}

$valor = 550;

echo "Valor incial: $valor <br>";
echo "Valor com desconto: ".calcularDesconto($valor);

?>