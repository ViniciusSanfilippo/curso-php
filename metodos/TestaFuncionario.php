<?php

require_once 'Funcionario.php';

$f1 = new Funcionario;
$f1->nome = "Marcelo Martins";
$f1->salario = 1800.57;

$f1->aumentarSalario(200);

echo "Salario: $f1->salario\n";
