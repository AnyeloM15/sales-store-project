<?php
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Recibir datos del formulario
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    // Verificar que todos los campos estén llenos y que el nombre de usuario no sea numérico
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Leer de la base de datos
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                
                // Hashear la contraseña ingresada por el usuario
                $hashed_password = md5($password);
                
                // Verificar la contraseña
                if ($user_data['password'] === $hashed_password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['user_name'] = $user_data['user_name']; // Guardar el nombre de usuario en la sesión
                    header("Location: indexx.php");
                    die;
                }
            }
        }
        
        $error_message = "wrong username or password!";
    } else {
        $error_message = "wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG-IN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor-login">
        <div class="formulario-login">
            <form method="post">
                <h2>LOGIN</h2>
                <?php
                if (!empty($error_message)) {
                    echo '<div class="error-message">' . $error_message . '</div><br>';
                }
                ?>
                <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
                <input id="text" type="password" name="password" placeholder="Password"><br><br>
                <input id="button" type="submit" value="Login"><br><br>
                <a href="signup.php">No tienes cuenta?</a><br><br>
            </form>
        </div>
    </div>
</body>
</html>
