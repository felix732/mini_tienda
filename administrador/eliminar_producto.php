<?php
include './conexion.php';

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Comprobar si se ha enviado un ID
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $defaultImage = '../img/logo_cartas.png'; // Cambia esto por el nombre de tu imagen por defecto
    $defaultName = 'Mejores Producto Aqui';
    $defaultDescription = 'Envia un Whasap para atenderte';
    $defaultPrice = '-----'; // Cambia esto por el precio predeterminado que desees

    // Consulta SQL para actualizar el producto
    $sql = "UPDATE productos 
            SET nombre = ?, descripcion = ?, precio = ?, imagen = ?
            WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssi", $defaultName, $defaultDescription, $defaultPrice, $defaultImage, $id);

    if ($stmt->execute()) {
        echo "Producto actualizado con éxito.";
    } else {
        echo "Error al actualizar el producto: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID no especificado.";
}

$conexion->close();
header("Location: ./index.php"); // Redirige a la página de administración después de actualizar
exit();
?>
