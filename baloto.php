<?php
// Función para simular el juego de azar Baloto
function baloto() {
    $numeros = [];

    // Elegir cinco números entre 1 y 43
    while (count($numeros) < 5) {
        $numero = rand(1, 43);
        if (!in_array($numero, $numeros)) {
            $numeros[] = $numero;
        }
    }

    // Elegir el número adicional (Súper Bolota) entre 1 y 16
    $superBolota = rand(1, 16);

    // Ordenar los números
    sort($numeros);

    // Devolver el array con los números y la Súper Bolota
    return ['numeros' => $numeros, 'superBolota' => $superBolota];
}

// Uso de la función para obtener los números y la Súper Bolota del Baloto
$resultadoBaloto = baloto();
echo "Números del Baloto: " . implode(', ', $resultadoBaloto['numeros']) . "\n";
echo "Súper Bolota: " . $resultadoBaloto['superBolota'] . "\n";
?>
