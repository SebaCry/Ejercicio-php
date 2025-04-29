<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP-MySQL</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <input type="text" name="mensaje" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="mostrar.php">Ver Registros</a>
</body>
</html>