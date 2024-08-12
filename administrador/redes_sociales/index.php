<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - Redes Sociales</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
        width: 174%;
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
}
.logo img {
    width: 100px;
    height: auto;
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
    width: 100%;
    border-bottom: 2px solid #f0f0f0;
}
.add-button {
    background-color: #ffe680;
    color: black;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
}
.add-button i {
    margin-right: 5px;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: left;
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
            width: 50px;
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
            <a href="../index.php" class="link">Atras</a>
            <a href="../destroy_session.php" class="link">Cerrar Sesión</a>
        </div>
    </nav>
    <div class="mobile-menu">
        <a href="../index.php" class="link">Atras</a>
        <a href="../destroy_session.php" class="link">Cerrar Sesión</a>
    </div>
    
    <div class="leaderboard">
        <div class="leaderboard-header">
            CONFIGURACIÓN DE REDES SOCIALES
        </div>
        <div class="add-button" data-bs-toggle="modall" data-bs-target="#editModal">
            <i class="fas fa-plus"></i> Agregar Red Social
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Icono</th>
                        <th>Link</th>
                        <th>Número de Teléfono</th>
                        <th class="actions">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("../conexion.php");

                        $sql = "SELECT id, nombre, link, telefono FROM redes_sociales";
                        $result = $conexion->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr data-id='" . $row["id"] . "' data-nombre='" . $row["nombre"] . "' data-link='" . $row["link"] . "' data-telefono='" . $row["telefono"] . "'>";
                                echo "<td>" . $row["nombre"] . "</td>";
                                echo "<td><i class='fab fa-" . strtolower($row["nombre"]) . "' style='color: ";
                                switch(strtolower($row["nombre"])) {
                                    case "facebook":
                                        echo "#3b5998";
                                        break;
                                    case "instagram":
                                        echo "#E1306C";
                                        break;
                                    case "whatsapp":
                                        echo "#25D366";
                                        break;
                                    case "tiktok":
                                        echo "#000000";
                                        break;
                                    default:
                                        echo "#000000";
                                }
                                echo ";'></i></td>";
                                echo "<td><a href='" . $row["link"] . "' target='_blank'>" . $row["link"] . "</a></td>";
                                echo "<td>" . ($row["nombre"] == "whatsapp" ? $row["telefono"] : $row["telefono"]) . "</td>";
                                echo "<td class='actions'>";
                                echo "<i class='fas fa-edit' data-bs-toggle='modal' data-bs-target='#editModal'></i>";
                                echo "<i class='fas fa-trash-alt' onclick='deleteSocial(" . $row["id"] . ")'></i>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
                        }

                        $conexion->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para Editar Red Social -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Red Social</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="editId">
                        <div class="mb-3">
                            <label for="editNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="editNombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="editLink" class="form-label">Link</label>
                            <input type="url" class="form-control" id="editLink" required>
                        </div>
                        <div class="mb-3">
                            <label for="editTelefono" class="form-label">Número de Teléfono</label>
                            <input type="text" class="form-control" id="editTelefono">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var row = button.closest('tr');
                var id = row.data('id');
                var nombre = row.data('nombre');
                var link = row.data('link');
                var telefono = row.data('telefono');
                
                var modal = $(this);
                modal.find('#editId').val(id);
                modal.find('#editNombre').val(nombre);
                modal.find('#editLink').val(link);
                modal.find('#editTelefono').val(telefono);
            });

            $('#editForm').submit(function(e) {
                e.preventDefault();
                var id = $('#editId').val();
                var nombre = $('#editNombre').val();
                var link = $('#editLink').val();
                var telefono = $('#editTelefono').val();

                $.ajax({
                    url: 'editar_red_social.php',
                    type: 'POST',
                    data: {
                        id: id,
                        nombre: nombre,
                        link: link,
                        telefono: telefono
                    },
                    success: function(response) {
                        location.reload();
                    },
                    error: function() {
                        alert('Error al actualizar la red social.');
                    }
                });
            });
        });

        function deleteSocial(id) {
            if (confirm('¿Estás seguro de que deseas eliminar esta red social?')) {
                $.ajax({
                    url: 'eliminar_red_social.php',
                    type: 'POST',
                    data: { id: id },
                    success: function(response) {
                        location.reload();
                    },
                    error: function() {
                        alert('Error al eliminar la red social.');
                    }
                });
            }
        }
    </script>
</body>
</html>
