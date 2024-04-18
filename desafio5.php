<?php

$tamanho = 6;
$fibonacci = [1, 1];

for ($i = 2; $i < $tamanho; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo "[" . implode(", ", $fibonacci) . "]";