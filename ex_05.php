<?php
function  analisarTexto($texto)
{
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);
    $frases = substr_count($texto, '.');
    $vogais = preg_match_all('/[aeiou]/i', $texto);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto);

    return "caracteres: $caracteres,palavras: $palavras ,frases: $frases ,vogais: $vogais,consoantes: $consoantes";

}

$texto = "mais de uma hora só para entender esses bgl";

echo "Texto original: $texto <br>";
echo analisarTexto($texto);