<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $usuario = $_POST["username"];
    $correo = $_POST["email"];
    $contrasena = $_POST["password"];

    // Validar y sanitizar los datos según sea necesario

    // Realizar la conexión a la base de datos
    //$conexion = new mysqli("localhost", "usuario", "contrasena", "nombre_basedatos");
    $conexion = new mysqli("companysinc.com.mx", "companys_automation", "302984pR.1", "companys_automation");
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Insertar el nuevo usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$usuario', '$correo', '$contrasena')";
    $resultado = $conexion->query($query);

    if ($resultado) {
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error al crear el usuario: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
