<?php
function contarVogais($texto) {
   
    preg_match_all('/[aeiou]/i', $texto, $matches);
    
    return count($matches[0]);
}
$frase = "Programar em PHP é muito legal.";
echo contarVogais($frase); 
?>
