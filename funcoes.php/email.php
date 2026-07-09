<?php

function validarEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

$email = "joaozinho@gmail.com";

echo "O email era: $email" . "<br>";
echo "O email é válido: " . (validarEmail($email) ? "Sim" : "Não");