<?php
namespace POO\Motor;

use POO\Motor\Motor;
use MWM\Motor as MotorMWM;

/**
 * Description of Motor18
 *
 * @author CursoPHP2
 */
//final class: nao permite ser classe base para heranca
//classe Motor18 eh derivada da classe base Motor
//uma classe pode implementar mais de uma interface
//uma classe derivada pode extender apenas uma classe base
final class Motor18 extends Motor implements \JsonSerializable, \Countable
{
    const POTENCIA = 1.8;
    
    private $nitro = false;
    
    public function ativarNitro()
    {
        $this->nitro = true;
    }
    
    //deve ter a mesma assinatura do metodo da classe base
    public function acelerar($intensidade = 0) 
    {
        $this->aceleracao = $intensidade;
        $torque = $intensidade * self::POTENCIA;
        if($this->nitro)
        {
            return $torque * 1.5;
        } else {
            return $torque;
        }
    }
    
    public function jsonSerialize() 
    {
        return array
        (
            "potencia" => self::POTENCIA,
            "nitro" => $this-> nitro
        );
    }
    
    public function count() 
    {
        return $this->aceleracao;
    }


}
