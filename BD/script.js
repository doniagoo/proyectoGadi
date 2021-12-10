function comprovarContraseña() {
    var ContraNueva = document.getElementById("ContraNueva")
    var confirmarContra = document.getElementById("confirmarContra");

    function validarContraseña() {
        if (ContraNueva.value != confirmarContra.value) {
            confirmarContra.setCustomValidity("Las contraseñas no coinciden");
        } else {
            confirmarContra.setCustomValidity('');
        }
    }
    validarContraseña();
    ContraNueva.onchange = validarContraseña;
    confirmarContra.onkeyup = validarContraseña;
}