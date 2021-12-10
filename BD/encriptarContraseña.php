<?php

function encriptarContrasena($contrasena){
    $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT, array("cost"=>"5"));
}

function desencriptarContrasena(){

}

?>
