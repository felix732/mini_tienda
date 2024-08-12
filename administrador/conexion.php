<?php
$host = 'localhost';
$db = 'barberia';
$user = 'root';
$password = '';

$conexion = mysqli_connect($host, $user, $password, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, 'utf8mb4');
?>