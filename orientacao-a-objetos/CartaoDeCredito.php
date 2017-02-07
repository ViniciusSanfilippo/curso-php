<?php

class CartaoDeCredito {

  public $numero;
  public $dataDeValidade;
}

$cartao1 = new CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->dataDeValidade="01/01/2013";

$cartao2 = new CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->dataDeValidade = "01/01/2014";

echo "numero: $cartao1->numero\n";
echo "dataDeValidade: $cartao1->dataDeValidade\n";
echo "numero: $cartao2->numero\n";
echo "dataDeValidade: $cartao2->dataDeValidade\n";
