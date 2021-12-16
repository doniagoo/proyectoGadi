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
                <label for="email">Email</label><br>
                <?php if ($emailRegister != '') { ?>
                    <input type="text" name="email" id="email" required minlength="11" maxlength="60" value="<?php echo $emailRegister ?>">
                <?php } else { ?>
                    <input type="text" name="email" id="email" required minlength="11" maxlength="60">
                <?php } ?><br><br>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="nombre" required maxlength="25"><br><br>
                <label for="apellidos">Apellido</label><br>
                <input type="text" name="apellidos" id="apellidos" required  maxlength="60"><br><br>

                <label for="nickname">Nickname</label><br>
                <input type="text" name="nickname" id="nickname" required  maxlength="25"><br><br>
                <label for="ciclo">Ciclo</label><br>
                <select name="ciclo" id="" required>
                    <option></option>
                    <option value="AC">Grau mitjà activitats comercials</option>
                    <option value="MARP">Grau superior màrqueting i publicitat</option>
                    <option value="GVEC">Grau superior gestió de vendes i espais comercials</option>
                    <option value="CINT">Grau superior comerç internacional</option>
                    <option value="AVIE">Grau superior agències de viatges i gestió d’esdeveniments</option>
                    <option value="SMIX">Grau mitjà sistemes microinformàtics i xarxes</option>
                    <option value="DAW">Grau superior desenvolupament aplicacions web</option>
                    <option value="DAM">Grau superior desenvolupament aplicacions multiplaforma</option>
                    <option value="GAD">Grau mitjà gestió administrativa</option>
                    <option value="AFI">Grau superior administració i finances</option>
                    <option value="ADIR">Grau superior assistència a la direcció</option>
                </select><br>
                <button class="registro-boton" type="submit" name="insertUser">Registrarse</button>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
                <button class="cancel-boton" type="submit"><a draggable="true" href="../index.html">Cancelar</a></button>
            </form>
        </div>
    </div>
</body>

</html>