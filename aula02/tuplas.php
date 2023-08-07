<?php

$dados = [
    'nome' =>'Vinícius', 
    'nota' => 10, 
    'idade' => 24
];

//list($nome, $nota, $idade) = $dados;
// a função list utiliza índices numérico começando do 0

// percorre o array e transforma cada uma das chaves em uma variável
// Fazer o extract apenas em dados em que confia
extract($dados);
var_dump($nome, $nota, $idade);

// pega variáveis e transforma em um array 
var_dump(compact('nome', 'nota', 'idade'));
