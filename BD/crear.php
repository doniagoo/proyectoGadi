<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Admin</title>
</head>

<body>
    <form action="./controlador.php" method="POST">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <label for="contrasena">Contraseña</label>
        <input type="text" id="contrasena" name="contrasena">
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
        <button type="submit" name="insert">Crear</button>
    </form>
    <a href="./Admins.php"><button>Cancelar</button></a>
</body>

</html>