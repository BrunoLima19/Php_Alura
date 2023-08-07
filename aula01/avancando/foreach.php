<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.987-41' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '159.874.256-70' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
];

$contasCorrentes['721.874.258-70'] = [
    'titular' => 'Claudia',
    'sado' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}