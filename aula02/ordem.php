<?php 

// Array multidimensional = array de arrays
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

// a função receberá 2 arrays ($notas e nota de cada aluno) e retorna um inteiro
function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

// sort faz a ordenação e usort faz a ordenação de acordo com a orientação do usuário
usort($notas,'ordenaNotas'); // função para ordenar
var_dump($notas);