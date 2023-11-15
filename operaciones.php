<?php
function operacionesMatematicas($numero1, $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;

    if ($numero2 != 0) {
        $division = $numero1 / $numero2;
    } else {
        $division = "Error: División por cero";
    }

    return [
        'suma' => $suma,
        'resta' => $resta,
        'multiplicacion' => $multiplicacion,
        'division' => $division,
    ];
}

// Ejemplo de uso de la función
$numero1 = 10;
$numero2 = 5;

$resultados = operacionesMatematicas($numero1, $numero2);

echo "Suma: " . $resultados['suma'] . "\n";
echo "Resta: " . $resultados['resta'] . "\n";
echo "Multiplicación: " . $resultados['multiplicacion'] . "\n";
echo "División: " . $resultados['division'] . "\n";
?>
