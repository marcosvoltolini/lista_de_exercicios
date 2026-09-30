<?php

function  analisarSenha($senha) {

    $qtdMaiusculas = contarMaiusculas($senha);
    $qtdMinusculas = contarMinusculas($senha);
    $qtdNumeros = contarNumeros($senha);
    $qtdCaracteresEspeciais = contarCaracteresEspeciais($senha);
    $tamanho = strlen($senha);

    $nivelSeguranca = validarSenha($senha);

    return [
        'senha' => $senha,
        'qtdMaiusculas' => $qtdMaiusculas,
        'qtdMinusculas' => $qtdMinusculas,
        'qtdNumeros' => $qtdNumeros,
        'qtdCaracteresEspeciais' => $qtdCaracteresEspeciais,
        'tamanho' => $tamanho,
        'nivelSeguranca' => $nivelSeguranca
    ];

}

function contarMaiusculas($senha) {
    return preg_match_all('/[A-Z]/', $senha);
}

function contarMinusculas($senha) {
    return preg_match_all('/[a-z]/', $senha);
}

function contarNumeros($senha) {
    return preg_match_all('/[0-9]/', $senha);
}

function contarCaracteresEspeciais($senha) {
    return preg_match_all('/[\W_]/', $senha);
}


function tamanhoSenha($senha) {
    return strlen($senha) >= 8;
}

function validarSenha($senha) {

    if(tamanhoSenha($senha)  && contarMaiusculas($senha) && contarMinusculas($senha) && contarNumeros($senha) && contarCaracteresEspeciais($senha)){
        return "Senha forte Muito";
    }  
    if(tamanhoSenha($senha) && contarMaiusculas($senha) && contarMinusculas($senha) && contarNumeros($senha)){
        return "Senha forte";
    }
     if(tamanhoSenha($senha) && contarMaiusculas($senha)&& contarMinusculas($senha)){
        return "Senha media";
    }
    if(tamanhoSenha($senha) && contarMaiusculas($senha) ){
        return "Senha fraca";
    }
}

$senha = "Rafa12345";

$resultado = analisarSenha($senha);

echo "Senha: " . $resultado['senha'] . "<br>";
echo "Maiúsculas: " . $resultado['qtdMaiusculas'] . "<br>";
echo "Minúsculas: " . $resultado['qtdMinusculas'] . "<br>";
echo "Números: " . $resultado['qtdNumeros'] . "<br>";
echo "Caracteres especiais: " . $resultado['qtdCaracteresEspeciais'] . "<br>";
echo "Tamanho: " . $resultado['tamanho'] . "<br>";
echo "Nível de segurança: " . $resultado['nivelSeguranca'];