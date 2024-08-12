<?php
include("../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDirectory = "../../img/";
    $maxImages = 10;
    $result = $conexion->query("SELECT COUNT(*) AS count FROM carrusel");
    $row = $result->fetch_assoc();
    $currentImageCount = $row['count'];

    if ($currentImageCount >= $maxImages) {
        echo "El número máximo de imágenes permitidas es $maxImages.";
    } else {
        if (!empty($_FILES['imgs']['name'][0])) {
            foreach ($_FILES['imgs']['tmp_name'] as $key => $tmpName) {
                $imageName = basename($_FILES['imgs']['name'][$key]);
                $targetFilePath = $uploadDirectory . $imageName;

                if (move_uploaded_file($tmpName, $targetFilePath)) {
                    $sql = "INSERT INTO carrusel (img) VALUES ('$imageName')";
                    if (!$conexion->query($sql)) {
                        echo "Error al guardar la imagen en la base de datos: " . $conexion->error;
                    }
                } else {
                    echo "Error al subir la imagen.";
                }
            }
        }
    }
    
    $conexion->close();
    header("Location: ./carrusel_imagenes.php");
    exit();
}
?>
