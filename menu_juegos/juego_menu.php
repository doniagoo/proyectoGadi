<?php
session_start();

$emailUser = isset($_SESSION['email']) ? $_SESSION['email'] : "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/juegos__styles.css" />
  <link rel="stylesheet" href="../style/nav__style.css" />

  <title>Menu Juegos</title>
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
      <form action="../BD/controlador.php" method="post">
        <button type="submit" name="cerrarSesion" class="btnCerrarSesion"><?php echo $emailUser; ?> Cerrar Sesión</button> <!-- Modificar la clase del botón para que se ajuste a los demás. -->
      </form>
    </div>
  </div>
  <div class="container">
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/politecniX/src/html/index.html"><img src="../media/img/img-pantalla-game-4.png" id="juego_imagen" alt="joc5" /></a>

      </div>
      <div class="game__name">
        <h3>PolitecniX</h3>
      </div>
    </div>
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/Memory/inicio.html"><img src="../media/img/img-pantalla-game-2.png" id="juego_imagen" alt="joc1" /></a>
      </div>
      <div class="game__name">
        <h3>Memory</h3>
      </div>
    </div>
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/politecnicsHunt/index.html"><img src="../media/img/img-pantalla-game-5.png" id="juego_imagen" alt="joc2" /></a>
      </div>
      <div class="game__name">
        <h3>Politecnics Hunt</h3>
      </div>
    </div>
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/DisparaBolas/Bubble-Shooter-HTML5/bubble-shooter.html"><img src="../media/img/img-pantalla-game-1.png" id="juego_imagen" alt="joc3" /></a>
      </div>
      <div class="game__name">
        <h3>Dispara Bolas</h3>
      </div>
    </div>
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/CazaFrase/index.html"><img src="../media/img/img-pantalla-game-3.png" id="juego_imagen" alt="joc4" /></a>
      </div>
      <div class="game__name">
        <h3>Caza Frase</h3>
      </div>
    </div>
  </div>
</body>

</html>