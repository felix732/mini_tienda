<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $imagen = $_POST['imagen'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE productos SET nombre=?, imagen=?, precio=?, descripcion=? WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssdsi", $nombre, $imagen, $precio, $descripcion, $id);

    if ($stmt->execute()) {
        echo "Producto actualizado correctamente";
    } else {
        echo "Error al actualizar el producto: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
