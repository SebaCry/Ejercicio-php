<?php
$host = "localhost"
$user = "root";
$password = "root";
$dbname = "db_formulario";
$port = 3307;

$conexion = new mysqli($host, $user, $password, $dbname, $port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>