<?php
session_start();

$emailUser = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$cicloUser = isset($_SESSION['ciclo']) ? $_SESSION['ciclo'] : "";
$userActivo = isset($_SESSION['userActivo']) ? $_SESSION['userActivo'] : "";
include('../BD/bd.php');
include('../lang/esp.php');
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $langEsp;
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/juegos__styles.css" />
  <link rel="stylesheet" href="../style/nav__style.css" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <title>Menu Juegos</title>
</head>

<body>
  <div class="container-navbar">
    <div class="logo-navbar">
      <a href="../index.php"><img src="../media/img/marca-agua-negro.png" alt="" /></a>
    </div>
    <div class="contenido-navbar">
      <div><a href="../index.php"><?php echo $lang["navInicio"] ?></a></div>
      <div><a href="../index.php#1"><?php echo $lang["navAbout"] ?></a></div>
      <div><a href="../index.php#2"><?php echo $lang["navCiclos"] ?></a></div>
      <div>
        <form action="../BD/controlador.php" method="post">
          <div class="nombreUser-btn"><i class="fa fa-user"></i><?php echo $emailUser; ?></div>
          <button class="cerrar-sesion" type="submit" name="cerrarSesion"><i class="fa fa-sign-out"></i><?php echo $lang["textoCerrarSesion"] ?></button>
        </form>
      </div>
    </div>
  </div>
  <div class="caja-elige-ciclo">
    <div class="titulo-ciclos">
      <h2><?php echo $lang["textoSeleccionarCiclo"] ?></h2>
    </div>
    <div class="divComboBoxCiclos">
      <select name="ciclo" id="comboCiclo">
        <?php if ($userActivo['ciclo'] == '') { ?>
          <option selected></option>
        <?php } else { ?>
          <option></option>
        <?php }
        if ($userActivo['ciclo'] == 'AC') { ?>
          <option value="AC" selected><?php echo $lang["com1"] ?></option>
        <?php } else { ?>
          <option value="AC"><?php echo $lang["com1"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'MARP') { ?>
          <option value="GS MARP" selected><?php echo $lang["com2"] ?></option>
        <?php } else { ?>
          <option value="MARP"><?php echo $lang["com2"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'GVEC') { ?>
          <option value="GVEC" selected><?php echo $lang["com3"] ?></option>
        <?php } else { ?>
          <option value="GS GVEC"><?php echo $lang["com3"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'CINT') { ?>
          <option value="GS CINT" selected><?php echo $lang["com4"] ?></option>
        <?php } else { ?>
          <option value="CINT"><?php echo $lang["com4"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'AVIE') { ?>
          <option value="AVIE" selected><?php echo $lang["hosteleria1"] ?></option>
        <?php } else { ?>
          <option value="AVIE"><?php echo $lang["hosteleria1"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'SMIX') { ?>
          <option value="SMIX" selected><?php echo $lang["info1"] ?></option>
        <?php } else { ?>
          <option value="GM SMIX"><?php echo $lang["info1"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'DAW') { ?>
          <option value="DAW" selected><?php echo $lang["info2"] ?></option>
        <?php } else { ?>
          <option value="DAW"><?php echo $lang["info2"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'DAM') { ?>
          <option value="DAM" selected><?php echo $lang["info3"] ?></option>
        <?php } else { ?>
          <option value="DAM"><?php echo $lang["info3"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'GAD') { ?>
          <option value="GAD" selected><?php echo $lang["emp1"] ?></option>
        <?php } else { ?>
          <option value="GAD"><?php echo $lang["emp1"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'AFI') { ?>
          <option value="AFI" selected><?php echo $lang["emp2"] ?></option>
        <?php } else { ?>
          <option value="AFI"><?php echo $lang["emp2"] ?></option>
        <?php }
        if ($userActivo['ciclo'] == 'ADIR') { ?>
          <option value="ADIR" selected><?php echo $lang["emp3"] ?></option>
        <?php } else { ?>
          <option value="ADIR"><?php echo $lang["emp3"] ?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="container">
    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/politecniX/src/html/index.html"><img src="../media/img/img-pantalla-game-4.png" id="juego_imagen" alt="joc5" /></a>
      </div>
      <div class="game__name">
        <h2>PolitecniX</h2>
      </div>
    </div>

    <div class="juego">
      <div class="imagen__juego">
        <a href="../games/Memory/inicio.html"><img src="../media/img/img-pantalla-game-2.png" id="juego_imagen" alt="joc1" /></a>
      </div>
      <div class="game__name">
        <h2>Memory</h2>
      </div>
    </div>
    <?php
    $huntUnlocked = isGameUnlocked($userActivo['id'], 2);
    if ($huntUnlocked['juegoCompleto'] == '0') { ?>
      <div class="juego">
        <div class="imagen__juego">
          <img src="../media/img/candado-shoter.png" id="juego_imagen" alt="joc2" />
        </div>
        <div class="game__name">
          <h2>Politecnics Hunt</h2>
        </div>
      </div>
    <?php } else { ?>
      <div class="juego">
        <div class="imagen__juego">
          <a href="../games/politecnicsHunt/index.html"><img src="../media/img/img-pantalla-game-5.png" id="juego_imagen" alt="joc2" /></a>
        </div>
        <div class="game__name">
          <h2>Politecnics Hunt</h2>
        </div>
      </div>
    <?php }
    $ShooterUnlocked = isGameUnlocked($userActivo['id'], 4);
    if ($ShooterUnlocked['juegoCompleto'] == '0') { ?>
      <div class="juego">
        <div class="imagen__juego">
          <img src="../media/img/candado-bola.png" id="juego_imagen" alt="joc3" />
        </div>
        <div class="game__name">
          <h2>Dispara Bolas</h2>
        </div>
      </div>
    <?php } else { ?>
      <div class="juego">
        <div class="imagen__juego">
          <a href="../games/DisparaBolas/Bubble-Shooter-HTML5/bubble-shooter.html"><img src="../media/img/img-pantalla-game-1.png" id="juego_imagen" alt="joc3" /></a>
        </div>
        <div class="game__name">
          <h2>Dispara Bolas</h2>
        </div>
      </div>
    <?php }
    $PacmanUnlocked = isGameUnlocked($userActivo['id'], 3);
    if ($PacmanUnlocked['juegoCompleto'] == '0') { ?>
      <div class="juego">
        <div class="imagen__juego">
          <img src="../media/img/Candado-pacman.png" id="juego_imagen" alt="joc4" />
        </div>
        <div class="game__name">
          <h2>Caza Frase</h2>
        </div>
      </div>
    <?php } else { ?>
      <div class="juego">
        <div class="imagen__juego">
          <a href="../games/CazaFrase/index.php"><img src="../media/img/img-pantalla-game-3.png" id="juego_imagen" alt="joc4" /></a>
        </div>
        <div class="game__name">
          <h2>Caza Frase</h2>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

</html>