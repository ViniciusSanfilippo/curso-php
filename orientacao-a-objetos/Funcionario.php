<?php

class Funcionario{
  public $nome;
  public $salario;

}

$f1 = new Funcionario;
$f1->nome = "Marcelo Martins";
$f1->salario = 1800.57;

$f2 = new Funcionario;
$f2->nome = "Rafael Cosentino";
$f2->salario = 2000.88;

echo "Nome: $f1->nome\nSalario: $f1->salario\nNome: $f2->nome\nSalario: $f2->salario\n ";
