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

// Manejo de la actualización del nombre de usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_user_name'])) {
    $new_user_name = $_POST['new_user_name'];
    if (!empty($new_user_name) && !is_numeric($new_user_name)) {
        $update_query = "UPDATE users SET user_name = ? WHERE user_id = ?";
        $update_stmt = $con->prepare($update_query);
        $update_stmt->bind_param("si", $new_user_name, $user_id);
        if ($update_stmt->execute()) {
            $_SESSION['user_name'] = $new_user_name;
            $user_data['user_name'] = $new_user_name;
            $success_message = "Nombre actualizado correctamente.";
        } else {
            $error_message = "Error al actualizar el nombre.";
        }
    } else {
        $error_message = "Nombre no válido.";
    }
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
    <div class="contenedor-informacion">
        <h1>Cuenta</h1>
        <p>Bienvenido, <?php echo htmlspecialchars($user_data['user_name']); ?></p>
        <p>Tus datos:</p>
        <ul>
            <li>ID: <?php echo htmlspecialchars($user_data['user_id']); ?></li>
            <li>Nombre: <?php echo htmlspecialchars($user_data['user_name']); ?></li>
            <li>Fecha de creación: <?php echo htmlspecialchars($user_data['date']); ?></li>
        </ul>
     </div>
        <form method="POST">
            <label for="new_user_name"></label>
            <input type="text" id="new_user_name" name="new_user_name" placeholder="Nuevo Nombre">
            <button type="submit">Actualizar Nombre</button>
            <br>
            <a href="indexx.php">Volver al inicio</a>
            <br>
            <a href="actualizar_contraseña.php">Actualizar Contraseña</a>
            <br>
            <a href="cuenta.php">Atrás</a>
    </form>
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