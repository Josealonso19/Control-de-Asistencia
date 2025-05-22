<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
$nombre = $_SESSION['nombre']; // <-- Obtenemos el nombre desde la sesión
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/main.css" as="style">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preload" href="css/responsive.css" as="style">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header>
        <h1>Menu</h1>
        <div class="usuario">
            <h3>Usuario: <?php echo htmlspecialchars($nombre); ?></h3>
        </div>
        
    </header>
    
    <div class="menu-container">
        <div class="bnv-container">
            <h1>Sistema General</h1>
            <h3>De la Asistencia de la Escuela</h3>
        </div>
        <div class="menu-btn">
            <button class="btn" onclick="location.href='#'">Calificación</button>
            <button class="btn" onclick="location.href='./ficha.php'">Ver Ficha de Asistencia</button>
            <button class="btn" onclick="location.href='#'">Horario</button>
            <button class="btn" onclick="location.href='#'">Materias</button>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <button class="logout-btn" onclick="location.href='./login.php'">Cerrar Sesión</button>
        </div>
    </footer>
</body>
</html>