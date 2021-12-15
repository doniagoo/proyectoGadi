<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <title>Memory</title>
</head>

<body>
    <h3 class="marg">SCORE: <span id="resultado" class="margR">0</span> <span id="tempo">10</span><span id="acabo"> seg</span></h3>
    <div class="contenedor">
        <div class="grid"></div>
    </div>
    <p id="acierto"></p>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <p id="enorabuena"></p>
            </div>
            <div class="modal-body">
                <p id="perdida"></p>
                <p id="scores" id="tiempos"></p>
                <p El resultado es : id="result"></p>
                <h3>Ranking</h3>
            </div>
            <div class="modal-footer">
                <a href="./inicio.html"><button>Inicio</button></a>
                <a href="./index.php"><button>Volver a jugar</button></a>
                <a href="../../menu_juegos/juego_menu.php"><button>salir</button></a>
            </div>
        </div>

    </div>
</body>
<script src="./juego.js"></script>

</html>