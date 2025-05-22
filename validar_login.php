<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'server.php';

// Obtener datos del formulario
$correo = $_POST['username'];
$password = $_POST['password'];

try {
    // Consulta preparada para obtener el usuario
    $stmt = $conn->prepare("SELECT * FROM registro_usuarios WHERE correo = :correo");
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Verificar contraseña hasheada
        if (password_verify($password, $usuario['contraseña'])) {
            // Iniciar sesión
            $_SESSION['usuario_id'] = $usuario['usuario_id'];
            $_SESSION['correo'] = $usuario['correo'];
             $_SESSION['nombre'] = $usuario['nombre'];
            header("Location: main.php");
            exit();
        } else {
            header("Location: login.php?error=credenciales");
            exit();
        }
    } else {
        header("Location: login.php?error=credenciales");
        exit();
    }
} catch (PDOException $e) {
    die("Error de base de datos: " . $e->getMessage());
}
?>