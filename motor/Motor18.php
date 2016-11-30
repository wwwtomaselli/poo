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
final class Motor18 extends Motor //MotorMWM
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
}
