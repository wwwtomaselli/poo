<pre><?php

function ola($nome)
{
    echo "Olá $nome!\n\n";
}

ola("VOCÊ");
$idade = 20;

$alo = function($nome) use (&$idade)
{
    echo "Alô $nome!!!\n\n";
    $idade = 35;
};

echo $idade;
echo "\n\n";

$alo("Você aí");

var_dump($alo);

echo "\n\n";
echo $idade;

function teste(Closure $param)
{
    echo "\n\n";
    $param("nós");
}

teste($alo);
teste(function($p){echo "Argumento: $p";});