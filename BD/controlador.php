<?php

require_once('./bd.php');
if (isset($_POST['insert'])) {
    insertAdmin($_POST['email'], $_POST['contrasena'], $_POST['apellidos'], $_POST['nombre']);
    header('Location: ./prueba.php');
    exit();
}
if (isset($_POST['deleteAdmin'])) {
    $idAdmin = $_POST['Idadmin'];
    var_dump($idAdmin);
    deleteAdmins($idAdmin);
    header('Location: ./prueba.php');
    exit();
}
if (isset($_POST['modify'])) {
    $contrasena=encriptarContrasena($_POST['ContraNueva']);
    modificarAdmin($contrasena,$_POST['idAdmin']);
    header('Location: ./prueba.php');
    exit();
}
function encriptarContrasena($contrasena){
    $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT, array("cost"=>"4"));
    return $pass_cifrado;
}
