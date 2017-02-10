<?php

class Funcionario
{
  public $nome;
  public $salario;
  const PORCENTAGEM_DO_BONUS = 0.1; //CONSTANTE

  //public $senha;//gerente
  //public $ramal; //secretario

  public function calculaBonus()
  {
    return $this->salario * self::PORCENTAGEM_DO_BONUS;
  }
}
