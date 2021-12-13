<?php
session_start();
require_once('./bd.php');
if (isset($_POST['insert'])) {
    $contrasena = encriptarContrasena($_POST['contrasena']);
    insertAdmin($_POST['email'], $contrasena, $_POST['apellidos'], $_POST['nombre']);
    header('Location: ./Admins.php');
    exit();
} else if (isset($_POST['insertUser'])) {
    insertUser($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['nickname'], $_POST['ciclo']);
    header('Location: ./users.php'); //Apartado juegos
    exit();
} else if (isset($_POST['deleteAdmin'])) {
    $idAdmin = $_POST['Idadmin'];
    var_dump($idAdmin);
    deleteAdmins($idAdmin);
    header('Location: ./Admins.php');
    exit();
} else if (isset($_POST['modify'])) {
    $contrasena = encriptarContrasena($_POST['ContraNueva']);
    modificarAdmin($contrasena, $_POST['idAdmin']);
    header('Location: ./Admins.php');
    exit();
} else if (isset($_POST['LoginUser'])) {
    $user = loginUser($_POST['email']);
    if ($user != null) {
        $_SESSION['userActivo'] = $user;
        header('Location: ./users.php'); //apartado juegos
        exit();
    } else {
        $_SESSION['emailRegister'] = $_POST['email'];
        header('Location: ./register.php');
        exit();
    }
} else if (isset($_POST['LoginAdmin'])) {
    $admin = loginAdmin($_POST['email']);
    if ($admin != null) {
        if (password_verify($_POST['contrasena'], $admin[0]['contrasena'])) {
            $_SESSION['adminActivo'] = $admin;
            header('Location: ./Admins.php'); //apartado opciones admin
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Email incorrecto";
    }
}
function encriptarContrasena($contrasena)
{
    $pass_cifrado = password_hash($contrasena, PASSWORD_DEFAULT, array("cost" => "4"));
    return $pass_cifrado;
}
