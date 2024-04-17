<?php

$input = [5, 3, 4, 3, 5, 5, 3];
$numeroUnico = null;

// Vamos percorrer todos os números no array
for ($i = 0; $i < count($input); $i++) {
    $numeroAtual = $input[$i];
    $contagem = 0; // Inicializamos a contagem para cada novo número

    // Contamos quantas vezes o número atual aparece no array
    for ($j = 0; $j < count($input); $j++) {
        if ($input[$j] == $numeroAtual) {
            $contagem++;
        }
    }

    // Se o número atual aparecer menos de 3 vezes, encontramos nosso número único
    if ($contagem != 3) {
        $numeroUnico = $numeroAtual;
        break;
    }
}

// Se encontramos o número único, mostramos o resultado
if ($numeroUnico !== null) {
    echo "O número não repetido é: " . $numeroUnico;
} else {
    echo "Não foi encontrado nenhum número não repetido.";
}
