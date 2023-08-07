<?php

$notas = [
    'Alex' => 10, 
    'Ana' => 8,
    'João' => 9,
    'Roberto' => 7, 
    'Vinicius' => 6
];

//sort($notas); // utiliza a forma inversa do sort | o 'a' no começo é para manter as chaves
//var_dump($notas);

// sort -> ordena em forma crescente
// rsort -> ordena em forma decrescente
// asort -> ordena na forma crescente mantendo as chaves
// arsort -> ordena na forma decrescente mantendo as chaves
// ksort -> ordena utilizando as chaves de forma crescente (alfabetica)
// krsort -> ordena as chaves de forma decrescente (alfabetica)
// usort -> utiliza as chaves como critério para ordenar
// uksort -> recebe a chave de um array e a chave de outro

// is_array utilizado para verificar se é um array
if (is_array($notas)) {
    echo 'Sim, é um array!' . PHP_EOL;
}

function funcao(array $valor)
{
    for ($i = 0; $i < count($valor); $i++) {
        echo $valor[$i];
    }
}

// var_dump(array_is_list($notas));  ->  Funciona apenas no php 8.1

echo 'Vinícius fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));

echo 'Ana fez a prova: ' .PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Algue tirou 10?: ' .PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?: ' .PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;

// array_key_exists -> verifica se a chave existe
// in_array -> verifica se o valor existe
// isset -> verifica se a chave existe e não é nula