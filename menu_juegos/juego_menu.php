<?php
session_start();

$emailUser = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$cicloUser = isset($_SESSION['ciclo']) ? $_SESSION['ciclo'] : "";
$userActivo = isset($_SESSION['userActivo']) ? $_SESSION['userActivo'] : "";
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
      <a href="../index.php"><img src="../media/img/marca-agua-negro.png" alt="" /></a>
    </div>
    <div class="contenido-navbar">
      <div><a href="../index.php">Inicio</a></div>
      <div><a href="../index.php#1">Sobre Politècnics</a></div>
      <div><a href="../index.php#2">Ciclos</a></div>
      <div>
        <form action="../BD/controlador.php" method="post">
          <div></div>
          <button class="btnCerrarSesion" type="submit" name="cerrarSesion"><?php echo $emailUser; ?> Cerrar Sesión</button> <!-- Modificar la clase del botón para que se ajuste a los demás. -->
        </form>
      </div>

    </div>
  </div>
  <div class="caja-elige-ciclo">
    <div class="titulo-ciclos">
      <h2>Selecciona el Ciclo para cambiar la modalidad de cada JUEGO</h2>
    </div>
    <div class="divComboBoxCiclos">
      <select name="ciclo" id="comboCiclo">
        <?php if ($userActivo['ciclo'] == '') { ?>
          <option selected></option>
        <?php } else { ?>
          <option></option>
        <?php }
        if ($userActivo['ciclo'] == 'AC') { ?>
          <option value="AC" selected>Grau mitjà activitats comercials</option>
        <?php } else { ?>
          <option value="AC">Grau mitjà activitats comercials</option>
        <?php }
        if ($userActivo['ciclo'] == 'MARP') { ?>
          <option value="GS MARP" selected>Grau superior màrqueting i publicitat</option>
        <?php } else { ?>
          <option value="MARP">Grau superior màrqueting i publicitat</option>
        <?php }
        if ($userActivo['ciclo'] == 'GVEC') { ?>
          <option value="GVEC" selected>Grau superior gestió de vendes i espais comercials</option>
        <?php } else { ?>
          <option value="GS GVEC">Grau superior gestió de vendes i espais comercials</option>
        <?php }
        if ($userActivo['ciclo'] == 'CINT') { ?>
          <option value="GS CINT" selected>Grau superior comerç internacional</option>
        <?php } else { ?>
          <option value="CINT">Grau superior comerç internacional</option>
        <?php }
        if ($userActivo['ciclo'] == 'AVIE') { ?>
          <option value="AVIE" selected>Grau superior agències de viatges i gestió d’esdeveniments</option>
        <?php } else { ?>
          <option value="AVIE">Grau superior agències de viatges i gestió d’esdeveniments</option>
        <?php }
        if ($userActivo['ciclo'] == 'SMIX') { ?>
          <option value="SMIX" selected>Grau mitjà sistemes microinformàtics i xarxes</option>
        <?php } else { ?>
          <option value="GM SMIX">Grau mitjà sistemes microinformàtics i xarxes</option>
        <?php }
        if ($userActivo['ciclo'] == 'DAW') { ?>
          <option value="DAW">Grau superior desenvolupament aplicacions web</option>
        <?php } else { ?>
          <option value="DAW">Grau superior desenvolupament aplicacions web</option>
        <?php }
        if ($userActivo['ciclo'] == 'DAM') { ?>
          <option value="DAM" selected>Grau superior desenvolupament aplicacions multiplataforma</option>
        <?php } else { ?>
          <option value="DAM">Grau superior desenvolupament aplicacions multiplataforma</option>
        <?php }
        if ($userActivo['ciclo'] == 'GAD') { ?>
          <option value="GAD" selected>Grau mitjà gestió administrativa</option>
        <?php } else { ?>
          <option value="GAD">Grau mitjà gestió administrativa</option>
        <?php }
        if ($userActivo['ciclo'] == 'AFI') { ?>
          <option value="AFI" selected>Grau superior administració i finances</option>
        <?php } else { ?>
          <option value="AFI">Grau superior administració i finances</option>
        <?php }
        if ($userActivo['ciclo'] == 'ADIR') { ?>
          <option value="ADIR" selected>Grau superior assistència a la direcció</option>
        <?php } else { ?>
          <option value="ADIR">Grau superior assistència a la direcció</option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="container">
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/politecniX/src/html/index.php"><img src="../media/img/img-pantalla-game-4.png" id="juego_imagen" alt="joc5" /></a>

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
        <a href="../games/politecnicsHunt/index.php"><img src="../media/img/img-pantalla-game-5.png" id="juego_imagen" alt="joc2" /></a>
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
        <a href="../games/CazaFrase/index.php"><img src="../media/img/img-pantalla-game-3.png" id="juego_imagen" alt="joc4" /></a>
      </div>
      <div class="game__name">
        <h3>Caza Frase</h3>
      </div>
    </div>
  </div>
</body>

</html>