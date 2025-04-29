<?php
include ('bd.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    $sql = "INSERT INTO personas (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $conexion->error;
    }
}

$conexion->close();
?>
