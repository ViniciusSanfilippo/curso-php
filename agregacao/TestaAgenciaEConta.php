<?php

require_once "Agencia.php";
require_once 'Conta.php';

$agencia = new Agencia;
$agencia->numero = 1234;

$conta = new Conta;
$conta->numero = 4321;
$conta->saldo = 500.00;
$conta->limite = 550.00;

$conta->ag = $agencia;

echo "Agencia: {$conta->ag->numero}\nConta: $conta->numero\nSaldo: $conta->saldo\nLimite: $conta->limite";
