<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Admin</title>
</head>

<body>
    <?php
    $adminid = $_POST['modificarAdminID'];
    $adminNombre = $_POST['modificarAdminNombre'];
    ?>
    <form action="./controlador.php" method="post">
        <label for="idAdmin">ID: <?php echo $adminid ?></label>
        <input type="hidden" name="idAdmin" id="idAdmin" value="<?php echo $adminid ?>">
        <label for="nombreAdmin">Nombre: <?php echo $adminNombre ?></label>
        <label for="ContraNueva">Contraseña Nueva:</label>
        <input type="password" name="ContraNueva" id="ContraNueva" required>
        <label for="confirmarContra">Confirmar Contraseña:</label>
        <input type="password" name="confirmarContra" id="confirmarContra" required>
        <button type="submit" name="modify" onclick="comprovarContraseña()">Confirmar</button>
        <a href="./prueba.php"><button>Cancelar</button></a>
    </form>
</body>
<script src="./script.js"></script>
</html>