<?php
include("../conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $link = $_POST['link'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE redes_sociales SET nombre=?, link=?, telefono=? WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssi", $nombre, $link, $telefono, $id);

    if ($stmt->execute()) {
        echo "Red social actualizada correctamente.";
    } else {
        echo "Error al actualizar la red social.";
    }

    $stmt->close();
    $conexion->close();
}
?>
