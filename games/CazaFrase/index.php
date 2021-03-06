<?php 
session_start();

//$usuario = $_SESSION['user'];
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- <link rel="stylesheet" href="style/normalize.css"> -->
    <script src="js/app.js"></script>

    
</head>
<body>
    <button class="btnHome" id="btnHome">HOME</button>
    <div class="divStartGame" id="divStartGame">
        <p class="titleGame" id="titleGame">CAZA FRASE</p>
        <button id="btnStartGame" class="btnStartGame"><p class="startGameText">START GAME</p></button>
        <p class="timerStartGame" id="timerStartGame">3</p>
    </div>

    <div class="container" id="gameContainer">
        <!-- TEMPS I SCORE -->
        <div class="timeAndScoreDiv">
            
            <div class="timeDiv">
                <div id="timer">
                    <div class="base-timer">
                        <!-- Per dibuixar figures (cercles en aquest cas) hem d'utilitzar svg. 
                             Paràmetres del viewBox <min-x> <min-y> <width> <height>
                        -->
                        <svg class="base-timer-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <g class="base-timer-circle">
                            <circle class="base-timer-path-elapsed" cx="50" cy="50" r="45" />
                            <!-- Dibuixarem una figura amb els parametres de 'd'
                                 El stroke-dasharray és la longitud que tindrà la nostre figura. -->
                            <path id="base-timer-path-remaining" stroke-dasharray="283" class="base-timer-path-remaining" 
                            d="M 50, 50  
                            m -45, 0
                            a 45,45 0 1,0 90,0
                            a 45,45 0 1,0 -90,0"
                          ></path>
                            </g>
                        </svg>
                        <span id="base-timer-label" class="base-timer-label">
                            2 : 00 
                        </span>
                        </div>
                </div>
            </div>

            <div class="scoreDiv">
                <p>SCORE</p>
                <div class="line"></div>
                <p id="score" class="scoreText"></p>
            </div>
        </div>

        <!-- JOC -->
        <div class="grid" id="gridJuego"></div>


        <!-- ELEMENTS DE LA FRASE -->
        <div id="elementsFrase">
            <div class="lletresFrase">
                <p id="f">F</p>
                <p id="r">R</p>
                <p id="a">A</p>
                <p id="s">S</p>
                <p id="e">E</p>
            </div>

            <div id="textFrase" class="divTextFrase">
                TEXT FRASE
            </div>
            
        </div>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <p id="textFinal"></p>
              <p id="lastScore"></p>
                <table id="tablaRanking">
                    <p class="rankingText">RANKING</p>
                    <tr>
                        <th>#</th>
                        <th>Nickname</th>
                        <th>Score</th>
                    </tr>
                    <tbody id="ranking">

                    </tbody>
                </table>
                <div class="divButtonsModal">
                    <button id="btnPlayAgain" class="btnPlayAgain"><p class="playAgainText">PLAY AGAIN</p></button>
                    <button id="btnHome2" class="btnHome2">HOME</button>
                </div>
              
            </div>
          
          </div>
    </div>
</body>
</html>