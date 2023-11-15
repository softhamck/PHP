<?php
function sumar($numero1, $numero2) {
    $resultado = $numero1 + $numero2;
    return $resultado;
}

function calcularAreaCirculo($radio) {
    $area = M_PI * pow($radio, 2);
    return $area;
}

// Uso de las funciones
$suma = sumar(5, 3);
echo "La suma es: $suma\n";

$radio = 5;
$area = calcularAreaCirculo($radio);
$areaFormateada = number_format($area, 3);
echo "El área del círculo es: $areaFormateada\n";
?>