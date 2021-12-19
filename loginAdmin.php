<?php session_start();
$adminPassword = isset($_SESSION['contrasena']) ? $_SESSION['contrasena'] : "";

if ($adminPassword !== "") {
    header('Location: ./BD/Administracion.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style/login__style.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>

<body class="body-admin">
    <div class="container">
        <div class="form__container">
        <div class="volver"><a href="./index.php"><i class="fa fa-chevron-left" style="font-size:24px"></i></a></div>
            <form class="form__style" action="./BD/controlador.php" method="post">
                <label for="email">Email</label><br><br>
                <input type="text" name="email" id="email" required><br><br>
                <label for="contrasena">Contraseña</label><br><br>
                <input type="password" name="contrasena" id="contrasena" required><br>
                <label class="b-contain">
                    <span>Mostrar Contraseña</span>
                    <input type="checkbox" onclick="hidePassword()">
                    <div class="b-input"></div>
                </label>
                <button class="login-boton" type="submit" name="LoginAdmin">Login</button><br><br><br>
            </form>
        </div>
    </div>
    <script src="./js/hidePassword.js"></script>
</body>

</html>