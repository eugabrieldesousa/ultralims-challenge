<?php

$lista = [3, 1, 2, 4, 6, 5];

usort($lista, function($a, $b) {

    $aPar = $a % 2 == 0;
    $bPar = $b % 2 == 0;

    if ($aPar && $bPar || !$aPar && !$bPar) {
        return 0;
    }

    if ($aPar) {
        return -1;
    }

    return 1;
});

print_r($lista);