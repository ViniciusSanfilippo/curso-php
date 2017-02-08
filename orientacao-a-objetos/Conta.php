<?php


class Conta {
  public $numero;
  public $saldo;
  public $limite;
//  public $dono;

}

$conta =new Conta;
$conta->numero = 123;
$conta->saldo = 550;
$conta->limite = 500;
/*
class Cliente {
  public $nome;

}

$cliente = new Cliente;

$cliente->nome = "Rafael Cosentino";

$conta->dono = $cliente;

echo "Nome do dono da conta: {$conta->dono->nome}\n";
*/
echo "Numero da conta: $conta->numero\n";
echo "Saldo: $conta->saldo\n";
echo "Limite: $conta->limite\n";
