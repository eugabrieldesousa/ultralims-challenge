<?php

$numero = 5;
$fatorial = 1;

for ($i = 2; $i <= $numero; $i++) {
    $fatorial *= $i;
}

echo "O fatorial de $numero é: $fatorial";