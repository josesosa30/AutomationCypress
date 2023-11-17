<?php
$conexion = new mysqli("companysinc.com.mx", "companys_automation", "302984pR.1", "companys_automation");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener todos los usuarios de la base de datos
$query = "SELECT * FROM usuarios";
$resultado = $conexion->query($query);

// Construir filas de la tabla
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['correo'] . "</td>";
    echo "</tr>";
}

$conexion->close();
?>
