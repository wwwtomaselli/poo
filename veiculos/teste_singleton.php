<?php

namespace POO\Veiculos;

require_once 'Singleton.php';

$obj1 = Singleton::criar();
$obj2 = Singleton::criar();

//somente um objeto foi instanciado
var_dump($obj1, $obj2);
