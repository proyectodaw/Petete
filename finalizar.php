<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>PETETE Apuestas</title>
<meta name="keywords" content="work center, theme, distortion_effect 3D image slider, 960, free templates, CSS, HTML" />
<meta name="description" content="Work Center Theme is a free CSS template by templatemo.com for everyone. Feel free to use it for any purpose." />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
   $("#miDinero").click(function(evento){

         $("#divDin").css("display", "block");
         $("#divJug").css("display", "none");
		 $("#divDat").css("display", "none");
    
	});
	$("#misJugadas").click(function(evento){

         $("#divJug").css("display", "block");
         $("#divDin").css("display", "none");
		 $("#divDat").css("display", "none");
    
	});
	$("#misDatos").click(function(evento){

         $("#divDat").css("display", "block");
         $("#divJug").css("display", "none");
		 $("#divDin").css("display", "none");
    
   });
});
</script>
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
        
	<!-- embedding SWF -->
		<script type="text/javascript">
			var flashvars = {};
			flashvars.xml_file = "distortion_list.xml";
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "flash_distortion_slider";
			attributes.name = "flash_distortion_slider";
			swfobject.embedSWF("distortion_effect.swf", "flash_distortion_slider", "960", "360", "9.0.0", false, flashvars, params, attributes);
		</script>
	<!-- embedding SWF -->

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 
</head>

<body>
<div class="login">
            <?php
            include 'Conectar.php';
            $cerrarSesion='javascript:location.href="cerrarSesion.php"';
            
            if (isset($_SESSION['datosUsuario']['usuario'])) {
                printf("<p>Hola <a href='perfil.php'>" . $_SESSION['datosUsuario']['nombre'] . "</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("Saldo actual: " . $_SESSION['datosUsuario']['saldo'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("<input type = 'submit' id = 'cerrar' value = 'Cerrar sesion' onclick='".$cerrarSesion."' /></p>");
            } else {
                print'<form id="login" name="login" method="POST" action="logear.php">
		<input type="text" id="usuario" name="usuario" placeholder="Usuario"/>
		<input type="password" id="password" name="password" placeholder="Password"/>
		<input type="submit" id="enviar" name="enviar" value="Entrar" />
                &nbsp;
                <a href="registro.php">Registrate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="recuperar.php">Recuperar contraseña</a>
		</form>';
            }
            ?>            
</div>
<div id="templatemo_header_wrapper">
    <div id="templatemo_header">
        <div id="site_title"><a href="index.php">PE<span>TETE</span></a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Inicio</a></li>
                <li><a href="futbol.php">Fútbol</a></li>
                <li><a href="#">Baloncesto</a></li>
                <li><a href="#">Tenis</a></li>
				<li><a href="#">Galgos</a></li>
                <li><a href="#">Bingo</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of header -->
</div>
    <br /><br /><br /><br />
    <br /><br /><br /><br />
<div style="text-align: center">
    <h1>REGISTRO FINALIZADO</h1><br /><br />
    <p>El Usuario ha sido registrado correctamente. Se le ha enviado un e-mail a su correo para la confirmación de su cuenta. <br />
       Revise la bandeja de SPAM, puede que el email se encuentre alojado allí.</p><br />
    <p>En el email también recibira un bono de bienvenida de 10€ como obsequio de PETETE Apuestas. <br />
       Para activar el bono, una vez activada su cuenta PETETE, deberá de introducir dicho código en su página de usuario en <br />
       la pestaña "Códigos Promo".</p>
    <br /><br /><br /><br />
    <br /><br /><br /><br />
</div>
                
    <div class="cleaner"></div>
</div> <!-- END of main -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
	
		<div class="col col_14">
        	<h5>Informacion Interna</h5>
            <ul class="footer_list">
                <li><a href="about.php">Sobre nosotros...</a></li>
                <li><a href="contact.php">Contacto</a></li>
            	<li><a href="registro.php">Registro</a></li>
			</ul>   
        </div>
        <div class="col col_14">
        	<h5>Páginas</h5>
            <ul class="footer_list">
            	<li><a href="futbol.php">Fútbol</a></li>
                <li><a href="#">Baloncesto</a></li>
                <li><a href="#">Tenis</a></li>
                <li><a href="#">Galgos</a></li>
                <li><a href="#">Bingo</a></li>
			</ul>
        </div>
        <div class="col col_14">
        	<h5>Siguenos en</h5>	
            <ul class="footer_list">
                <li><a href="#" class="social facebook">Facebook</a></li>
                <li><a href="#" class="social twitter">Twitter</a></li>
                <li><a href="#" class="social feed">Feed</a></li>
			</ul>
            
        </div>
        
        <div class="col col_14 no_margin_right">
        	
            <div class="cleaner h30"></div>
            Copyright © 2048 <a href="#">PETETE</a><br> Diseñado por <a href="#">Alumnos DAW</a>
        </div>
        
    <div class="cleaner"></div>
    </div>
</div> <!-- END of footer -->

</body>
</html>