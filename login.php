<?php
$conexion = new mysqli("companysinc.com.mx", "companys_automation", "302984pR.1", "companys_automation");
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["username"];
    $contrasena = $_POST["password"];

    // Realizar la consulta a la base de datos para la autenticación
    $query = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        // Usuario autenticado, puedes realizar acciones adicionales si es necesario
        echo "¡Inicio de sesión exitoso!";
    } else {
        echo "¡Nombre de usuario o contraseña incorrectos!";
    }
}

$conexion->close();
?>
