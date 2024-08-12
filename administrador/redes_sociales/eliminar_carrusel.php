<?php
include("../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);
        $defaultImage = './logo.jpg'; // Nombre de la imagen por defecto

        // Actualizar la imagen a la imagen por defecto
        $sql = "UPDATE carrusel SET img = ? WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('si', $defaultImage, $id);

        if ($stmt->execute()) {
            echo "Imagen actualizada a la imagen por defecto.";
        } else {
            echo "Error al actualizar la imagen: " . $conexion->error;
        }

        $stmt->close();
    }

    $conexion->close();
}
?>
