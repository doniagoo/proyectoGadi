<?php
session_start();
require_once('./bd.php');
if (isset($_POST['insert'])) {
    $contrasena = encriptarContrasena($_POST['contrasena']);
    insertAdmin($_POST['email'], $contrasena, $_POST['apellidos'], $_POST['nombre']);
    header('Location: ./Admins.php');
    exit();
} else if (isset($_POST['insertUser'])) {
    insertUser($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['nickname'], $_POST['ciclo'], 5);
    $_SESSION["nombre"] = $_POST['nombre'];
    $_SESSION["apellidos"] = $_POST['apellidos'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["nickname"] = $_POST['nickname'];
    $_SESSION["ciclo"] = $_POST['ciclo'];
    if (isset($_SESSION['error'])) {
        header('Location: ./register.php'); //Apartado juegos
        exit();
    } else {
        header('Location: ../menu_juegos/juego_menu.php'); //Apartado juegos
        exit();
    }
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
        $_SESSION['email'] = $user['email'];
        $_SESSION['nickname'] = $user['nickname'];
        $_SESSION['ciclo'] = $user['ciclo'];
        header('Location: ../menu_juegos/juego_menu.php'); //apartado juegos
        exit();
    } else {
        $_SESSION['emailRegister'] = $_POST['email'];
        header('Location: ./register.php');
        exit();
    }
} else if (isset($_POST['LoginAdmin'])) {
    $admin = loginAdmin($_POST['email']);
    if ($admin != null) {
        if (password_verify($_POST['contrasena'], $admin['contrasena'])) {
            $_SESSION['userActivo'] = $admin;
            $_SESSION['email'] = $admin['email'];
            $_SESSION['contrasena'] = $admin['contrasena'];
            $_SESSION['es_superadmin'] = $admin['es_superadmin'];
            header('Location: ./Administracion.php'); //apartado opciones admin
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Email incorrecto";
    }
} else if (isset($_POST['cerrarSesion'])) {
    session_destroy();

    header('Location: ../index.html');
    exit();
}


function encriptarContrasena($contrasena)
{
    $pass_cifrado = password_hash($contrasena, PASSWORD_DEFAULT, array("cost" => "4"));
    return $pass_cifrado;
}
