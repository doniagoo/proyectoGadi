function comprovarContraseña() {
    var ContraNueva = document.getElementById("ContraNueva")
        , confirmarContra = document.getElementById("confirmarContra");

    function validarContraseña() {
        if (ContraNueva.value != confirmarContra.value) {
            confirmarContra.setCustomValidity("Passwords Don't Match");
        } else {
            confirmarContra.setCustomValidity('');
        }
    }
    validarContraseña();
    ContraNueva.onchange = validarContraseña;
    confirmarContra.onkeyup = validarContraseña;
}