<?php
include("../conexion.php");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta SQL
$sql = "SELECT nombre, link, mas_acciones, telefono FROM redes_sociales WHERE id = 3";
$result = $conexion->query($sql);

// Array para almacenar los resultados
$redesSociales = [];

if ($result->num_rows > 0) {
    // Llenar el array con los datos de la tabla
    while($row = $result->fetch_assoc()) {
        $redesSociales[] = $row;
    }
} else {
    echo "0 resultados";
}
$conexion->close();

// Pasar los datos al frontend en formato JSON
echo json_encode($redesSociales);
?>
