<?php

// IMC = peso / altura ^ 2

$peso = 140;
$altura = 1.80;
$imc = $peso / $altura ** 2;
$imc_form = number_format($imc, 2, ',', '.');

if ($imc < 18.5) {
    echo "Seu IMC é $imc_form. Você está abaixo do peso!" . PHP_EOL;
}
elseif ($imc >= 18.6 and $imc <= 25) {
    echo "Seu IMC é $imc_form. Você está dentro do peso!" . PHP_EOL;
}
elseif ($imc > 25) {
    echo " Seu IMC é $imc_form. Você está acima do peso!" . PHP_EOL;
}