<?php 
session_start();

include("connection.php");
include("functions.php");

$error_message = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // Recibir datos del formulario
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verificar que todos los campos estén llenos y que el nombre de usuario no sea numérico
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        // Verificar que las contraseñas coincidan
        if($password === $confirm_password)
        {
            // Hashear la contraseña usando MD5
            $hashed_password = md5($password);

            // Guardar en la base de datos
            $user_id = random_num(20);
            $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$hashed_password')";

            if(mysqli_query($con, $query))
            {
                header("Location: login.php");
                die;
            }
            else
            {
                $error_message = "Error: " . mysqli_error($con);
            }
        }
        else
        {
            $error_message = "Passwords do not match!";
        }
    }
    else
    {
        $error_message = "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SIGN-UP</title>
</head>
<body>
<div class="contenedor-sign-up">
    <div class="formulario-sign-up">
        <form method="post">
            <h2>SIGN UP</h2>
            <?php
            if(!empty($error_message))
            {
                echo '<div class="error-message">'.$error_message.'</div><br>';
            }
            ?>
            <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input id="text" type="password" name="confirm_password" placeholder="Confirm Password"><br><br>
            <input id="button" type="submit" value="Signup"><br><br>
            <a href="login.php">Ya tienes cuenta?</a><br><br>
        </form>
    </div>
</div>
</body>
</html>
