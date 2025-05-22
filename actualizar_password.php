<?php
require_once 'server.php';

// Ejemplo: Actualizar contraseña de "miguel@uabc.com"
$correo = 'miguel@uabc.com';
$nueva_contraseña = 'm123'; // Contraseña en texto plano
$hash = password_hash($nueva_contraseña, PASSWORD_DEFAULT);

try {
    $sql = "UPDATE registro_usuarios SET contraseña = :hash WHERE correo = :correo";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':hash', $hash);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();
    echo "Contraseña actualizada para $correo";
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>