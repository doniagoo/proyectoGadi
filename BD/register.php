<?php session_start();
$emailRegister = isset($_SESSION['emailRegister']) ? $_SESSION['emailRegister'] : '';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="./controlador.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellido:</label>
        <input type="text" name="apellidos" id="apellidos">
        <label for="email">Email:</label>
        <?php if ($emailRegister != '') { ?>
            <input type="text" name="email" id="email" value="<?php echo $emailRegister ?>">
        <?php } else { ?>
            <input type="text" name="email" id="email">
        <?php } ?>
        <label for="nickname">Nickname:</label>
        <input type="text" name="nickname" id="nickname">
        <label for="ciclo">Ciclo:</label>
        <input type="text" name="ciclo" id="ciclo">
        <button type="submit" name="insertUser">Aceptar</button>
    </form>
    <a href=""><button>cancelar</button></a>
</body>

</html>