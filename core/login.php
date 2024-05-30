<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conexion->real_escape_string($_POST['username']);
    $password = $conexion->real_escape_string($_POST['password']);
    $sql = "SELECT id, password FROM usuarios WHERE username = '$username'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        if ($password== $fila['password']) {
            $_SESSION['usuario'] = $username;
            header("Location: ../home.php"); // Cambia la redirección a home.php
            exit(); // Asegúrate de usar exit() después de header() para detener el script
        } else {
            $error = "Contraseña incorrecta."; // Usa una variable para almacenar el error
        }
    } else {
        $error = "No existe un usuario con ese nombre."; // Usa una variable para almacenar el error
    }
    echo $error;
}
?>