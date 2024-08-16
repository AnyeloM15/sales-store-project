<?php
session_start();

include("connection.php");

// Verifica si el usuario está logeado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    die;
}
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

// Manejo de la actualización de la contraseña
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        // Verifica la contraseña actual
        if (md5($current_password) === $user_data['password']) {
            // Verifica que las nuevas contraseñas coincidan
            if ($new_password === $confirm_password) {
                $hashed_password = md5($new_password);
                $update_query = "UPDATE users SET password = ? WHERE user_id = ?";
                $update_stmt = $con->prepare($update_query);
                $update_stmt->bind_param("si", $hashed_password, $user_id);
                if ($update_stmt->execute()) {
                    $success_message = "Contraseña actualizada correctamente.";
                } else {
                    $error_message = "Error al actualizar la contraseña.";
                }
            } else {
                $error_message = "Las nuevas contraseñas no coinciden.";
            }
        } else {
            $error_message = "La contraseña actual es incorrecta.";
        }
    } else {
        $error_message = "Por favor, completa todos los campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de contraseña</title>
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
            <label for="current_password"></label>
            <input type="password" id="current_password" name="current_password" placeholder="Contraseña Actual">
            <label for="new_password"></label>
            <input type="password" id="new_password" name="new_password" placeholder="Nueva Contraseña">
            <label for="confirm_password"></label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar Nueva Contraseña">
            <button type="submit">Actualizar Contraseña</button>
            <br>
            <a href="indexx.php">Volver al inicio</a>
            <br>
            <a href="actualizar_nombre.php">Atrás</a>
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
