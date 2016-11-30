<pre><?php

//require_once './autoload.php';

require_once 'motor/InterfaceMotor.php';
require_once "veiculos/Carro.php";
require_once "motor/Motor.php";
require_once "motor/Motor18.php";
require_once 'motor/MotorTurbo.php';
require_once 'mwm/Motor.php';


//Shift + F6: executar o servidor do PHP

use \POO\Motor\Motor18;
use \POO\Motor\MotorTurbo;
use \POO\Veiculos\Carro;

$motor = new Motor18();
$motorTurbo = new MotorTurbo();
//$motor = "motor";
$veiculo1 = new Carro($motor, "vermelho");
$veiculo2 = new Carro($motor);
$veiculo3 = new Carro($motorTurbo, "amarelo");

var_dump($veiculo1);
$veiculo1->acelerar(40);
echo "\nPotencia do motor: " . \POO\Motor\Motor::POTENCIA;
echo "\n\n\n";

var_dump($veiculo2);
$veiculo2->acelerar(40);
echo "\nPotencia do motor: " . Motor18::POTENCIA;
echo "\n\n\n";

var_dump($veiculo3);
$veiculo3->ligarDesligar();

//Se "$veiculo3->ligarDesligar()" nao for executado antes 
//(no caso, nao ligar o carro antes),
//"$veiculo3->acelerar(40)" exibira uma mensagem de alerta
//(pois tentou acelerar o carro sem estar ligado)
$veiculo3->acelerar(40);
echo "\nPotencia do motor: " . MotorTurbo::POTENCIA;
echo "\n\n\n";
$veiculo3->estacionar();
$veiculo1->tanqueCombustivel = 120;

$motorMWM = new \MWM\Motor();
$veiculoMWM = new Carro($motorMWM);

echo json_encode($motor);
echo "\n";
echo count($motor);
echo "\n";
