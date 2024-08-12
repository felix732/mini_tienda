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
    <style>
        .leaderboard {
            width: 90%;
            max-width: 800px;
            margin: 50px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .leaderboard-header {
            background-color: #ffe680;
            color: black;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            border-bottom: 2px solid #f0f0f0;
        }
        .add-button {
            background-color: #ffe680;
            color: black;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            font-weight: bold;
        }
        .add-button i {
            margin-right: 5px;
        }
        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            border: 1px solid #ddd;
            padding: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            white-space: nowrap;
        }
        th {
            background-color: #f0f0f0;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #fff;
        }
        .highlight {
            background-color: #ffe680;
            font-weight: bold;
        }
        .actions {
            text-align: center;
        }
        .actions i {
            cursor: pointer;
            margin: 0 5px;
            color: #555;
        }
        .actions i:hover {
            color: #000;
        }
        .card-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
        @media screen and (max-width: 768px) {
  
  
  .menu-icon {
      font-size: 30px;
    display: block;
  }
  .links {
    display: none;
  }

  .mobile-menu {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 70px;
    left: 0;
    transform: translate(40%, 10%);
    border-radius: 3%;
    width: 70%;
    background-color: #676767;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 999;
  }

  .mobile-menu.show {
    display: flex;
  }

  

}
@media screen and (max-width: 600px) {
  
  
  .menu-icon {
      font-size: 30px;
    display: block;
  }
  .links {
    display: none;
  }

  .mobile-menu {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 70px;
    left: 0;
    transform: translate(5%, 10%);
    border-radius: 3%;
    width: 90%;
    background-color: #676767;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 999;
  }

  .mobile-menu.show {
    display: flex;
  }

  

}
    </style>
</head>
<body>
    <nav>
        <div class="logo">
          <img src="../img/logo_1.png" alt="logo">
        </div>
        <div class="links">
        <a href="./redes_sociales/carrusel_imagenes.php" class="link">Editar Carrusel de Imagenes</a>
        <a href="./redes_sociales/index.php" class="link">Editar Redes Sociales</a>
        <a href="./destroy_session.php" class="link">Cerrar Sesion</a>
        </div>
        <div class="menu-icon">
          <i class='bx bx-menu'></i>
          <i class='bx bx-x'></i>
        </div>
      </nav>
      <div class="mobile-menu">
        <a href="./redes_sociales/carrusel_imagenes.php" class="link">Editar Carrusel de Imagenes</a>
        <a href="./redes_sociales/index.php" class="link">Editar Redes Sociales</a>
        <a href="./destroy_session.php" class="link">Cerrar Sesion</a>
      </div>
      
      <div class="leaderboard">
        <div class="leaderboard-header">
            CONFIGURACIÓN
        </div>
        <div class="add-button">
            <i class="fas fa-plus"></i> Agregar Producto
        </div>
        <div class="table-container">
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
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["nombre"] . "</td>";
                            echo "<td>" . $row["descripcion"] . "</td>";
                            echo "<td><img src='../img/" . $row["imagen"] . "' class='card-image'></td>";
                            echo "<td>" . $row["precio"] . "</td>";
                            echo "<td class='actions'>";
                            echo "<button class='btn btn-primary edit-button' data-bs-toggle='modal' data-bs-target='#editModal' data-id='" . $row["id"] . "' data-nombre='" . $row["nombre"] . "' data-imagen='" . $row["imagen"] . "' data-precio='" . $row["precio"] . "'><i class='fas fa-edit'></i></button> ";
                            echo "<a href='eliminar_producto.php?id=" . $row["id"] . "' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay productos disponibles</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel"><i class="fas fa-edit"></i> Editar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm" enctype="multipart/form-data">
                            <input type="hidden" id="productId" name="id">
                            <div class="mb-3">
                                <label for="nombre" class="form-label"><i class="fas fa-tag"></i> Nombre (22 car. Max):</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="22" required>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label"><i class="fas fa-image"></i> Imagen (rec. Ancho:1100px - Alto:1215px):</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                                <a href="https://www.iloveimg.com/es/redimensionar-imagen" target="_blank">Cambiar Dimensión de la Imagen si no cumple los pixeles</a>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label"><i class="fas fa-dollar-sign"></i> Precio:</label>
                                <input type="text" class="form-control" id="precio" name="precio" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label"><i class="fas fa-align-left"></i> Descripción (30 car. Max):</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="30" required></textarea>
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
                    document.getElementById('precio').value = precio;
                    document.getElementById('descripcion').value = descripcion;
                    
                    // No se establece el campo de imagen, ya que el usuario deberá seleccionar un archivo
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

            document.addEventListener("DOMContentLoaded", function() {
                // Manejar el evento de clic en los botones de eliminar
                document.querySelectorAll('.btn-danger').forEach(button => {
                    button.addEventListener('click', function(event) {
                        event.preventDefault(); // Evitar el comportamiento por defecto del enlace
                        
                        const productId = this.getAttribute('href').split('id=')[1]; // Extraer el ID del producto de la URL
                        
                        if (confirm('¿Estás seguro de que quieres eliminar este producto?')) {
                            // Realizar una solicitud fetch para eliminar el producto
                            fetch('eliminar_producto.php?id=' + productId)
                                .then(response => response.text())
                                .then(data => {
                                    alert("Producto eliminado con éxito.");
                                    location.reload(); // Recargar la página para ver los cambios
                                })
                                .catch(error => console.error('Error:', error));
                        }
                    });
                });
            });
        </script>
    </body>
</html>
