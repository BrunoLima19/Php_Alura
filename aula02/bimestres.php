<?php

$notasBimestre1 = [
    'Vinicius' => 6, 
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7, 
    'Maria' => 9
];

$notasBimestre2 = [
    'Vinicius' => 6, 
    'Ana' => 10, 
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notaBimestre1, $notaBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

// Fazendo a diferença entre arrays com base nos valores dos elementos
//var_dump(array_diff($notasBimestre1, $notasBimestre2));

// Fazendo a diferença entre arrays com base nos valores das chaves
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// Fazendo a diferença entre arrays com base nos dois valores, elementos e chave
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));