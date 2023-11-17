<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <img src="Logo_Blanco.png" alt="AKYO" class="logo">
        <h1>Crear Nuevo Usuario</h1>
    </header>

    <div id="createUserForm">
        <form action="process_create_user.php" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Crear Usuario</button>
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>
