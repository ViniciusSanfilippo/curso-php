<?php

class Turma {
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

$t1 = new Turma;
$t1->periodo = "Tarde";
$t1->serie = 8;
$t1->sigla = "A";
$t1->tipoDeEnsino = "Fundamental";

$t2 = new Turma;
$t2->periodo = "Manha";
$t2->serie = 5;
$t2->sigla = "B";
$t2->tipoDeEnsino = "Fundamental";

echo "periodo: $t1->periodo \nserie: $t1->serie \nsigla: $t1->sigla\ntipoDeEnsino: $t1->tipoDeEnsino\n";
echo "periodo: $t2->periodo \nserie: $t2->serie \nsigla: $t2->sigla\ntipoDeEnsino: $t2->tipoDeEnsino\n";
