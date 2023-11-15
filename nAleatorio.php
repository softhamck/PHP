<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

function numeroAleatorioPrimo() {
    $numero = rand(1, 100); // Genera un número aleatorio entre 1 y 100

    if (esPrimo($numero)) {
        echo "$numero es un número primo.";
    } else {
        echo "$numero no es un número primo.";
    }
}

// Uso de la función para generar un número aleatorio y verificar si es primo
numeroAleatorioPrimo();
?>
