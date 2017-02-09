<?php


require_once 'CartaoDeCredito.php';

$c1 = new CartaoDeCredito(1111);
$c1->dataDeValidade = "01/01/2013";

$c2 = new CartaoDeCredito(2222);
$c2->dataDeValidade = "01/01/2014";


echo "CartaoDeCredito: $c1->numero\n";
echo "dataDeValidade: $c1->dataDeValidade\n";
echo "CartaoDeCredito: $c2->numero\n";
echo "dataDeValidade: $c2->dataDeValidade\n";
