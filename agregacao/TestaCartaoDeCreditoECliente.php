<?php

require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';

$cliente = new Cliente;
$cliente->nome = "Hannibal";
$cliente->codigo = 17;

$cartao = new CartaoDeCredito;
$cartao->numero = 4444;
$cartao->dataDeValidade = "10/11/2020";

$cartao->dono = $cliente;

echo "Numero cartao: $cartao->numero\nData de validade: $cartao->dataDeValidade\n";
echo "Nome do cliente: {$cartao->dono->nome}\n";
