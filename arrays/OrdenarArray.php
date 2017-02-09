<?php

sort($argv);

for ($i=0; $i < count($argv) ; $i++)
{
  echo "$argv[$i]" . PHP_EOL;
}
