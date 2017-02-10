<?php

require_once 'Funcionario.php';

class Gerente extends Funcionario
{
  public $nome;
  //public $salario;
  //public $senha;

//sobrescrita ou reescrita de metodo
  public function calculaBonus()
  {
    //return $this->salario * self::PORCENTAGEM_DO_BONUS + 2 * $this->salario;
    return parent::calculaBonus() + 100;
  }
}
