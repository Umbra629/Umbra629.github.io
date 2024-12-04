function validar(formulario) {
    // Validación del apellido paterno
    if (formulario.fpaterno.value.trim().length < 1) {
        alert("Debes escribir el apellido paterno");
        formulario.fpaterno.focus();
        return false;
    }
    // Validación del apellido materno
    if (formulario.fmaterno.value.trim().length < 1) {
        alert("Debes escribir el apellido materno");
        formulario.fmaterno.focus();
        return false;
    }
    // Validación del nombre
    if (formulario.fnombre.value.trim().length < 1) {
        alert("Debes escribir el nombre");
        formulario.fnombre.focus();
        return false;
    }
    // Validación del teléfono
    var telefonoRegex = /^[0-9]{10}$/;
    if (!telefonoRegex.test(formulario.ftelefono.value)) {
        alert("Por favor, ingresa un número de teléfono válido (10 dígitos)");
        formulario.ftelefono.focus();
        return false;
    }
    // Validación de la ciudad
    if (formulario.fciudad.value.trim().length < 1) {
        alert("Debes escribir la ciudad");
        formulario.fciudad.focus();
        return false;
    }
    // Validación de la fecha de nacimiento
    if (formulario.fnacio.value.trim().length < 1) {
        alert("Debes seleccionar la fecha de nacimiento");
        formulario.fnacio.focus();
        return false;
    }
    return true; // Si todo está bien
}
function activar() {
    // Verifica si los campos requeridos tienen contenido
    if (
        document.form1.fpaterno.value.trim().length < 1 ||
        document.form1.fmaterno.value.trim().length < 1 ||
        document.form1.fnombre.value.trim().length < 1 ||
        document.form1.ftelefono.value.trim().length < 1 ||
        document.form1.fciudad.value.trim().length < 1 ||
        document.form1.fnacio.value.trim().length < 1
    ) {
        document.form1.submit.disabled = true; // Deshabilitar el botón
    } else {
        document.form1.submit.disabled = false; // Habilitar el botón
    }
}

