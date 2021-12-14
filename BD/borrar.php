<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Admin</title>
</head>

<body>
    <form action="./controlador.php" method="post">
        <label for="id">ID</label>
        <input type="text" id="id" name="id">
        <button type="submit" name="delete">Crear</button>
        <a href="./Admins.php"><button>Cancelar</button></a>
    </form>
</body>

</html>