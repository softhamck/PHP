<?php
function ordenarBurbuja($vector) {
    $n = count($vector);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($vector[$j] > $vector[$j + 1]) {
                $temp = $vector[$j];
                $vector[$j] = $vector[$j + 1];
                $vector[$j + 1] = $temp;
            }
        }
    }
    return $vector;
}

// Crear un vector con 6 elementos
$vector = [5, 2, 9, 1, 3, 7];

// Llamar a la función de ordenación
$vectorOrdenado = ordenarBurbuja($vector);

// Imprimir el vector ordenado
echo "Vector original: " . implode(', ', $vector) . "\n";
echo "Vector ordenado: " . implode(', ', $vectorOrdenado);


/* ordena una lista de elementos comparando cada par de elementos adyacentes e intercambiándolos si están en el orden incorrecto. */
?>