<?php
function  analisarTexto(){
    $texto = "Mas o filha da puta era de raça (de raça) Me envolvi com o Conde Drácula (Drácula) Fiquei com o vampiro de Madureira Chupou minha buceta menstruada Filha da puta era de raça (de raça) Me envolvi com o Conde Drácula (Drácula) Fiquei com o vampiro de Madureira Chupou minha buceta menstruada.";
    $tamanho = strlen($texto);
    $palavras = str_word_count($texto);
    $vogais = preg_match_all('/[aeiouAEIOU]/', $texto);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    echo "Texto: " . $texto . "<br>";
    echo "Tamanho: " . $tamanho . "<br>";
    echo "Número de palavras: " . $palavras . "<br>";
    echo "Número de vogais: " . $vogais . "<br>";
    echo "Número de consoantes: " . $consoantes . "<br>";
}
echo analisarTexto();