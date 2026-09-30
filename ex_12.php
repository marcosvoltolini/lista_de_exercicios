<?php

function analisarProdutos($produtos, $produtoPesquisa)
{
    $Caro = $produtos[0];
    $Barato = $produtos[0];
    $soma = 0;
    $encontrado = false;

    for ($i = 0; $i < count($produtos); $i++) {

    $soma += $produtos[$i]["preco"];

    if ($produtos[$i]["preco"] > $Caro["preco"]) {
        $Caro = $produtos[$i];
    }
    if ($produtos[$i]["preco"] < $Barato["preco"]) {
        $Barato = $produtos[$i];
    }
    if (strtolower($produtos[$i]["nome"]) == strtolower($produtoPesquisa)) {
        $encontrado = $produtos[$i];
    }
}
    $media = $soma / count($produtos);

    return [
        "Caro" => $Caro,
        "Barato" => $Barato,
        "media" => $media,
        "pesquisa" => $encontrado
    ];
}

$produtos = [
    ["nome" => "Arroz", "preco" => 25.50],
    ["nome" => "Feijão", "preco" => 10.90],
    ["nome" => "Macarrão", "preco" => 7.80],
    ["nome" => "Azeite", "preco" => 39.90]
];

$produtoPesquisa = "Feijão";

$resultado = analisarProdutos($produtos, $produtoPesquisa);

echo "Produto mais caro: " . $resultado["Caro"]["nome"] . " - R$ " . $resultado["Caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultado["Barato"]["nome"] . " - R$ " . $resultado["Barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["media"], 2, ",", ".") . "<br>";

if ($resultado["pesquisa"]) {
    echo "Produto encontrado: " . $resultado["pesquisa"]["nome"] .
         " - R$ " . $resultado["pesquisa"]["preco"];
} else {
    echo "Produto não encontrado.";
}