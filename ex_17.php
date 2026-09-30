<?php

function processarTexto($texto) {

    $textoSemEspacos = textoSemEspacos($texto);
    $palavras = explode(" ", trim(preg_replace('/\s+/', ' ', $textoSemEspacos)));
    $repetidas = array_count_values($palavras);


    $qtdPalavras = count($palavras);
    $contarFrases = preg_match_all('/[.!?]/', $texto);
    

    return [
        'quantidade_palavras'   => $qtdPalavras,
        'quantidade_frases'     => $contarFrases,
        'palavra_mais_longa'    => acharPalavraMaisLonga($texto),
        'palavra_mais_curta'    => acharPalavraMaisCurta($texto),
        'palavras_repetidas'    => palavraRepetida($repetidas),
        'cinco_mais_frequentes' => cincoRepetidas($repetidas),
        'texto_formatado'       => formatarTexto($texto),
        'texto_sem_espacos'     => textoSemEspacos($texto)
    ];

}


function acharPalavraMaisLonga($texto) {
    $palavras = explode(" ",trim(preg_replace('/\s+/', ' ', $texto)));
    $palavraMaisLonga = "";

    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($palavraMaisLonga)) {
            $palavraMaisLonga = $palavra;
        }
    }

    return $palavraMaisLonga;
}

function acharPalavraMaisCurta($texto){
    $palavras = explode(" ",trim(preg_replace('/\s+/', ' ', $texto)));
    $palavraMaisCurta = $palavras[0];
    
    foreach ($palavras as $palavra) {
        if (strlen($palavra) < strlen($palavraMaisCurta)) {
            $palavraMaisCurta = $palavra;
        }
    }

    return $palavraMaisCurta;
}

function palavraRepetida($repetidas) {

    $contador = 0;

    foreach ($repetidas as $qtd) {
        if ($qtd > 1) {
            $contador++;
        }
    }

    return $contador;
}

function cincoRepetidas($repetidas, $limite = 5) {
    arsort($repetidas);
    return array_slice($repetidas, 0, $limite, true);
}

function formatarTexto($texto) {
    $textoFormatado = ucwords(strtolower($texto));
    return $textoFormatado;
}
 
function textoSemEspacos($texto) {
    $textoSemEspacos = preg_replace('/[^\p{L}\p{N}\s]/u', '', $texto);
    return $textoSemEspacos;
}

$texto = "Toca no gk fei";

$resultado = processarTexto($texto);

echo "Quantidade de palavras: " . $resultado['quantidade_palavras'] . "<br>";
echo "Quantidade de frases: " . $resultado['quantidade_frases'] . "<br>";
echo "Maior palavra: " . $resultado['palavra_mais_longa'] . "<br>";
echo "Menor palavra: " . $resultado['palavra_mais_curta'] . "<br>";
echo "Palavras repetidas: " . $resultado['palavras_repetidas'] . "<br>";