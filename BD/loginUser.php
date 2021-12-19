<?php 
session_start();
// include ("../lang/lang.php");
include('../lang/esp.php');
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $langEsp;
// $lang = $_SESSION['lang'];
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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Registro</title>
</head>

<body>
    <div class="container-navbar">
        <div class="logo-navbar">
            <a href="../index.php"><img src="../media/img/marca-agua-negro.png" alt="" /></a>
        </div>
        <div class="contenido-navbar">
            <div><a href="../index.php">Inicio</a></div>
            <div><a href="../index.php#1">Sobre Politècnics</a></div>
            <div><a href="../index.php#2">Ciclos</a></div>
            <div class="ultimo-elemento"><a href="#">JUGAR</a></div>
        </div>
    </div>
    <div class="container">
        <div class="form__container">
            <div class="volver"><a href="../index.php"><i class="fa fa-chevron-left" style="font-size:24px"></i></a></div>
            <div class="caja-mensjae-login">
                <h2><?php echo $lang["textoRegistro"] ?></h2>
            </div>
            <form class="form__style" action="./controlador.php" method="post">
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" required minlength="11" maxlength="60"><br>
                <button class="login-boton" type="submit" name="LoginUser">Login</button><br><br><br>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
            </form>
        </div>
    </div>
</body>

</html>