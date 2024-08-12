<?php
include './conexion.php';

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta SQL para obtener los productos
$sql = "SELECT id, nombre, descripcion, imagen, precio FROM productos";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="logo">
          <img src="../img/logo_1.png" alt="logo">
        </div>
        <div class="links">
        <a href="./redes_sociales/carrusel_imagenes.php" class="link">Editar Carrusel de Imagenes</a>
        <a href="./redes_sociales/index.php" class="link">Editar Redes Sociales</a>
        <a href="../inicio_sesion.php" class="link">Cerrar Sesion</a>
        </div>
        <div class="menu-icon">
          <i class='bx bx-menu'></i>
          <i class='bx bx-x'></i>
        </div>
      </nav>
      <div class="mobile-menu">
        <a href="./redes_sociales/carrusel_imagenes.php" class="link">Editar Carrusel de Imagenes</a>
        <a href="./redes_sociales/index.php" class="link">Editar Redes Sociales</a>
        <a href="../inicio_sesion.php" class="link">Cerrar Sesion</a>
      </div>
      
      <div class="leaderboard">
        <div class="leaderboard-header">
            CONFIGURACIÓN
        </div>
        <div class="add-button">
            <i class="fas fa-plus"></i> Agregar Producto
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th class="actions">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td><img src='" . $row["imagen"] . "' alt='" . $row["nombre"] . "' class='card-image'></td>";
                        echo "<td>" . $row["precio"] . "</td>";
                        echo "<td class='actions'>";
                        echo "<button class='btn btn-primary edit-button' data-bs-toggle='modal' data-bs-target='#editModal' data-id='" . $row["id"] . "' data-nombre='" . $row["nombre"] . "' data-imagen='" . $row["imagen"] . "' data-precio='" . $row["precio"] . "'><i class='fas fa-edit'></i></button> ";
                        echo "<a href='eliminar_producto.php?id=" . $row["id"] . "' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay productos disponibles</td></tr>";
                }
                ?>
</tbody>

</tbody>

        </table>
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel"><i class="fas fa-edit"></i> Editar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm">
            <input type="hidden" id="productId" name="id">
            <div class="mb-3">
                <label for="nombre" class="form-label"><i class="fas fa-tag"></i> Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label"><i class="fas fa-image"></i> URL de Imagen:</label>
                <input type="text" class="form-control" id="imagen" name="imagen" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label"><i class="fas fa-dollar-sign"></i> Precio:</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label"><i class="fas fa-align-left"></i> Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
 document.addEventListener("DOMContentLoaded", function() {
    const editModal = document.getElementById('editModal');
    const editForm = document.getElementById('editForm');

    editModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const nombre = button.getAttribute('data-nombre');
        const imagen = button.getAttribute('data-imagen');
        const precio = button.getAttribute('data-precio');
        const descripcion = button.getAttribute('data-descripcion');

        document.getElementById('productId').value = id;
        document.getElementById('nombre').value = nombre;
        document.getElementById('imagen').value = imagen;
        document.getElementById('precio').value = precio;
        document.getElementById('descripcion').value = descripcion;
    });

    editForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(editForm);

        fetch('editar_producto.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert("Producto actualizado correctamente");
            location.reload();
        })
        .catch(error => console.error('Error:', error));
    });
});

</script>
</body>
</html>
