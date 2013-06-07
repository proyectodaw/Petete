<?php
session_start();

$email = $_POST['email'];
$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

//****************************** ENVIO EMAIL ******************************//
       
    $destinatario="rypsk@hotmail.com";
    
//para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente 
    $headers .= "From: ".$email.".\r\n";
    $headers .= "Nombre ".$nombre.".";

//dirección de respuesta, si queremos que sea distinta que la del remitente 
    //$headers .= "Reply-To: admin@petete.com\r\n";

//direcciones que recibián copia 
    //$headers .= "Cc: admin@petete.com\r\n";

//direcciones que recibirán copia oculta 
    //$headers .= "Bcc: admin@petete.com\r\n";

mail($destinatario, $asunto, $mensaje, $headers);
    
    //******************************  FIN EMAIL ******************************//

?>
