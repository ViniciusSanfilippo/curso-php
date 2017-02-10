<?php

require_once 'Secretario.php';
require_once 'Gerente.php';
require_once 'Telefonista.php';

$gerente = new Gerente;
$gerente->nome = "Joao";
$gerente->salario = 12000;
$gerente->senha = 1234;
$bonusGerente = $gerente->calculaBonus();

$secretario = new Secretario;
$secretario->nome = "Pedro";
$secretario->salario = 3000;
$secretario->ramal = 23456;
$bonusSecretario = $secretario->calculaBonus();

$telefonista = new Telefonista;
$telefonista->nome = "Jose";
$telefonista->salario = 2000;
$telefonista->estacaoDeTrabalho = 3;
$bonusTelefonista = $telefonista->calculaBonus();

echo "Gerente\n";
echo "Nome: $gerente->nome\n";
echo "Salario: $gerente->salario\n";
echo "Senha: $gerente->senha\n";
echo "Bonificação: $bonusGerente\n\n";
echo "Telefonista: $telefonista->nome\n";
echo "Salario: $telefonista->salario\n";
echo "Estacao de Trabalho: $telefonista->estacaoDeTrabalho\n";
echo "Bonificação: $bonusTelefonista\n\n";
echo "Secretario:\n";
echo "Nome: $secretario->nome\n";
echo "Salario: $secretario->salario\n";
echo "Ramal: $secretario->ramal\n";
echo "Bonificação: $bonusSecretario\n\n";
