<?php

require_once 'Agencia.php';

class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;

  public function __construct($agencia)
  {
    $this->agencia = $agencia;
  }



}
