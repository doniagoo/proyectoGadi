<?php

function openBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    $conexion = new PDO("mysql:host=$servername;dbname=dagi", $username, $password);
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
    $sentenciaText = "select * from USERS";
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
    $sentenciaText = "Insert into USERS (email,contrasena,es_Admin,es_SuperAdmin,nickname,apellidos,nombre,ciclo) values (:email,:contrasena,1,0,null,:apellidos,:nombre,null)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':contrasena', $contrasena);
    $sentencia->bindParam(':apellidos', $apellidos);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->execute();
    $conexion = closeBD();
}

function modificarAdmin($contrasena, $id){
    $conexion = openBD();
    $sentenciaText = "UPDATE USERS SET contrasena = '$contrasena' Where id = $id";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $conexion = closeBD();
}