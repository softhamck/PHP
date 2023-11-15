<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopilar los datos del formulario
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $pedido = "";

    // Comprobar si se eligieron pizzas y registrarlas
    if (isset($_POST['jamon_queso'])) {
        $cantidad_jamon_queso = $_POST['cantidad_jamon_queso'];
        $pedido .= "Pizza Jamón y Queso: $cantidad_jamon_queso\n";
    }

    if (isset($_POST['napolitana'])) {
        $cantidad_napolitana = $_POST['cantidad_napolitana'];
        $pedido .= "Pizza Napolitana: $cantidad_napolitana\n";
    }

    if (isset($_POST['muzzarella'])) {
        $cantidad_muzzarella = $_POST['cantidad_muzzarella'];
        $pedido .= "Pizza Muzzarella: $cantidad_muzzarella\n";
    }

    // Guardar el pedido en el archivo "pedidos.txt"
    if (!empty($pedido)) {
        $pedido_info = "Nombre: $nombre\nDirección: $direccion\n$pedido\n";

        if (file_put_contents('pedidos.txt', $pedido_info, FILE_APPEND | LOCK_EX)) {
            echo "Pedido registrado exitosamente.";
        } else {
            echo "Error al registrar el pedido.";
        }
    } else {
        echo "No se seleccionaron pizzas.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Pizzas</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="jamon_queso">Jamón y Queso:</label>
        <input type="checkbox" id="jamon_queso" name="jamon_queso">
        <label for="cantidad_jamon_queso">Cantidad:</label>
        <input type="text" id="cantidad_jamon_queso" name="cantidad_jamon_queso"><br><br>

        <label for="napolitana">Napolitana:</label>
        <input type="checkbox" id="napolitana" name="napolitana">
        <label for="cantidad_napolitana">Cantidad:</label>
        <input type="text" id="cantidad_napolitana" name="cantidad_napolitana"><br><br>

        <label for="muzzarella">Muzzarella:</label>
        <input type="checkbox" id="muzzarella" name="muzzarella">
        <label for="cantidad_muzzarella">Cantidad:</label>
        <input type="text" id="cantidad_muzzarella" name="cantidad_muzzarella"><br><br>

        <input type="submit" name="submit" value="Confirmar">
    </form>
</body>
</html>