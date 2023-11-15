<?php
// Función para obtener la hora actual en una zona horaria específica
function obtenerHora($zonaHoraria) {
    date_default_timezone_set($zonaHoraria);
    return date('Y-m-d H:i:s');
}

// Uso de la función para obtener la hora y fecha
$zonaHorariaColombia = 'Colombia/Bogotá'; 
$horaActualColombia = obtenerHora($zonaHorariaColombia);
echo "Hora actual en $zonaHorariaColombia: $horaActualColombia";
?>