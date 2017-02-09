<?php
// php Argumentos1.php DD PP 22
var_dump($argv); //$argv guarda nome do arquivo e os parametros passados 

for ($i=1; $i < count($argv) ; $i++)
{
  echo "$argv[$i]" . PHP_EOL;
}
