<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosalunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

// Juntando dois arrays
// $alunos2022 = array_merge($alunos2021, $novosalunos);

// Desempacotando os dois arrays e adicionando mais um nome no meio deles
$alunos2022 = [...$alunos2021, 'Bruno', ...$novosalunos];

// Adiciona nomes ao final da lista
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

// Adiciona nomes ao começo da lista
array_unshift($alunos2022, 'Stephane', 'Rafaela');

// Remove o primeiro elemento do array
echo array_shift($alunos2022) . PHP_EOL;

// Remove o último elemento do array
echo array_pop($alunos2022) . PHP_EOL;


var_dump($alunos2022);