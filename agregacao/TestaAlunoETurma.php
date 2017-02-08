<<?php


require_once 'Aluno.php';
require_once 'Turma.php';

$aluno1->turma = $t1;


echo "Turma: {$aluno1->turma->periodo}\n";
echo "Turma: {$aluno1->turma->serie}\n";
echo "Turma: {$aluno1->turma->sigla}\n";
echo "Turma: {$aluno1->turma->tipoDeEnsino}\n";
echo "Aluno: $aluno1->nome\n";
echo "Aluno: $aluno1->dataDeNascimento\n";
echo "Aluno: $aluno1->rg\n";
