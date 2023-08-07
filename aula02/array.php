<?php

// true é convertido pra 1 e false para 0

$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;