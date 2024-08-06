<?php
$host = 'localhost';
$db = 'barberia';
$user = 'root'; // El usuario por defecto en XAMPP es 'root'
$password = ''; // La contraseña por defecto para 'root' es una cadena vacía

$conexion = mysqli_connect($host, $user, $password, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, 'utf8mb4');
?>
