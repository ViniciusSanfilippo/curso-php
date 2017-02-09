<?php

class Conta{

  public $numero;
  public $saldo;

  public function __construct($numero) //construtor obriga a passar parametros
  {
    $this->numero = $numero;
  }

  public function deposita($valor)
  {
    $this->saldo += $valor;
  }

  function saca($valor)
  {
    if ($valor <= $this->saldo){
      $this->saldo -= $valor;
      return TRUE;
    }else{
      return FALSE;
    }
  }

  function saldoDisponivel()
  {
    return $this->saldo;
  }
}
