<?php
$servidor = "localhost:3306";
$usuario = "root";
$contrasena = "root";
$base_datos = "tipsy";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
