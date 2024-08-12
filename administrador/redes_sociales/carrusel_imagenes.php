<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - Carrusel de Imágenes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #2e2e2e;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo img {
            width: 150px;
            height: auto;
        }
        .links {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .link {
            margin-left: 20px;
            text-decoration: none;
            color: #6a0dad;
            background: linear-gradient(to right, #c21212, #0d18ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .link:hover {
            transform: scale(1.1);
        }
        .menu-icon {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        .mobile-menu {
            display: none;
        }
        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            border: 1px solid #ddd;
            padding: 10px;
        }
        @media (max-width: 768px) {
            .links {
                display: none;
            }
            .menu-icon {
                display: block;
            }
            .mobile-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .mobile-menu .link {
                margin: 10px 0;
            }
        }
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
            width: 100px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
        
    </style>
</head>
<body>
<nav>
        <div class="logo">
            <img src="../img_admin/logo_1.png" alt="logo">
        </div>
        <div class="links">
            <a href="../index.php" class="link">Atrás</a>
            <a href="../destroy_session.php" class="link">Cerrar Sesión</a>
        </div>
    </nav>
    <div class="menu-icon">
          <i class='bx bx-menu'></i>
          <i class='bx bx-x'></i>
        </div>
      </nav>
      <div class="mobile-menu">
        <a href="../index.php" class="link">Atras</a>
        <a href="../destroy_session.phpp" class="link">Cerrar Sesion</a>
      </div>
    <div class="leaderboard">
        <div class="leaderboard-header">
            CONFIGURACIÓN DE CARRUSEL DE IMÁGENES
        </div>
        <div class="add-button" data-bs-toggle="modal" data-bs-target="#editModal" onclick="openModal('add')">
            <i class="fas fa-plus"></i> Agregar Imágenes
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th class="actions">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("../conexion.php");

                        $sql = "SELECT id, img FROM carrusel";
                        $result = $conexion->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr data-id='" . $row["id"] . "' data-img='" . $row["img"] . "'>";
                                echo "<td><img src='../../img/" . $row["img"] . "' class='card-image'></td>";
                                echo "<td class='actions'>";
                                echo "<i class='fas fa-edit' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openModal(\"edit\", " . $row["id"] . ", \"" . $row["img"] . "\")'></i>";
                                echo "<i class='fas fa-trash-alt' onclick='deleteImage(" . $row["id"] . ")'></i>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>No hay imágenes en el carrusel.</td></tr>";
                        }

                        $conexion->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para Editar y Agregar Imágenes -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Agregar/Editar Imágenes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" enctype="multipart/form-data">
                        <input type="hidden" id="editId" name="id">
                        <div class="mb-3">
                            <label for="editImg" class="form-label">Selecciona Imágenes (máx. 10, rec. Ancho:1920px - Alto:1280px)</label>
                            <input type="file" class="form-control" id="editImg" name="imgs[]" multiple required>
                            <a href="https://www.iloveimg.com/es/redimensionar-imagen" target="_blank">Cambiar Dimensión de la Imagen si no cumple los pixeles</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openModal(mode, id = null, img = null) {
            if (mode === 'edit') {
                $('#editModalLabel').text('Editar Imagen');
                $('#editId').val(id);
                $('#editImg').attr('required', false);
            } else {
                $('#editModalLabel').text('Agregar Imágenes');
                $('#editId').val('');
                $('#editImg').attr('required', true);
            }
        }

        $(document).ready(function() {
            $('#editForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var mode = $('#editId').val() ? 'edit' : 'add';
                var url = mode === 'edit' ? 'editar_carrusel.php' : 'agregar_imagenes.php';

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.reload();
                    },
                    error: function() {
                        alert('Error al procesar la solicitud.');
                    }
                });
            });
        });

        function deleteImage(id) {
    if (confirm('¿Estás seguro de que deseas reemplazar esta imagen con una imagen por defecto?')) {
        $.ajax({
            url: 'eliminar_carrusel.php',
            type: 'POST',
            data: { id: id },
            success: function(response) {
                location.reload();
            },
            error: function() {
                alert('Error al reemplazar la imagen del carrusel.');
            }
        });
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const mobileMenu = document.querySelector('.mobile-menu');
  
    menuIcon.addEventListener('click', function() {
      mobileMenu.classList.toggle('show');
      menuIcon.classList.toggle('show');
    });
  });
    </script>
</body>
</html>