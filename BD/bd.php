<?php
session_start();
function errorMensaje($e)
{
    if (!empty($e->errorInfo[1])) {
        switch ($e->errorInfo[1]) {
            case 1062:
                $mensaje = 'Registro duplicado';
                break;
            case 1451:
                $mensaje = 'Registrop con elementos relacionados';
                break;
            default:
                $mensaje = $e->errorInfo[1] . ' - ' . $e->errorInfo[2];
                break;
        }
    } else {
        switch ($e->getCode()) {
            case 1044:
                $mensaje = "User y/o password incorrecto";
                break;
            case 1049:
                $mensaje = 'Base de datos desconocida';
                break;
            case 2002:
                $mensaje = 'No se encuentra el server';
                break;
            default:
                $mensaje = $e->getCode() . ' - ' . $e->getMessage();
                break;
        }
    }
    return $mensaje;
}
function openBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    $conexion = new PDO("mysql:host=$servername;dbname=gadi", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");

    return $conexion;
}
function closeBD()
{
    return null;
}
function mostrarAdmins()
{
    $conexion = openBD();
    $sentenciaText = "select * from USERS where es_admin = 1 and es_superadmin = 0";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBD();
    return $resultado;
}

function deleteAdmins($id)
{
    $conexion = openBD();
    $sentenciaText = "delete from USERS where id = $id ";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $conexion = closeBD();
}

function insertAdmin($email, $contrasena, $apellidos, $nombre)
{
    $conexion = openBD();
    $sentenciaText = "Insert into USERS (email,contrasena,es_admin,es_superadmin,nickname,apellidos,nombre,ciclo) values (:email,:contrasena,1,0,null,:apellidos,:nombre,null)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':contrasena', $contrasena);
    $sentencia->bindParam(':apellidos', $apellidos);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->execute();
    $conexion = closeBD();
}

function modificarAdmin($contrasena, $id)
{
    $conexion = openBD();
    $sentenciaText = "UPDATE USERS SET contrasena = '$contrasena' Where id = $id";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $conexion = closeBD();
}
function mostrarUsers()
{
    $conexion = openBD();
    $sentenciaText = "select * from USERS where es_admin = 0";
    $sentenciaText2 = "select idJuego,score from JUEGO_USER";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia2 = $conexion->prepare($sentenciaText2);
    $sentencia->execute();
    $sentencia2->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBD();
    return $resultado;
}
function mostrarScore()
{
    $conexion = openBD();
    $sentenciaText2 = "select idUser,idJuego,score from JUEGO_USER where juegoCompleto = 1";
    $sentencia2 = $conexion->prepare($sentenciaText2);
    $sentencia2->execute();
    $resultado = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
    $conexion = closeBD();
    return $resultado;
}

function insertUser($nombre, $apellidos, $email, $nickname, $ciclo)
{
    try {
        $conexion = openBD();
        $sentenciaText = "Insert into USERS (email,contrasena,es_admin,es_superadmin,nickname,apellidos,nombre,ciclo) values (:email,null,0,0,:nickname,:apellidos,:nombre,:ciclo)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':nickname', $nickname);
        $sentencia->bindParam(':apellidos', $apellidos);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':ciclo', $ciclo);
        $sentencia->execute();
        $_SESSION['userActivo'] = loginUser($email);
    } catch (PDOException $e) {
        $_SESSION['error'] = errorMensaje($e);
    }

    $conexion = closeBD();
}

function cantidadJuegos()
{
    $conexion = openBD();
    $cantidadJuegos = $conexion->prepare("Select count(id) from JUEGOS");
    $cantidadJuegos->execute();
    $resultado = $cantidadJuegos->fetchAll();
    $conexion = closeBD();
    return $resultado;
}
function id($email)
{
    $conexion = openBD();
    $idUser = $conexion->prepare("Select id from USERS WHERE email = $email");
    $idUser->execute();
    $resultado = $idUser->fetchAll();
    $conexion = closeBD();
    return $resultado;
}
function userJuegos($cantidadJuegos, $idUser)
{
    $conexion = openBD();
    for ($i = 0; $i < $cantidadJuegos; $i++) {
        $sentenciaText = "Insert into JUEGO_USER (idJuego,idUser,juegoCompleto,score)VALUES (:idJuego,:idUser,:juegoCompleto,:score)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':idJuego', $i);
        $sentencia->bindParam(':idUser', $idUser);
        $sentencia->bindParam(':juegoCompleto', false);
        $sentencia->bindParam(':score', null);
        $sentencia->execute();
    }
    $conexion = closeBD();
}

function loginUser($email)
{
    $conexion = openBD();
    $sentencia = $conexion->prepare("Select * from USERS WHERE email = '$email' and es_admin = 0");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conexion = closeBD();
    return $resultado[0];
}
function loginAdmin($email)
{
    $conexion = openBD();
    $sentencia = $conexion->prepare("Select * from USERS WHERE email = '$email' and es_admin = 1");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conexion = closeBD();
    return $resultado[0];
}
