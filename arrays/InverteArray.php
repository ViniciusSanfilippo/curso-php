<?php

$vetor1 = array( 1, 2, 3, 4);
$vetor2 = array();

for ($i=0; $i < count($vetor1); $i++) {
  for ($j=count($vetor1); $j > count($vertor2); $j--) {
    $r = $vetor1[$i];
    $vetor1[$i] = $vetor2[$j];
    $vertor2[$j] = $r;
    echo "$vetor2[$j]";
  }
}
