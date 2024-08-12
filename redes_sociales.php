<?php
include("conexion.php");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, link FROM redes_sociales";
$result = $conexion->query($sql);

$redes = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $redes[] = $row;
    }
    
} 

$conexion->close();

echo json_encode($redes);
?>
