<?php
function carregarClasse($nomeClasse)
{
    $nome_classe = strtolower($nomeClasse);
    $nome_Classe = array_pop($nomeClasse);
    $namespace = explode('\\', $nome_classe);
    array_shift($namespace);
}

spl_autoload_register("carregarClasse");