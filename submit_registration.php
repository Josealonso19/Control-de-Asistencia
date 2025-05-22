<?php
// Configuración de la base de datos
$server = "127.0.0.1";
$user = "administrador";
$pass = "admin123";
$db = "proyecto";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();

    // Validar campos
    $required = ['nombre', 'ap_paterno', 'ap_materno', 'correo', 'password'];
    foreach ($required as $campo) {
        if (empty($_POST[$campo])) {
            die("Error: El campo $campo es requerido");
        }
    }

    // Validar formato de correo
    if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
        die("Error: Formato de correo inválido");
    }

    // Generar hash de contraseña
    $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insertar en 'usuarios'
    $sql_usuarios = "INSERT INTO usuarios (correo, contraseña, rol) VALUES (?, ?, 'profesor')";
    $stmt = $conn->prepare($sql_usuarios);
    $stmt->execute([$_POST['correo'], $hashed_password]);
    $usuario_id = $conn->lastInsertId();

    // Generar número de empleado
    $stmt = $conn->query("SELECT MAX(num_empleado) AS ultimo_num FROM profesores");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    $num_empleado = ($resultado['ultimo_num'] ?? 1000) + 1;

    // Insertar en 'profesores'
    $sql_profesores = "INSERT INTO profesores (num_empleado, nombre, ap_paterno, ap_materno, usuario_id) 
                      VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_profesores);
    $stmt->execute([
        $num_empleado,
        $_POST['nombre'],
        $_POST['ap_paterno'],
        $_POST['ap_materno'],
        $usuario_id
    ]);

    // Insertar en 'registro_usuarios'
    $sql_registro = "INSERT INTO registro_usuarios (nombre, correo, contraseña, usuario_id) 
                    VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_registro);
    $stmt->execute([
        $_POST['nombre'],
        $_POST['correo'],
        $hashed_password, // Mismo hash generado
        $usuario_id
    ]);

    $conn->commit();
    header("Location: login.php");
    exit();

} catch(PDOException $e) {
    $conn->rollBack();

    // Error por correo duplicado
    if ($e->getCode() == 23000 && str_contains($e->getMessage(), 'usuarios.correo')) {
        header("Location: registrar.php?error=correo_duplicado");
        exit();
    }

    // Otro tipo de error
    die("Error: " . $e->getMessage());
}
?>
