<pre><?php
require_once "veiculos/Carro.php";
require_once "motor/Motor.php";
require_once "motor/Motor18.php";
require_once 'motor/MotorTurbo.php';

//require: arquivo obrigatorio (exemplo: uma classe)
//include: arquivo nao obrigatorio  (exemplo: um template)
//once: nao executa novamente o arquivo caso ja tenha sido incluido alguma vez

//Shift + F6: executar o servidor do PHP

/*
 
$veiculo2 = new Carro();

//var_dump($veiculo1, $veiculo2);

$veiculo2->cor = "vermelho";
$veiculo1->cor = "vermelho";

//var_dump($veiculo1,$veiculo2);

/* if($veiculo1 == $veiculo2)
{
	echo "Veículos iguais\n";
} else {
	echo "Veículos diferentes\n";
}

if($veiculo1 === $veiculo2)
{
	echo "Veículos iguais\n";
} else {
	echo "Veículos diferentes\n";
} 

$veiculo2 = $veiculo1; //copia a REFERENCIA: se tornam o mesmo objeto
$veiculo2->cor = "amarelo";
//var_dump($veiculo1,$veiculo2);

$veiculo3 = clone $veiculo1; //cria outro objeto e copia os atributos
$veiculo3->cor = "preto";
$veiculo3->abastecer(15);
//var_dump($veiculo1,$veiculo3);
echo "\n\n\n" . $veiculo2::MARCA . " " . $veiculo2::MODELO . "\n"; 
 */

$motor = new \POO\Motor\Motor18();
$motorTurbo = new \POO\Motor\MotorTurbo();
//$motor = "motor";
$veiculo1 = new \POO\Veiculos\Carro($motor, "vermelho");
$veiculo2 = new \POO\Veiculos\Carro($motor);
$veiculo3 = new \POO\Veiculos\Carro($motorTurbo, "amarelo");

var_dump($veiculo1);
$veiculo1->acelerar(40);
echo "\nPotencia do motor: " . \POO\Motor\Motor::POTENCIA;
echo "\n\n\n";

var_dump($veiculo2);
$veiculo2->acelerar(40);
echo "\nPotencia do motor: " . \POO\Motor\Motor18::POTENCIA;
echo "\n\n\n";

var_dump($veiculo3);
$veiculo3->acelerar(40);
echo "\nPotencia do motor: " . \POO\Motor\MotorTurbo::POTENCIA;
echo "\n\n\n";
$veiculo3->estacionar();
$veiculo1->tanqueCombustivel = 120;
