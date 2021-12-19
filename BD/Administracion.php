<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style/admin__style.css" />
    <link rel="stylesheet" href="../style/nav__style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Users_Admins</title>
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
            <div><a href="../BD/loginUser.php">JUGAR</a></div>
            <div>
                <form action="./controlador.php" method="post">
                    <div class="nombreUser-btn"><a href="../BD/Administracion.php"><i class="fa fa-user"></i></a><?php echo $_SESSION['email']; ?></div>
                    <button class="cerrar-sesion" type="submit" name="cerrarSesion"><i class="fa fa-sign-out"></i>Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-general">
        <div class="container-user">
            <div class="imagen"><a href="./users.php"><img src="../media/img/img-pantalla-game-6.png" /></a><?php if ($_SESSION['es_superadmin'] == 1) { ?></div>
            <div class="titulo"><h2>Users</h2></div>
        </div>
        <div class="container-admin">
            <div class="imagen"><a href="./Admins.php"><img src="../media/img/img-pantalla-game-7.png" /></a></div>
            <div class="titulo"><h2>Admins</h2><?php } ?></div>
        </div>
</body>

</html>