<?php
// Función para calcular el salario y deducción
function calcularSalario($nombre, $horasTrabajadas, $precioPorHora, $opcionDeduccion) {
    $salario = $horasTrabajadas * $precioPorHora;
    $deduccion = 0;

    if ($opcionDeduccion == 1) {
        $deduccion = $salario * 0.05;
    } elseif ($opcionDeduccion == 2) {
        $deduccion = $salario * 0.07;
    } elseif ($opcionDeduccion == 3) {
        $deduccion = $salario * 0.03;
    }

    $salarioNeto = $salario - $deduccion;

    echo "Nombre del empleado: $nombre\n";
    echo "Horas trabajadas: $horasTrabajadas\n";
    echo "Precio por hora: $precioPorHora\n";
    echo "Opción de deducción elegida: $opcionDeduccion\n";
    echo "Salario: $salario\n";
    echo "Deducción: $deduccion\n";
    echo "Salario neto: $salarioNeto\n";
}

// Ejemplo de uso de la función
$nombre = "Juan";
$horasTrabajadas = 40;
$precioPorHora = 10;
$opcionDeduccion = 1; // 1 para niños, 2 para abuelos, 3 para incapacitados

calcularSalario($nombre, $horasTrabajadas, $precioPorHora, $opcionDeduccion);
?>
