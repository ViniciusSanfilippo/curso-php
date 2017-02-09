<?php

class Funcionario{
  public $nome;
  public $salario;

  public function aumentarSalario($valor){
    $this->salario += $valor;
  }

  public function consultarDados(){
    return $this->nome;
  }

}
