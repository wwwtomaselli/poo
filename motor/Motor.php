<?php
namespace POO\Motor;

/**
 * 
 * Classe abstrata de motor
 * @author CursoPHP2
 * @link https://github.com/wwwtomaselli/POO
 */
//classe abstrata nao pode ser instanciada, serve como base para derivar outras
abstract class Motor 
{
    const POTENCIA = 1.0;
    private $tipoCombustivel = "Flex";
    protected $aceleracao = 0;
    
    /**
     * Acelerar o motor do carro
     * @param int $intensidade Aceleracao de 0 a 100 (em %)
     * @return float
     */    
    public function acelerar($intensidade = 0)
    {
        $this->aceleracao = $intensidade;
        return $intensidade * self::POTENCIA;
    }
    
}
