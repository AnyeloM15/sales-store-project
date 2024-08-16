<?php
session_start();

include("connection.php");

// Verifica si el usuario está logeado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    die;
}

// Obtiene el ID del usuario de la sesión
$user_id = $_SESSION['user_id'];

// Consulta a la base de datos para obtener los datos del usuario
$query = "SELECT * FROM users WHERE user_id = ? LIMIT 1";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    echo "Error: Usuario no encontrado.";
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <div>
        <div class="contenedor-informacion2">
        <h1>Cuenta</h1>
        <p>Bienvenido, <?php echo htmlspecialchars($user_data['user_name']); ?></p>
        <p>Tus datos:</p>
        <ul>
            <li>ID: <?php echo htmlspecialchars($user_data['user_id']); ?></li>
            <li>Nombre: <?php echo htmlspecialchars($user_data['user_name']); ?></li>
            <li>Fecha de creación: <?php echo htmlspecialchars($user_data['date']); ?></li>
        </ul>
       
        <a href="actualizar_nombre.php"> Actualizar nombre</a>
        <br>
        <a href="actualizar_contraseña.php"> Actualizar contraseña  </a>
        <br>
        <a href="indexx.php">Volver al inicio</a>
        <br>
        <a style="margin-bottom: 10px;"  href="login.php">Cerrar sesión</a>
        </div>
        
        <?php
        if (isset($success_message)) {
            echo "<p style='color:green;'>{$success_message}</p>";
        }
        if (isset($error_message)) {
            echo "<p style='color:red;'>{$error_message}</p>";
        }
        ?>
      
    </div>
</body>
</html>
