<?php

class Conta {
  public $numero;
  public $saldo;
  public $limite;

}

$conta =new Conta;
$conta->numero = 123;
$conta->saldo = 550;
$conta->limite = 500;

echo "Numero da conta: $conta->numero\n";
echo "Saldo: $conta->saldo\n";
echo "Limite: $conta->limite\n";
