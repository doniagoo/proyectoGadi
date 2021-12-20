 <?php
    function scorePlayer()
    {
        $score = $_POST['result'];
        $conexion = openBD();
        $id = id($_SESSION['email']);
        $sentenciaText = "UPDATE JUEGO_USER SET idJuego= :idJuego,idUser=:idUser,juegoCompleto=:juegoCompleto,score=:score WHERE idUser= $id";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':idJuego', 2);
        $sentencia->bindParam(':idUser', $id);
        $sentencia->bindParam(':juegoCompleto', 1);
        $sentencia->bindParam(':score', $score);
        $sentencia->execute();
        $conexion = closeBD();
    }

    ?>


