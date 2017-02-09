<?php

require_once 'Agencia.php';

$ag1 = new Agencia(1234);
$ag2 = new Agencia(5678);

echo "Agencia1: $ag1->numero\n";
echo "Agencia2: $ag2->numero\n";
