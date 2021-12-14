<?php session_start();
$userEmail = isset($_SESSION['email']) ? $_SESSION['email'] : "";
if ($userEmail !== "") {
    header('Location: ../menu_juegos/juego_menu.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login__style.css">
    <link rel="stylesheet" href="../style/nav__style.css" />
    <title>Registro</title>
</head>

<body>
    <div class="container-navbar">
        <div class="logo-navbar">
            <a href="../index.html"><img src="../media/img/marca-agua-negro.png" alt="" /></a>
        </div>
        <div class="contenido-navbar">
            <div><a href="../index.html">Inicio</a></div>
            <div><a href="../index.html#1">Sobre Politècnics</a></div>
            <div><a href="../index.html#2">Ciclos</a></div>
            <div><a href="#">JUGAR</a></div>
        </div>
    </div>
    <div class="container">
        <div class="form__container">
            <form class="form__style" action="./controlador.php" method="post">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <button type="submit" name="LoginUser">Login</button>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
            </form>
        </div>
    </div>
</body>

</html>