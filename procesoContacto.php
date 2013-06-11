<?php
session_start();

$email = $_POST['email'];
$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

//****************************** ENVIO EMAIL ******************************//
       
    $destinatario="rypsk1.0@gmail.com";
    
//para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

//dirección del remitente 
    $headers .= "From: ".$email.".\r\n";
    $headers .= "Nombre ".$nombre.".";

mail($destinatario, $asunto, $mensaje, $headers);
    
    //******************************  FIN EMAIL ******************************//

?>
