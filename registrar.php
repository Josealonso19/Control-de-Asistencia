<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de Profesor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div class="login-container">
        <h2>Registro de Profesor</h2>

        <form action="submit_registration.php" method="POST" class="login-form">
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Ej. Juan Pérez">

            <label for="ap_paterno">Apellido Paterno</label>
            <input type="text" id="ap_paterno" name="ap_paterno" required placeholder="Ej. González">

            <label for="ap_materno">Apellido Materno</label>
            <input type="text" id="ap_materno" name="ap_materno" required placeholder="Ej. Martínez">

            <label for="correo">Correo institucional</label>
            <input type="email" id="correo" name="correo" required placeholder="usuario@uabc.edu.mx">

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required placeholder="Mínimo 8 caracteres">
            <button type="submit" class="login-btn">Registrarse</button>
            <?php if (isset($_GET['error']) && $_GET['error'] === 'correo_duplicado'): ?>
            <div class="error-message">
                <p>Datos repetidos, ese usuario y correo ya existen.</p>
            </div>
            <?php endif; ?>
        </form>
    </div>

    <footer>
        <p><a href="/privacy-policy">Política de privacidad</a></p>
        <p><a href="/terms-of-service">Términos de servicio</a></p>
        <p>&copy; 2023 TilinsAsistance. Todos los derechos reservados.</p>
    </footer>    
</body>
</html>
