<?php
$server = "127.0.0.1";
$user = "root"; // Usar el usuario correcto (ej: 'root' o 'administrador')
$pass = "Josealonso_21"; // Contraseña correcta
$db = "proyecto";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>