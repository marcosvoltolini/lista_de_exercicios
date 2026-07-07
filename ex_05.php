<?php
function analisarTexto(){
    $texto = "A sexta estrela não esta na camisa, porque está no campo (Neymar)";
}
echo strlen($texto);
echo substr_count($texto, 'aeiouAEIOU');
echo substr_count($texto, 'bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ')