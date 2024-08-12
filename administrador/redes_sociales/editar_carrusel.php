<?php
include("../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $uploadDirectory = "../../img/";

    if (!empty($_FILES['imgs']['name'][0])) {
        // Solo permite una imagen para editar
        $imageName = basename($_FILES['imgs']['name'][0]);
        $targetFilePath = $uploadDirectory . $imageName;

        if (move_uploaded_file($_FILES['imgs']['tmp_name'][0], $targetFilePath)) {
            $sql = "UPDATE carrusel SET img = '$imageName' WHERE id = $id";
            if (!$conexion->query($sql)) {
                echo "Error al actualizar la imagen en la base de datos: " . $conexion->error;
            }
        } else {
            echo "Error al subir la imagen.";
        }
    }
    
    $conexion->close();
    header("Location: carrusel_imagenes.php");
    exit();
}
?>
