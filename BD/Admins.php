<?php
session_start();
require_once("./bd.php");
$admins = mostrarAdmins();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style/adminEditor__style.css">
    <link rel="stylesheet" href="../style/nav__style.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>
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

    <?php include_once("./bd.php") ?>


    <div class="container-table">
        <div class="volver"><a href="./Administracion.php"><i class="fa fa-chevron-left" style="font-size:24px"></i></a></div>
        <div class="crear-admin"><a href="./crear.php"><button><i class="fa fa-user-plus" style="font-size:24px"></i></button></a></div>
        <table class="tablaBD">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Es_Admin</th>
                    <th>Es_SuperAdmin</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>DEL</th>
                    <th>EDIT</th>
                </tr>
                <?php foreach ($admins as $admin) { ?>
                    <tr>
            <tbody>
                <td><?php echo $admin['id']; ?></td>
                <td><?php echo $admin['email']; ?></td>
                <td><?php echo $admin['contrasena']; ?></td>
                <td><?php echo $admin['es_admin']; ?></td>
                <td><?php echo $admin['es_superadmin']; ?></td>
                <td><?php echo $admin['apellidos']; ?></td>
                <td><?php echo $admin['nombre']; ?></td>
                <td>
                    <form action="./controlador.php" method="post">
                        <input type="hidden" id="Idadmin" name="Idadmin" value="<?php echo $admin['id'] ?>">
                        <button id="deleteAdmin" type="submit" name="deleteAdmin"><i class="fa fa-trash-o" style="font-size:24px"></i></button>
                    </form>
                </td>
                <td>
                    <form action="./Modificar.php" method="post">
                        <input type="hidden" value="<?php echo $admin['id'] ?>" name="modificarAdminID" id="modificarAdminID">
                        <input type="hidden" value="<?php echo $admin['nombre'] ?>" name="modificarAdminNombre" id="modificarAdminNombre">
                        <input type="hidden" value="<?php echo $admin['contrasena'] ?>" name="modificarAdminPassword" id="modificarAdminPassword">
                        <button type="submit" id="modificarAdmin" name="modificarAdmin"><i class="fa fa-pencil-square-o" style="font-size:24px"></i></button>
                    </form>
                </td>
            </tbody>
            </tr>
        <?php } ?>
        </thead>
        </table>
    </div>
</body>


</html>