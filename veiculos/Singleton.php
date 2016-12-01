<?php

namespace POO\Veiculos;

/**
 * Metodo de projeto: Singleton (somente UM objeto da classe)
 *
 * @author aluno
 */
class Singleton {
    
    //o unico objeto da classe, inicialmente vazio
    static private $obj = null;    
    
    private function __construct()
    {
        //evita instanciar a classe diretamente
    }
    
    //funcao para criar indiretamente o objeto da classe
    static public function criar()
    {
        //se o objeto nao existe, criar um
        if(self::$obj === null)
        {
            self::$obj = new self();
        }
        //retorna o objeto criado ou ja existente
        return self::$obj;
    }
}
