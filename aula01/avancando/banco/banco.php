<?php 

// include 'funcoes.php';
// require 'funcoes.php';
require_once 'funcoes.php'; // protege o código caso a página seja importada mais de uma vez

// Array com as contas correntes
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

// Tentativa de saque utilizanso function
$contasCorrentes['123.456.987-41'] = sacar($contasCorrentes['123.456.987-41'], 500);

// Tentativa de depósito utilizando function
$contasCorrentes['159.874.256-70'] = depositar($contasCorrentes['159.874.256-70'], 900);

// Excluir uma conta do array
unset($contasCorrentes['159.874.256-70']);

// Trocar o nome para letras maiúsculas
titularComLetrasMaiusculas($contasCorrentes['123.456.987-41']);

echo "<ul>";
// Mostrando o array com os dados da conta
foreach ($contasCorrentes as $cpf => $conta) {
    //['titular' => $titular, 'saldo' => $saldo] = $conta; // irrelevante para o projeto
    exibeConta($conta);
    //exibeMensagem (
        //$cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
        //"$cpf $conta[titular] $conta[saldo]" // -> string simples
        //"$cpf {$conta['titular']} {$conta['saldo']}" // -> string comlpexa
    //);
}
echo "</ul>";

# subrotina -> executa tudo que precisa dentro da subrotina, não retornando nenhum valor
# function -> executa o que precisa e retorna um valor
?>

// Começando a programar em html

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Contas correntes </h1>
    
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3> 
        </dt>
        <dd>
            Saldo: <?php echo $conta['saldo'] ?>;
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
