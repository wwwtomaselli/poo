<?php

namespace POO\Motor;

/**
 *
 * @author CursoPHP2
 */
// a interface contem a assinatura (prototipo) de cada método
// nao implementar os metodos aqui, mas nas classes
interface InterfaceMotor {
    public function acelerar($intensidade = 0);
}
