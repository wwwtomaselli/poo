<?php
require_once './Motor.php';

class Carro
{
	const MARCA = "Audi";
	const MODELO = "A3";

	public $cor;
	/**
         *
         * @var Motor
         */
        private $motor;
	private $porta = 4;
	private $tanqueCombustivel = 0.0;
	
	//se nao informado na chamada do metodo construtor, 
	//o parametro $cor recebe "branco"
	
        /**
         * 
         * @param Motor $motor
         * @param string $cor
         */
        public function __construct(Motor $motor, $cor = "branco")
	{
		$this->cor = $cor;
                $this->motor = $motor;
		$this->tanqueCombustivel = 10.0;
		
	}
	
	public function ligar()
	{
	}
	
	public function desligar()
	{
	}
	
	/**
         * Faz o carro andar
         * @param float $torque 
         */
        private function andar($torque)
	{
            echo "Andou " . $torque . " metros\n";
	}
	
        /**
         * Enviar aceleracao ao motor
         * @param int $intensidade Valor da aceleracao de 0 a 100
         */
        public function acelerar($intensidade)
        {
            $torque = $this->motor->acelerar($intensidade);
            $this->andar($torque);
        }
        
        public function frear()
        {
        }

        /**
         * Abastecer o carro
         * @param float $litros Quantidade de combustivel em litros
         */
	public function abastecer($litros)
	{
		$this->tanqueCombustivel += $litros;
	}
}

// https://git-scm.com/book/pt-br/v1
// https://services.github.com/on-demand/downloads/github-git-cheat-sheet.pdf