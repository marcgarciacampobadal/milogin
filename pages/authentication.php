<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Si el usuario está autenticado, muestra el contenido
echo "Bienvenido al panel de usuario.";
?>
