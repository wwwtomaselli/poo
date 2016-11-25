<?php

class Carro
{
	const MARCA = "Audi";
	const MODELO = "A3";

	public $cor;
	private $motor = 1.0;
	private $porta = 4;
	private $tanqueCombustivel = 0.0;
	
	//se nao informado na chamada do metodo construtor, 
	//o parametro $cor recebe "branco"
	public function __construct($cor = "branco")
	{
		$this->cor = $cor;
		$this->tanqueCombustivel = 10.0;
		
	}
	
	public function ligar()
	{
	}
	
	public function desligar()
	{
	}
	
	public function andar()
	{
	}
	
	public function abastecer($litros)
	{
		$this->tanqueCombustivel += $litros;
	}
}

