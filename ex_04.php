<?php
function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
    $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
    $mi = "abcdefghijklmnopqrstuvyxwz"; 
    $nu = "0123456789"; 
    $si = "!@#$%¨&*()_+="; 

  if ($maiusculas){
        $senha = str_shuffle($ma);
  }
    if ($minusculas){
        $senha = str_shuffle($mi);
    }
    if ($numeros){
        $senha = str_shuffle($nu);
    }
    if ($simbolos){
        $senha = str_shuffle($si);
    }

    return substr(str_shuffle($senha),0,$tamanho);
}
echo gerarsenha(10, true, true, true, true);
?>