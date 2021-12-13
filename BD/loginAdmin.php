<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>

<body>
    <form action="./controlador.php" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <label for="contrasena">Contraseña:</label>
        <input type="text" name="contrasena" id="contrasena">
        <button type="submit" name="LoginAdmin">Login</button>
    </form>
</body>

</html>