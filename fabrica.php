<pre><?php
require_once "./Carro.php";
require_once "./Motor.php";
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

$motor = new Motor();
//$motor = "motor";
$veiculo1 = new Carro($motor, "vermelho");

$veiculo1->acelerar(40);
var_dump($veiculo1);
echo "Potencia do motor: " . Motor::POTENCIA;