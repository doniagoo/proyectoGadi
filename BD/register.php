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
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required minlength="1" maxlength="25">
                <label for="apellidos">Apellido:</label>
                <input type="text" name="apellidos" id="apellidos" required minlength="1" maxlength="25">
                <label for="email">Email:</label>
                <?php if ($emailRegister != '') { ?>
                    <input type="text" name="email" id="email" value="<?php echo $emailRegister ?> " minlength="11" maxlength="60">
                <?php } else { ?>
                    <input type="text" name="email" id="email" required minlength="11" maxlength="60">
                <?php } ?>
                <label for="nickname">Nickname:</label>
                <input type="text" name="nickname" id="nickname">
                <label for="ciclo">Ciclo:</label>
                <select name="ciclo" id="">
                    <option></option>
                    <option value="GM AC">Grau mitjà activitats comercials</option>
                    <option value="GS MARP">Grau superior màrqueting i publicitat</option>
                    <option value="GS GVEC">Grau superior gestió de vendes i espais comercials</option>
                    <option value="GS CINT">Grau superior comerç internacional</option>
                    <option value="GS AVIE">Grau superior agències de viatges i gestió d’esdeveniments</option>
                    <option value="GM SMIX">Grau mitjà sistemes microinformàtics i xarxes</option>
                    <option value="GS DAW">Grau superior desenvolupament aplicacions web</option>
                    <option value="GS DAM">Grau superior desenvolupament aplicacions multiplataforma</option>
                    <option value="GM GAD">Grau mitjà gestió administrativa</option>
                    <option value="GS AFI">Grau superior administració i finances</option>
                    <option value="GS ADIR">Grau superior assistència a la direcció</option>
                </select>
                <button type="submit" name="insertUser">Registrarse</button>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
                <button class="cancel-boton" type="submit"><a draggable="true" href="../index.html">Cancelar</a></button>
            </form>
        </div>
    </div>
</body>

</html>