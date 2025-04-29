<?php
$conexion = new mysqli("localhost", "root", "", "mi_base_de_datos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM personas";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Registros</title>
</head>
<body>
    <h2>Lista de Personas Registradas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?= $fila["id"] ?></td>
                <td><?= $fila["nombre"] ?></td>
                <td><?= $fila["email"] ?></td>
                <td><?= $fila["telefono"] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="index.php">Volver</a>
</body>
</html>

<?php
$conexion->close();
?>
