<?php session_start();
$emailRegister = isset($_SESSION['emailRegister']) ? $_SESSION['emailRegister'] : '';
include('../lang/esp.php');
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $langEsp;
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login__style.css">
    <link rel="stylesheet" href="../style/nav__style.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Registro</title>
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
            <div class="ultimo-elemento"><a href="#">JUGAR</a></div>
        </div>
    </div>
    <div class="container">
        <div class="form__container">
        <div class="volver"><a href="../BD/loginUser.php"><i class="fa fa-chevron-left" style="font-size:24px"></i></a></div>
            <form class="form__style" action="./controlador.php" method="post">
                <label for="email">Email</label><br>
                <?php if ($emailRegister != '') { ?>
                    <input type="text" name="email" id="email" required minlength="11" maxlength="60" value="<?php echo $emailRegister ?>">
                <?php } else { ?>
                    <input type="text" name="email" id="email" required minlength="11" maxlength="60">
                <?php } ?><br><br>
                <label for="nombre"><?php echo $lang["nombreRegistro"] ?></label><br>
                <input type="text" name="nombre" id="nombre" required maxlength="25"><br><br>
                <label for="apellidos"><?php echo $lang["apellidoRegistro"] ?></label><br>
                <input type="text" name="apellidos" id="apellidos" required maxlength="60"><br><br>

                <label for="nickname">Nickname</label><br>
                <input type="text" name="nickname" id="nickname" required maxlength="25"><br><br>
                <label for="ciclo"><?php echo $lang["cicloRegistro"] ?></label><br>
                <select name="ciclo" id="" required>
                    <option></option>
                    <option value="AC"><?php echo $lang["com1"] ?></option>
                    <option value="MARP"><?php echo $lang["com2"] ?></option>
                    <option value="GVEC"><?php echo $lang["com3"] ?></option>
                    <option value="CINT"><?php echo $lang["com4"] ?></option>
                    <option value="AVIE"><?php echo $lang["hosteleria1"] ?></option>
                    <option value="SMIX"><?php echo $lang["info1"] ?></option>
                    <option value="DAW"><?php echo $lang["info2"] ?></option>
                    <option value="DAM"><?php echo $lang["info3"] ?></option>
                    <option value="GAD"><?php echo $lang["emp1"] ?></option>
                    <option value="AFI"><?php echo $lang["emp2"] ?></option>
                    <option value="ADIR"><?php echo $lang["emp3"] ?></option>
                </select><br>
                <br>
                <div class="mensaje-error"><?php require_once('./mensaje.php'); ?></div>
                <button class="registro-boton" type="submit" name="insertUser"><?php echo $lang["btnRegistrarse"] ?></button>
                <!-- <input type="submit" value="Registrarse" class="bttn"> -->
                <button class="cancel-boton" type="submit"><a draggable="true" href="../index.php"><?php echo $lang["btnCancelar"] ?></a></button>
            </form>
        </div>
    </div>
</body>

</html>