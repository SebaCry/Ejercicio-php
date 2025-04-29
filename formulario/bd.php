<?php


$conexion = new mysqli("localhost", "root", "", "db_formulario", "33065");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}