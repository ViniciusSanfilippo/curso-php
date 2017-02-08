<?php

require_once('Cliente.php');// OU spl_autoload_register();


class CartaoDeCredito {

  public $numero;
  public $dataDeValidade;
  public $cliente;
}

$cartao1 = new CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->dataDeValidade="01/01/2013";
$cartao1->cliente = $cliente1;

$cartao2 = new CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->dataDeValidade = "01/01/2014";
$cartao2->cliente = $cliente2;


echo "Nome do dono da conta: {$cartao1->cliente->nome}\n";
echo "numero: $cartao1->numero\n";
echo "dataDeValidade: $cartao1->dataDeValidade\n";

echo "Nome do dono da conta: {$cartao2->cliente->nome}\n";
echo "numero: $cartao2->numero\n";
echo "dataDeValidade: $cartao2->dataDeValidade\n";
