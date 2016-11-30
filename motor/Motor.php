<?php
namespace POO\Motor;
use POO\Motor\InterfaceMotor;

/**
 * 
 * Classe abstrata de motor
 * @author CursoPHP2
 * @link https://github.com/wwwtomaselli/POO
 */
//classe abstrata nao pode ser instanciada, serve como base para derivar outras
abstract class Motor implements InterfaceMotor
{
    const POTENCIA = 1.0;
    private $tipoCombustivel = "Flex";
    protected $aceleracao = 0;
    private $ligado = false;
    
    /**
     * Acelerar o motor do carro
     * @param int $intensidade Aceleracao de 0 a 100 (em %)
     * @return float
     */    
    public function acelerar($intensidade = 0)
    {
        if(! $this->estaLigado())
        {
            throw new \Exception("*** Não foi possivel acelerar porque o motor nao estah ligado!! ***");
        }
        $this->aceleracao = $intensidade;
        return $intensidade * self::POTENCIA;
    }
    
    /**
     * Liga o motor
     */
    public function ligar()
    {
        $this->ligado = true;
    }
    
    /**
     * Desliga o motor
     */
    public function desligar()
    {
        $this->ligado = false;
    }
    
    /**
     * Informa se o motor esta ou nao ligado
     * @return bool
     */
    public function estaLigado()
    {
        return $this->ligado;
    }
}
