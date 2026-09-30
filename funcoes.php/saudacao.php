<?php

function gerarSaudacao($hora){

    if($hora < 12){
        return "Bom dia!";
    }elseif($hora <= 18){
        return "Boa tarde!";
    }else{
        return "Boa noite!";
    }
}

$hora = 18;

echo "Hora atual: $hora" . "<br>";

echo gerarSaudacao($hora);