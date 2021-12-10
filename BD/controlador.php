<?php

require_once('./bd.php');
if (isset($_POST['insert'])) {
    insertAdmin($_POST['email'], $_POST['contrasena'], $_POST['apellidos'], $_POST['nombre']);
    header('Location: ./Admins.php');
    exit();
}
if(isset($_POST['insertUser'])){
    insertUser($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['nickname'],$_POST['ciclo']);
    userJuegos(cantidadJuegos(),id($_POST['email']));
    header('Location: ./users.php');//Apartado juegos
    exit();
}
if (isset($_POST['deleteAdmin'])) {
    $idAdmin = $_POST['Idadmin'];
    var_dump($idAdmin);
    deleteAdmins($idAdmin);
    header('Location: ./Admins.php');
    exit();
}
if (isset($_POST['modify'])) {
    $contrasena=encriptarContrasena($_POST['ContraNueva']);
    modificarAdmin($contrasena,$_POST['idAdmin']);
    header('Location: ./Admins.php');
    exit();
}
function encriptarContrasena($contrasena){
    $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT, array("cost"=>"4"));
    return $pass_cifrado;
}

