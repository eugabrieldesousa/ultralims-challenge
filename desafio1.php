<?php

$input = [5, 3, 4, 3, 5, 5, 3];
$numeroUnico = null;

for ($i = 0; $i < count($input); $i++) {
    $numeroAtual = $input[$i];
    $contagem = 0;

    for ($j = 0; $j < count($input); $j++) {
        if ($input[$j] == $numeroAtual) {
            $contagem++;
        }
    }

    if ($contagem != 3) {
        $numeroUnico = $numeroAtual;
        break;
    }
}

if ($numeroUnico !== null) {
    echo "O número não repetido é: " . $numeroUnico;
} else {
    echo "Não foi encontrado nenhum número não repetido.";
}