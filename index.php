<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/nav__style.css">
  <link rel="stylesheet" href="./style/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Libreria JQuery -->
  <title>Gadi Games Menu</title>
</head>

<body id="0">

  <?php
  session_start();
  if(isset($_SESSION['lang'])){
    var_dump($_SESSION['lang']['titulo']);
  }

  include ("lang/lang.php");
  // include('./lang/esp.php');
  $lang = $_SESSION['lang'];
  var_dump($lang['titulo']);
  ?>

  <div class="container-header" id="header-LP">
    <div class="lang__menu">
      <div class="selected__lang">
        <ul>
          <li>
            <form action="./lang/lang.php" method="post">
              <button type="submit" name="cat" class="cat" value="cat">Català</button>
            </form>
            <!-- <input type="submit" class="cat" name="insert" value="Català" /> -->
            <!-- <a href="#" class="cat">Català</a> -->
          </li>
          <li>
            <form action="./lang/lang.php" method="post">
              <button type="submit" name="eng" class="eng" value="eng">English</button>
            </form>
            <!-- <input type="submit" class="eng" name="insert" value="English" /> -->
            <!-- <a href="#" class="eng">English</a> -->
          </li>
          <li>
            <form action="./lang/lang.php" method="post">
              <button type="submit" name="esp" class="esp" value="esp">Español</button>
            </form>
            <!-- <input type="submit" class="eng" name="insert" value="English" /> -->
            <!-- <a href="#" class="eng">English</a> -->
          </li>
        </ul>
      </div>
    </div>
    <div class="jugar">
      <h2><?php echo $lang["titulo"] ?></h2>
      <br />
      <div class="btn-jugar">
        <a href="./BD/loginUser.php">
          <h1><?php echo $lang["jugar"] ?></h1>
        </a>
      </div>
    </div>
    <div class="continuar">
      <a href="#main__text" class="flecha-continuar"><img src="./media/img/continuar.png" /></a>
    </div>
  </div>

  <div class="container-navbar">
    <div class="logo-navbar">
      <a href="#"><img src="./media/img/marca-agua-negro.png" alt="" /></a>
    </div>
    <div class="contenido-navbar">
      <div><a href="#0"><?php echo $lang["navInicio"] ?></a></div>
      <div><a href="#1"><?php echo $lang["navAbout"] ?></a></div>
      <div><a href="#2"><?php echo $lang["navCiclos"] ?></a></div>
      <div class="ultimo-elemento">
        <a href="./BD/loginUser.php">JUGAR</a>
      </div>
    </div>
  </div>

  <div class="container-main">
    <div class="container-cep">
      <div class="titulo">
        <h1><?php echo $lang["sobrePolitecnics"] ?></h1>
        <br />
        <h2><?php echo $lang["experienciaAprendizaje"] ?></h2>
      </div>
      <div class="contenido-cep" id="1">
        <div class="contenido-principal">
          <div class="texto-parrafo">
            <p id="main__text"><?php echo $lang["mainText1"] ?>
              <br /><br />
              <?php echo $lang["mainText2"] ?>
            </p>
          </div>
          <div class="foto-parrafo">
            <img src="./media/img/book.png" />
          </div>
        </div>
      </div>
    </div>
    <div class="container-cursos">
      <div class="titulo">
        <h1><?php echo $lang["proyectoEducativo"] ?></h1>
      </div>
      <div class="contenido-cep">
        <p id="main__text">
        <p><?php echo $lang["proyectoText1"] ?></p><br /><br />
        <p><?php echo $lang["proyectoText2"] ?></p><br /><br />
        <p><?php echo $lang["proyectoText3"] ?></p><br /><br />
        <div class="slide-contenedor">
          <div class="miSlider fade"><img src="./media/img/banner-0.jpg"></div>
          <div class="miSlider fade"><img src="./media/img/banner-1.jpg"></div>
          <div class="miSlider fade"><img src="./media/img/banner-2.jpg"></div>
          <div class="miSlider fade"><img src="./media/img/banner-3.jpg"></div>
          <div class="direccion">
            <a class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
            <a class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
          </div>
          <div class="barras">
            <span class="barra active" onclick="posicionSlide(1)"></span>
            <span class="barra" onclick="posicionSlide(2)"></span>
            <span class="barra" onclick="posicionSlide(3)"></span>
            <span class="barra" onclick="posicionSlide(4)"></span>
          </div>
        </div>
        <br /><br /><br />
        <p><?php echo $lang["abp"] ?></p>
        <br /><br />
        <p><?php echo $lang["erasmus"] ?></p>
        </p>
      </div>
    </div>

    <div class="titulo-form">
      <h1><?php echo $lang["formacionProfesional"] ?></h1>
    </div>
    <div class="container-ciclos">
      <div class="ciclo-m">
        <div class="titulo-m">
          <h2><?php echo $lang["comercioMarketing"] ?></h2>
        </div>
        <div class="contenido-2-m" id="2">
          <ul>
            <li><?php echo $lang["com1"] ?></li>
            <br />
            <li><?php echo $lang["com2"] ?></li>
            <br />
            <li><?php echo $lang["com3"] ?></li>
            <br />
            <li><?php echo $lang["com4"] ?></li>
          </ul>
        </div>
      </div>
      <div class="ciclo-i">
        <div class="titulo-i">
          <h2><?php echo $lang["info"] ?></h2>
        </div>
        <div class="contenido-2-i">
          <ul>
            <li><?php echo $lang["info1"] ?></li>
            <br />
            <li><?php echo $lang["info2"] ?></li>
            <br />
            <li><?php echo $lang["info3"] ?></li>
          </ul>
        </div>
      </div>
      <div class="ciclo-a">
        <div class="titulo-a">
          <h2><?php echo $lang["empresariales"] ?></h2>
        </div>
        <div class="contenido-2-a">
          <ul>
            <li><?php echo $lang["emp1"] ?></li>
            <br />
            <li><?php echo $lang["emp2"] ?></li>
            <br />
            <li><?php echo $lang["emp3"] ?></li>
          </ul>
        </div>
      </div>
      <div class="ciclo-h">
        <div class="titulo-h">
          <h2><?php echo $lang["hosteleriaTurismo"] ?></h2>
        </div>
        <div class="contenido-2-h">
          <ul>
            <li><?php echo $lang["hosteleria1"] ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="img-bottom"><img src="./media/img/bg-body.jpg"></div>

  <div class="container-footer">
    <footer class="footer">
      <div class="caja-iconos">
        <a draggable="false" class="icon" href="#"><img draggable="false" src="./media/img/yt.png" /></a>
      </div>
      <div class="caja-iconos">
        <a draggable="false" class="icon" href="https://www.instagram.com/gadigamescep/"><img draggable="false" src="./media/img/insta.png" /></a>
      </div>
      <div class="caja-iconos">
        <a draggable="false" class="icon-2" href="#0"><img draggable="false" src="./media/img/gadi.png" /></a>
      </div>
      <div class="caja-iconos">
        <a draggable="false" class="icon" href="https://github.com/doniagoo/proyectoGadi"><img draggable="false" src="./media/img/git.png" /></a>
      </div>
      <div class="caja-iconos">
        <a draggable="false" class="icon" href="https://twitter.com/gadigames"><img draggable="false" src="./media/img/twitter.png" /></a>
      </div>
    </footer>
  </div>
  <script src="./js/scroll.js"></script>
  <script src="./js/slides.js"></script>
</body>

</html>