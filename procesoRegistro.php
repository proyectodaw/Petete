<?php
ob_start();
session_start();

include 'Conectar.php';
include 'Usuario.php';

$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$saldo = 0;
$codigoPromocion = rand(1000000, 9999999);
$estadoCodigo = "inactivo";
$tipoUsuario = "desactivado";

$conexion = conectar();
$user = new Usuario();

$existe = $user->existeUsuario($usuario, $email, $nif, $conexion);

if ($existe == false) {

    $array = array();

    $array[0] = $nif;
    $array[1] = $nombre;
    $array[2] = $apellidos;
    $array[3] = $usuario;
    $array[4] = $password;
    $array[5] = $email;
    $array[6] = $nacionalidad;
    $array[7] = $fecha;
    $array[8] = $telefono;
    $array[9] = $sexo;
    $array[10] = $saldo;
    $array[11] = $codigoPromocion;
    $array[12] = $estadoCodigo;
    $array[13] = $tipoUsuario;

    $user->annadirUsuario($array, $conexion);
    $datosUsuario = $user->validarUsuario($usuario, $password, $conexion);
    $_SESSION['datosUsuario'] = $datosUsuario;

    //****************************** ENVIO EMAIL ******************************//
       
    $destinatario = $email;
    $asunto = "Este mensaje es de prueba";
    $cuerpo = ' 
    <html> 
    <head> 
        <title>Prueba de correo</title> 
    </head> 
    <body> 
        <h1>Hola amigos!</h1> 
        <p><b>Bienvenidos a PETETE Apuestas.</b></p> 
    </body> 
    </html> 
    ';

//para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente 
    $headers .= "From: PETETE Apuestas <admin@petete.com>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente 
    //$headers .= "Reply-To: admin@petete.com\r\n";

//direcciones que recibián copia 
    //$headers .= "Cc: admin@petete.com\r\n";

//direcciones que recibirán copia oculta 
    //$headers .= "Bcc: admin@petete.com\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);
    
    //******************************  FIN EMAIL ******************************//
    
} else {
    $_SESSION['error'] = "EL USUARIO YA ESTA EN NUEATRA BBDD";
}
header("location:index.php");
?>
