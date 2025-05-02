<?php
$servername = "localhost";
$username = "root";  // Cambia estos valores si usas otro usuario o contraseña
$password = "";
$dbname = "login_system";  // El nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
