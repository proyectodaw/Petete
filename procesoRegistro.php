<?php
ob_start();
session_start();

include 'Conectar.php';
include 'Usuario.php';

$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$pais=$_POST['pais'];
$provincia=$_POST['provincia'];        
$poblacion=$_POST['poblacion'];
$direccion=$_POST['direccion'];
$codigoPostal=$_POST['postal'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$saldo = 0;
$codigoPromocion = rand(1000000, 9999999);
$estadoCodigo = "inactivo";
$tipoUsuario = "desactivado";

//genero código de activación
$pattern = "1234567890abcdefghijklmnopqrstuvwxyz";

for($i = 0; $i < 20; $i++) {
    $key .= $pattern{rand(0, 35)};
}

$codigoActivacion= $key;

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
    $array[7] = $pais; 
    $array[8] = $provincia;
    $array[9] = $poblacion;
    $array[10] = $direccion;
    $array[11] = $codigoPostal;
    $array[12] = $fecha;
    $array[13] = $telefono;
    $array[14] = $sexo;
    $array[15] = $saldo;
    $array[16] = $codigoPromocion;
    $array[17] = $estadoCodigo;
    $array[18] = $codigoActivacion;
    $array[19] = $tipoUsuario;

    $user->annadirUsuario($array, $conexion);
    //$datosUsuario = $user->validarUsuario($usuario, $password, $conexion);
    //$_SESSION['datosUsuario'] = $datosUsuario;

    //****************************** ENVIO EMAIL ******************************//
       
    $destinatario = $email;
    $asunto = "Activación de la cuenta.";
    $cuerpo = ' 
    <html> 
    <head> 
        <title>Activación de la cuenta de usuario</title> 
    </head> 
    <body> 
        <h1>Hola amigos!</h1> 
        <p><b>Bienvenidos a PETETE Apuestas.</b></p><br />
        <p>Para activar tu cuenta picha en el siguiente link</p>
        <a href="http://www.petete.comuv.com/index.php?codigoActivacion='.$codigoActivacion.'">
            http://www.petete.comuv.com/index.php?codigoActivacion='.$codigoActivacion.'</a>
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
