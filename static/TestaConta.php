<?php

require_once 'Conta.php';

echo "Contador: " . Conta::$contador . PHP_EOL;

$conta1 = new Conta;
$conta1->$numero;
$conta1->saldo = 600;


$conta2 = new Conta;
$conta2->$contador;
$conta2->saldo = 1000;



echo "Contador Final:" .Conta::$contador . PHP_EOL;

Conta::zeraContador();

echo "Contador Final:" .Conta::$contador . PHP_EOL;
