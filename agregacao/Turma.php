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
