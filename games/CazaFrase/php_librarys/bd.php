<?php 
$data = json_decode(file_get_contents('php://input'), true);

if($data['action'] == 'selectScores') {
    selectScores();
}

function openBd(){
    $servername = "localhost";
    $username = "root";
    $password = ""; 

    $connection = new PDO("mysql:host=$servername;dbname=gadi", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("set names utf8");

    return $connection;
}

function closeBd(){
    return null;
}

function selectUserNicknames($user_id){
    $connection = openBd();

    $consulta = "SELECT nickname FROM users WHERE id = :id";

    $consultaSelect = $connection->prepare($consulta);
    $consultaSelect->bindParam(':id', $user_id);
    $consultaSelect->execute();

    $result = $consultaSelect->fetchAll();

    $connection = closeBd();

    return $result;
}

function insertUserGame($id_juego, $id_user, $juego_completo, $score){
    $connection = openBd();

    $consulta = "INSERT INTO juego_user VALUES (:id_juego, :id_user, :juego_completo, :score)";
    $sentence = $connection->prepare($consulta);
    
    $sentence->bindParam(':id_juego', $id_juego);
    $sentence->bindParam(':id_user', $id_user);
    $sentence->bindParam(':juego_completo', $juego_completo);
    $sentence->bindParam(':score', $score);

    $sentence->execute();

    $connection = closeBd();
}

function selectScores(){
    $connection = openBd();

    $consulta = "SELECT score, users.nickname, id_user, id_juego FROM juego_user 
                 JOIN users
                 ON id_juego = 4 ORDER BY score DESC LIMIT 3";

    $sentence = $connection->prepare($consulta);
    $sentence->execute();

    $result = $sentence->fetchAll();

    $connection = closeBd();

    if(!empty($result)){
        echo json_encode($result);
    }else{
        echo json_encode([]);
    }
    
    $connection = closeBd();
    return $result;
}



?>