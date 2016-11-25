<?php

/**
 * 
 * Classe generica de motor
 * @author Eu Mesmo
 * @link https://github.com/wwwtomaselli/POO
 */
class Motor 
{
    private $potencia = 2.0;
    private $tipoCombustivel = "Flex";
    private $aceleracao = 0;
    
    /**
     * Acelerar o motor do carro
     * @param int $intensidade Aceleracao de 0 a 100 (em %)
     * @return float
     */    
    public function acelerar($intensidade = 0)
    {
        $this->aceleracao = $intensidade;
        return $intensidade * $this->potencia;
    }
    
}
