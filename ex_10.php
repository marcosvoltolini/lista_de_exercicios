<?php

 function calcularMedia(array $notas) {

    $maior = max($notas);
    $menor = min($notas);

    $soma = array_sum($notas);
    $quantidade = count($notas);   
    $media = $soma / $quantidade;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        'maior' => $maior,
        'menor' => $menor,
        'media' => $media,
        'situacao' => $situacao
    ];
 }
echo "Resultado do cálculo da média:" . "<br>";
    $notas = [7, 8, 5, 6, 9];  
    $resultado = calcularMedia($notas);
        echo "Maior nota: " . $resultado['maior'] . "<br>";
        echo "Menor nota: " . $resultado['menor'] . "<br>";
        echo "Média: " . $resultado['media'] . "<br>";
        echo "Situação: " . $resultado['situacao'] . "<br>";