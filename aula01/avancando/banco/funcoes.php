<?php

// Função para realizar saques
function sacar(array $conta, float $valorSacar): array // a função recebe um array e um float, retornando um array
{
    if ($valorSacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;  
    } else {
        exibeMensagem("Seu depósito precisa ser um valor positivo");
    }
    return $conta;
}

// Funçao para exibir mensagem
function exibeMensagem ($mensagem) 
{
    echo $mensagem . '<br>';
}  

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo $html = "<li>Titular: $titular. Saldo: $saldo<li>";
}