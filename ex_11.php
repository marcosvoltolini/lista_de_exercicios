<?php  

 function formatarTexto( string $texto): array {

    return[
        'maiusculos' => mb_strtoupper($texto, 'UTF-8'),
        'minusculos' => mb_strtolower($texto, 'UTF-8'),
        'primeiraLetra' => mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8'),
        'Caracteres' => mb_strlen($texto, 'UTF-8')
    ]

 ;}

 $textoOriginal = "Na verdade o pelé calado é um poeta né";
 $resultados = formatarTexto($textoOriginal);

 echo "Texto maiúsculo: " . $resultados['maiusculos'] . "<br>";
 echo "Texto minúsculo: " . $resultados['minusculos'] . "<br>";    
 echo "primeira letra maiúscula: " . $resultados['primeiraLetra'] . "<br>";
 echo "Quantidade de caracteres: " . $resultados['Caracteres'] . "<br>";