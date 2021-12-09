<?php 

function openBd(){
    $servername = "localhost";
    $username = "root";
    $password = ""; 

    $connection = new PDO("mysql:host=$servername;dbname=dagi", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("set names utf8");

    return $connection;
}

function closeBd(){
    return null;
}

function selectUsers(){
    $connection = openBd();

    $consulta = "SELECT * FROM users";

    $consultaSelect = $connection->prepare($consulta);
    $consultaSelect->execute();

    $result = $consultaSelect->fetchAll();

    $connection = closeBd();

    return $result;
}



?>