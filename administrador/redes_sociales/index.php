<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - Redes Sociales</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
            <a href="../admin.html" class="link">Atras</a>
            <a href="./inicio_sesion.php" class="link">Cerrar Sesión</a>
        </div>
        <div class="menu-icon">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times" style="display:none;"></i>
        </div>
    </nav>
    <div class="mobile-menu">
        <a href="../admin.html" class="link">Atras</a>
        <a href="./inicio_sesion.php" class="link">Cerrar Sesión</a>
    </div>
    
    <div class="leaderboard">
        <div class="leaderboard-header">
            CONFIGURACIÓN DE REDES SOCIALES
        </div>
        <div class="add-button">
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
                                echo "<tr>";
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
                                echo "<td>" . ($row["nombre"] == "WhatsApp" ? $row["telefono"] : "N/A") . "</td>";
                                echo "<td class='actions'>";
                                echo "<i class='fas fa-edit'></i>";
                                echo "<i class='fas fa-trash-alt'></i>";
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

    <script>
        const menuIcon = document.querySelector('.menu-icon .fa-bars');
        const closeIcon = document.querySelector('.menu-icon .fa-times');
        const mobileMenu = document.querySelector('.mobile-menu');

        menuIcon.addEventListener('click', () => {
            mobileMenu.style.display = 'flex';
            menuIcon.style.display = 'none';
            closeIcon.style.display = 'block';
        });

        closeIcon.addEventListener('click', () => {
            mobileMenu.style.display = 'none';
            menuIcon.style.display = 'block';
            closeIcon.style.display = 'none';
        });
    </script>
</body>
</html>
