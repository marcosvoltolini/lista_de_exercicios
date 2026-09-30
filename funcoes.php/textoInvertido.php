<?php 

function inverterTexto()
{
    $texto = "Marcos Paulo Voltolini Filho";
    $textoInvertido = strrev($texto);
    return $textoInvertido;
}
echo inverterTexto();

echo strlen(inverterTexto());