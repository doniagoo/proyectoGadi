<?php
require_once("./bd.php");
$admins = mostrarAdmins();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php include_once("./bd.php") ?>
    <a href="./crear.php"><button>Crear</button></a>
    <div class="muestra">
        <table>

            <tr>
                <td>ID</td>
                <td>Email</td>
                <td>Contraseña</td>
                <td>Es_Admin</td>
                <td>Es_SuperAdmin</td>
                <td>Nickname</td>
                <td>Apellidos</td>
                <td>Nombre</td>
                <td>Ciclo</td>
            </tr>
            <?php foreach ($admins as $admin) { ?>
                <tr>
                    <td><?php echo $admin['id']; ?></td>
                    <td><?php echo $admin['email']; ?></td>
                    <td><?php echo $admin['contrasena']; ?></td>
                    <td><?php echo $admin['es_Admin']; ?></td>
                    <td><?php echo $admin['es_SuperAdmin']; ?></td>
                    <td><?php echo $admin['nickname']; ?></td>
                    <td><?php echo $admin['apellidos']; ?></td>
                    <td><?php echo $admin['nombre']; ?></td>
                    <td><?php echo $admin['ciclo']; ?></td>
                    <td>
                        <form action="./controlador.php" method="post">
                            <input type="hidden" id="Idadmin" name="Idadmin" value="<?php echo $admin['id'] ?>">
                            <button id="deleteAdmin" type="submit" name="deleteAdmin">x</button>
                        </form>
                    </td>
                    <td>
                        <form action="./Modificar.php" method="post">
                            <input type="hidden" value="<?php echo $admin['id'] ?>" name="modificarAdminID" id="modificarAdminID">
                            <input type="hidden" value="<?php echo $admin['nombre'] ?>" name="modificarAdminNombre" id="modificarAdminNombre">
                            <input type="hidden" value="<?php echo $admin['contrasena'] ?>" name="modificarAdminPassword" id="modificarAdminPassword">
                            <button type="submit" id="modificarAdmin" name="modificarAdmin">M</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>


</html>