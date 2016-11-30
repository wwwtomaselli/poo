<pre><?php
require_once 'motor/InterfaceMotor.php';
require_once "veiculos/Carro.php";
require_once "motor/Motor.php";
require_once "motor/Motor18.php";
require_once 'motor/MotorTurbo.php';
require_once 'mwm/Motor.php';

//require: arquivo obrigatorio (exemplo: uma classe)
//include: arquivo nao obrigatorio  (exemplo: um template)
//once: nao executa novamente o arquivo caso ja tenha sido incluido alguma vez

//Shift + F6: executar o servidor do PHP

$veiculo2 = new Carro();

//var_dump($veiculo1, $veiculo2);

$veiculo2->cor = "vermelho";
$veiculo1->cor = "vermelho";

//var_dump($veiculo1,$veiculo2);

if($veiculo1 == $veiculo2)
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

