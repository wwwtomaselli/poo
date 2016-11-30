<?php
namespace POO\Motor;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MotorTurbo
 *
 * @author CursoPHP2
 */
final class MotorTurbo extends Motor
{
    private $turbo = false;
    
    public function ativarTurbo()
    {
        $this->turbo = true;
    }
}
