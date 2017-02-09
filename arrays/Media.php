<?php

$resultado = 0;
for ($i=1; $i < count($argv) ; $i++)
{
  $resultado = $resultado + $argv[$i];
}
$resultado = $resultado/(count($argv)-1);
echo "$resultado\n";
