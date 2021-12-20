<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style/nav__style.css" />
    <link rel="stylesheet" href="../style/adminEditor__style.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/login__style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Admin</title>
</head>

<body class="body-crear">
    <div class="container-navbar">
        <div class="logo-navbar">
            <a href="../index.php"><img src="../media/img/marca-agua-negro.png" alt="" /></a>
        </div>
        <div class="contenido-navbar">
            <div><a href="../index.php">Inicio</a></div>
            <div><a href="../index.php#1">Sobre Politècnics</a></div>
            <div><a href="../index.php#2">Ciclos</a></div>
            <div><a href="../BD/loginUser.php">JUGAR</a></div>
            <div>
                <form action="./controlador.php" method="post">
                    <div class="nombreUser-btn"><a href="../BD/Administracion.php"><i class="fa fa-user"></i></a><?php echo $_SESSION['email']; ?></div>
                    <button class="cerrar-sesion" type="submit" name="cerrarSesion"><i class="fa fa-sign-out"></i>Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-admin-crear">
        <div class="form__container">
            <div class="volver"><a href="../BD/Admins.php"><i class="fa fa-chevron-left" style="font-size:24px"></i></a></div>
            <form class="form__style" action="./controlador.php" method="POST">
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="contrasena">Contraseña</label><br>
                <input type="text" id="contrasena" name="contrasena"><br>
                <label for="apellidos">Apellidos</label><br>
                <input type="text" id="apellidos" name="apellidos"><br>
                <label for="nombre">Nombre</label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <br>
                <div class="mensaje-error"><?php require_once('./mensaje.php'); ?></div>
                <button class="registro-boton" type="submit" name="insert">Crear</button>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
                <button class="cancel-boton" type="submit"><a href="./Admins.php">Cancelar</a></button>
            </form>
        </div>
    </div>
</body>

</html>