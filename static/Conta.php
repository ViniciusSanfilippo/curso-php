<?php


class Conta{
  public $numero; // Atributos do Objeto
  public $saldo;// Atributos do Objeto
  public static $contador; // Atributos da classe (static)

  public function __construct()
  {
    self::$contador++;//$this->contador++; não funciona com static
  }

  static function zeraContador(){

    //envia email;

    self::$contador = 0;
  }
}
