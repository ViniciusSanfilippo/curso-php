<?php

require_once 'Secretario.php';
require_once 'Gerente.php';

$gerente = new Gerente;
$gerente->nome = "Joao";
$gerente->salario = 12000;
$gerente->senha = 1234;

$secretario = new Secretario;
$secretario->nome = "Pedro";
$secretario->salario = 3000;
$secretario->ramal = 23456;
