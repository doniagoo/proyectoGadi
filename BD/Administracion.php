<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Admins</title>
</head>

<body>
    <a href="./users.php">Users</a>
    <?php if ($_SESSION['es_superadmin'] == 1) { ?>
        <a href="./Admins.php">Admins</a>
    <?php } ?>
    <form action="./controlador.php" method="post">
        <button type="submit" name="cerrarSesion">Cerrar sesion</button>
    </form>
</body>

</html>