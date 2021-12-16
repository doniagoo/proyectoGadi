<?php session_start();
$emailRegister = isset($_SESSION['emailRegister']) ? $_SESSION['emailRegister'] : '';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login__style.css">
    <link rel="stylesheet" href="../style/nav__style.css" />
    <title>Registro</title>
</head>

<body>
    <div class="container-navbar">
        <div class="logo-navbar">
            <a href="../index.html"><img src="../media/img/marca-agua-negro.png" alt="" /></a>
        </div>
        <div class="contenido-navbar">
            <div><a href="../index.html">Inicio</a></div>
            <div><a href="../index.html#1">Sobre Politècnics</a></div>
            <div><a href="../index.html#2">Ciclos</a></div>
            <div><a href="#">JUGAR</a></div>
        </div>
    </div>
    <div class="container">
        <div class="form__container">
            <form class="form__style" action="./controlador.php" method="post">
                <label for="email">Email:</label><br>
                <?php if ($emailRegister != '') { ?>
                    <input type="text" name="email" id="email" value="<?php echo $emailRegister ?>">
                <?php } else { ?>
                    <input type="text" name="email" id="email">
                <?php } ?><br><br>
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre"><br><br>
                <label for="apellidos">Apellido:</label><br>
                <input type="text" name="apellidos" id="apellidos"><br><br>

                <label for="nickname">Nickname:</label><br>
                <input type="text" name="nickname" id="nickname"><br><br>
                <label for="ciclo">Ciclo:</label><br>
                <select name="ciclo" id="">
                    <option></option>
                    <option value="Grau mitjà activitats comercials">Grau mitjà activitats comercials</option>
                    <option value="Grau superior màrqueting i publicitat">Grau superior màrqueting i publicitat</option>
                    <option value="Grau superior gestió de vendes i espais comercials">Grau superior gestió de vendes i espais comercials</option>
                    <option value="Grau superior comerç internacional">Grau superior comerç internacional</option>
                    <option value="Grau superior agències de viatges i gestió d’esdeveniments">Grau superior agències de viatges i gestió d’esdeveniments</option>
                    <option value="Grau mitjà sistemes microinformàtics i xarxes">Grau mitjà sistemes microinformàtics i xarxes</option>
                    <option value="Grau superior desenvolupament aplicacions web">Grau superior desenvolupament aplicacions web</option>
                    <option value="Grau superior desenvolupament aplicacions web">Grau superior desenvolupament aplicacions web</option>
                    <option value="Grau mitjà gestió administrativa">Grau mitjà gestió administrativa</option>
                    <option value="Grau superior administració i finances">Grau superior administració i finances</option>
                    <option value="Grau superior assistència a la direcció">Grau superior assistència a la direcció</option>
                </select><br>
                <button class="registro-boton" type="submit" name="insertUser">Registrarse</button>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
                <button class="cancel-boton" type="submit"><a draggable="true" href="../index.html">Cancelar</a></button>
            </form>
        </div>
    </div>
</body>

</html>