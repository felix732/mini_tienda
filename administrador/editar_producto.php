<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    
    // Procesar la imagen subida
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['imagen']['tmp_name'];
        $fileName = $_FILES['imagen']['name'];
        $fileSize = $_FILES['imagen']['size'];
        $fileType = $_FILES['imagen']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedExts = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileExtension, $allowedExts)) {
            $uploadDirectory = '../img/';
            $targetFilePath = $uploadDirectory . basename($fileName);

            if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
                $sql = "UPDATE productos SET nombre=?, imagen=?, precio=?, descripcion=? WHERE id=?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ssdsi", $nombre, $targetFilePath, $precio, $descripcion, $id);

                if ($stmt->execute()) {
                    echo "Producto actualizado correctamente.";
                } else {
                    echo "Error al actualizar el producto: " . $conexion->error;
                }

                $stmt->close();
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            echo "Tipo de archivo no permitido. Solo se permiten imágenes.";
        }
    } else {
        echo "No se ha enviado una imagen o hubo un error en la carga.";
    }

    $conexion->close();
}
?>
