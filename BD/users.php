<?php
require_once("./bd.php");
$users = mostrarUsers();
$scores = mostrarScore();
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php include_once("./bd.php") ?>
    <div class="muestra">
        <table>

            <tr>
                <td>ID</td>
                <td>Email</td>
                <td>Nickname</td>
                <td>Apellidos</td>
                <td>Nombre</td>
                <td>Ciclo</td>
                <td>Juego 1</td>
                <td>Juego 2</td>
                <td>Juego 3</td>
                <td>Juego 4</td>
                <td>Juego 5</td>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
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

                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>