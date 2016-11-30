<?php
namespace MWM;

use \POO\Motor\InterfaceMotor;

/**
 * Description of Motor
 *
 * @author aluno
 */
class Motor implements InterfaceMotor
{
    public function acelerar($intensidade = 0) {
        return $intensidade;
    }

//put your code here
}
