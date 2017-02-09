<?php

require_once 'Conta.php';

$conta = new Conta(13);//parametro para o contrutor

//deposito de 700
$conta->deposita(700);

echo "Saldo: $conta->saldo" . PHP_EOL;

$resultado = $conta->saca(800);

var_dump($resultado);

if ($resultado == TRUE) {
  echo "Saque realizado com sucesso\n";
}else {
  echo "Valor insuficiente\n";
}

$v1 = $conta->saldoDisponivel();
echo "Saldo: $v1\n";
