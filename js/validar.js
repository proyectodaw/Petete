//*********************VALIDACIONES************************

function validar() {
    if (validarUsuario() && validarPassword() && validarRepPassword() && validarEmail() &&
            validarRepEmail() && validarTelefono() && validarNif() && validarNombre() &&
            validarApellidos() && validarFechaNacimiento() && validarNacionalidad() &&
            validarSexo() && validarTerminos()) {
        return true;
    } else {
        return false;
    }
}
function validarUsuario() {
    var expresion = /[a-zA-Z-0-9]{6,}/;

    if (document.getElementById('usuario').value === "") {
        document.getElementById('errorGeneral').innerHTML = "Usuario vacio";
        document.getElementById('usuario').focus();
        return false;
    } else if (!expresion.test(document.getElementById('usuario').value)) {
        document.getElementById('errorGeneral').innerHTML = "Usuario incorrecto";
        document.getElementById('usuario').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarPassword() {
    var expresion = /[a-zA-Z-0-9]{6,}/;

    if (document.getElementById('password').value === "") {
        document.getElementById('errorGeneral').innerHTML = "Password vacio";
        document.getElementById('password').focus();
        return false;
    } else if (!expresion.test(document.getElementById('password').value)) {
        document.getElementById('errorGeneral').innerHTML = "Password incorrecto";
        document.getElementById('password').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}

function validarRepPassword(){
    if(document.getElementById('password').value===document.getElementById('repite_password').value){
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }else{
        document.getElementById('errorGeneral').innerHTML = "Password no coincide";
        document.getElementById('repite_password').focus();
    }
}

function validarEmail() {
    var expresion = /^[a-z-0-9_\.\-]+@[a-z]+\.[a-z]{2,4}$/;

    if (document.getElementById('email').value === "") {
        document.getElementById('errorGeneral').innerHTML = "Email vacio";
        document.getElementById('email').focus();
        return false;
    } else if (!expresion.test(document.getElementById('email').value)) {
        document.getElementById('errorGeneral').innerHTML = "Email incorrecto";
        document.getElementById('email').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}

function validarRepEmail(){
    if(document.getElementById('email').value===document.getElementById('repite_email').value){
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }else{
        document.getElementById('errorGeneral').innerHTML = "Email no coincide";
        document.getElementById('repite_email').focus();
    }
}
function validarNif() {
    var expresion = /^[0-9]{8}[a-zA-Z]{1}$/;

    if (document.getElementById('nif').value === "") {
        document.getElementById('errorGeneral').innerHTML = "Nif vacio";
        document.getElementById('nif').focus();
        return false;
    } else if (!expresion.test(document.getElementById('nif').value)) {
        document.getElementById('errorGeneral').innerHTML = "Nif incorrecto";
        document.getElementById('nif').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarTelefono() {
    var expresion = /[0-9]{9}/;

    if (document.getElementById('telefono').value === "") {
        document.getElementById('errorGeneral').innerHTML = "telefono vacio";
        document.getElementById('telefono').focus();
        return false;
    } else if (!expresion.test(document.getElementById('telefono').value)) {
        document.getElementById('errorGeneral').innerHTML = "telefono incorrecto";
        document.getElementById('telefono').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarNombre() {
    var expresion = /[a-zA-Z]{2,}/;

    if (document.getElementById('nombre').value === "") {
        document.getElementById('errorGeneral').innerHTML = "Nombre vacio";
        document.getElementById('nombre').focus();
        return false;
    } else if (!expresion.test(document.getElementById('nombre').value)) {
        document.getElementById('errorGeneral').innerHTML = "Nombre incorrecto";
        document.getElementById('nombre').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarApellidos() {
    var expresion = /[a-zA-Z]{2,}/;

    if (document.getElementById('apellidos').value === "") {
        document.getElementById('errorGeneral').innerHTML = "Apellidos vacio";
        document.getElementById('apellidos').focus();
        return false;
    } else if (!expresion.test(document.getElementById('apellidos').value)) {
        document.getElementById('errorGeneral').innerHTML = "Apellidos incorrecto";
        document.getElementById('apellidos').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarFechaNacimiento() {
    var expresion = /^\d{1,2}(\-)\d{1,2}\1\d{4}$/;
    var valor = document.getElementById('fecha').value;
    var arrayValor = valor.split("-");
    var dia = arrayValor[0];
    var mes = arrayValor[1];
    var anno = arrayValor[2];

    if (valor === "") {
        document.getElementById('errorGeneral').innerHTML = "Fecha vacía";
        document.getElementById('fecha').focus();
        return false;
    } else if (!expresion.test(valor)) {
        document.getElementById('errorGeneral').innerHTML = "Fecha incorrecta";
        document.getElementById('fecha').focus();
        return false;
    } else if (dia < 1 || dia > 31) {
        document.getElementById('errorGeneral').innerHTML = "Dia incorrecto";
        document.getElementById('fecha').focus();
        return false;
    } else if (mes < 1 || mes > 12) {
        document.getElementById('errorGeneral').innerHTML = "Mes incorrecto";
        document.getElementById('fecha').focus();
        return false;
    } else if (anno < 1 || anno > 2013) {
        document.getElementById('errorGeneral').innerHTML = "Año incorrecto";
        document.getElementById('fecha').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarNacionalidad() {
    if (document.getElementById('nacionalidad').value === "Selecciona..." || document.getElementById('nacionalidad').value === "") {
        document.getElementById('errorGeneral').innerHTML = "No ha seleccionado una Nacionalidad";
        document.getElementById('nacionalidad').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}
function validarSexo() {
    o = document.forms[0].sexo;
    for (i = 0; i < o.length; i++) {
        if (o[i].checked) {
            document.getElementById('errorGeneral').innerHTML = "";
            return true;
        }
    }
    if (i > o.length - 1) {
        document.getElementById('errorGeneral').innerHTML = "Debe seleccionar un sexo";
        document.getElementById('sexo').focus();
        return false;
    }
}
function validarTerminos() {
    if(!document.forms[0].terminos.checked){
        document.getElementById('errorGeneral').innerHTML = "Debe aceptar los términos";
        document.getElementById('terminos').focus();
        return false;
    } else {
        document.getElementById('errorGeneral').innerHTML = "";
        return true;
    }
}