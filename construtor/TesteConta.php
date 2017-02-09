<?php


require_once 'Conta.php';

$c1 = new Conta(123);
$c1->numero = 1234;
$c1->saldo = 1000;
$c1->limite = 500;

$c2 = new Conta(123);
$c2->numero = 5678;
$c2->saldo = 2000;
$c2->limite = 250;

echo "agencia : $c1->agencia\n\n";
echo "numero1: $c1->numero\n";
echo "saldo1: $c1->saldo\n";
echo "limite1: $c1->limite\n";

echo "agencia : $c2->agencia\n\n";
echo "numero1: $c2->numero\n";
echo "saldo1: $c2->saldo\n";
echo "limite1: $c2->limite\n";
