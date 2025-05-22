<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TilinsAsistance</title>
        <link rel="preload" href="css/normalize.css" as="style">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="preload" href="css/styles.css" as="style">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="preload" href="css/responsive.css" as="style">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
            <div class="login-container">

                

                <header>
                    <h2>TilinsAsistance</h2>
                    <h3>Iniciar Sesión</h3>
                </header>

                <form action="validar_login.php" method="POST" class="login-form">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    
                    <button type="submit" class="login-btn">Iniciar Sesión</button> 
                    <p>No tienes cuenta? <a href="./registrar.php">Registrarse</a></p>


                </form>
                <?php if (isset($_GET['error'])): ?>
                    <div class="error-message">
                            <p>Correo o contraseña incorrectos.</p>
                    </div>
                <?php endif; ?>
            </div>
            <footer>
                <p><a href="/privacy-policy">Privacy Policy</a></p>
                <p><a href="/terms-of-service">Terms of Service</a></p>
                <p>&copy; 2025 TilinsAsistance. Todos los derechos reservados.</p>
            </footer>
    </body>
</html>
<?php
