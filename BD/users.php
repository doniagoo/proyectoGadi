<?php
require_once("./bd.php");
$users = mostrarUsers();
$scores = mostrarScore();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>
    <link rel="stylesheet" href="../style/users__style.css">
    <link rel="stylesheet" href="../style/nav__style.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
            <div><a href="../BD/loginUser.php">JUGAR</a></div>
            <div>
                <form action="./controlador.php" method="post">
                    <div class="nombreUser-btn"><a href="../BD/Administracion.php"><i class="fa fa-user"></i></a><?php echo $_SESSION['email']; ?></div>
                    <button class="cerrar-sesion" type="submit" name="cerrarSesion"><i class="fa fa-sign-out"></i>Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once("./bd.php") ?>

    <div class="container-table">
    <div class="volver"><a href="./Administracion.php"><i class="fa fa-chevron-left" style="font-size:24px"></i></a></div>
        <table class="tablaBD">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Nickname</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>Ciclo</th>
                    <th>Juego 1</th>
                    <th>Juego 2</th>
                    <th>Juego 3</th>
                    <th>Juego 4</th>
                    <th>Juego 5</th>
                </tr>
                <?php foreach ($users as $user) { ?>
                    <tr>
            <tbody>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['nickname']; ?></td>
                <td><?php echo $user['apellidos']; ?></td>
                <td><?php echo $user['nombre']; ?></td>
                <td><?php echo $user['ciclo']; ?></td>

                <?php
                    $puntuacion = [
                        "juego1" => 0,
                        "juego2" => 0,
                        "juego3" => 0,
                        "juego4" => 0,
                        "juego5" => 0,
                    ]; ?>

                <?php foreach ($scores as $score) {

                        if ($score['idUser'] == $user['id'] && $score['idJuego'] == 1 && $score['score'] !== 0) {
                            $puntuacion["juego1"] = $score['score'];
                        }
                        if ($score['idUser'] == $user['id'] && $score['idJuego'] == 2 && $score['score'] !== 0) {
                            $puntuacion["juego2"] = $score['score'];
                        }
                        if ($score['idUser'] == $user['id'] && $score['idJuego'] == 3 && $score['score'] !== 0) {
                            $puntuacion["juego3"] = $score['score'];
                        }
                        if ($score['idUser'] == $user['id'] && $score['idJuego'] == 4 && $score['score'] !== 0) {
                            $puntuacion["juego4"] = $score['score'];
                        }
                        if ($score['idUser'] == $user['id'] && $score['idJuego'] == 5 && $score['score'] !== 0) {
                            $puntuacion["juego5"] = $score['score'];
                        }
                    }
                    for ($i = 1; $i <= count($puntuacion); $i++) { ?>
                    <td><?php echo $puntuacion["juego$i"]; ?></td>
                    <?php $puntuacion["juego$i"] = 0; ?>
                <?php } ?>
            </tbody>
            </tr>
        <?php } ?>
        </thead>
        </table>
    </div>

</body>

</html>