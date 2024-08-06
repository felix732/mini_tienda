<style>
    .error-message {
        background-color: #ff7f7f;
        color: #000;
        font-weight: bold;
        padding: 10px;
        border: 1px solid #ff0000;
        text-align: center;
        margin-top: 10px;
    }
</style>

<?php
include './conexion.php';

session_start();

if (!empty($_POST["usuario"]) && !empty($_POST["clave"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $query = "SELECT * FROM inicio_sesion WHERE usuario = '$usuario' AND clave = '$clave'";
    $resultado = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
        $_SESSION["id"] = $fila['id'];
        $_SESSION["usuario"] = $fila['usuario'];

        switch ($fila['id_rol']) {
            case 1:
                header("Location: ./index.html");
                exit();
            case 2:
                header("Location: ./vista_facilitador/a01_vista_faci.php");
                exit();
            case 3:
                header("Location: a01_vista.php");
                exit();
            default:
                // Manejar otros roles si es necesario
        }
    } else {
        echo "<div class='error-message'>Credenciales incorrectas. Por favor, inténtelo de nuevo.</div>";
        echo "<script>
            setTimeout(function() {
                window.location.href = 'inicio_sesion.php';
            }, 2000);
        </script>";
    }
} else {
    echo "Campos Vacios";
}
?>
