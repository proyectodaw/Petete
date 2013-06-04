<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>PETETE Apuestas</title>
<meta name="keywords" content="work center, theme, distortion_effect 3D image slider, 960, free templates, CSS, HTML" />
<meta name="description" content="Work Center Theme is a free CSS template by templatemo.com for everyone. Feel free to use it for any purpose." />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="js/validar.js"></script>
        
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

<form id="fRegistro" action="procesoRegistro.php" method="post" onsubmit="return validar();">
            <br><br><h3>Registro de Usuarios</h3>
            <div id="a">
                <fieldset>
                    <legend>DATOS DE ACCESO</legend>
                    <table class="tablaForm">
                        <tr>
                            <td>Usuario</td><td><input type="text" name="user" id="user" placeholder="Usuario"/></td>
                        </tr>
                        <tr>
                            <td>Contraseña</td><td><input type="password" name="pass" id="pass" placeholder="Password"/></td>
                        </tr>
                        <tr>    
                            <td>Repite la Contraseña</td><td><input type="password" name="repite_password" id="repite_password" placeholder="Repite Password"/></td>
                            
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend>DATOS DE CONTACTO</legend>
                    <table class="tablaForm">
                        <tr>
                            <td>Email</td><td><input type="text" name="email" id="email" placeholder="Email"/></td>
                        </tr>
                        <tr>
                            <td>Repite el Email</td><td><input type="text" name="repite_email" id="repite_email" placeholder="Email"/></td>
                        </tr>
                        <tr>
                            <td>Telefono</td><td><input type="text" name="telefono" id="telefono" placeholder="Telefono"/></td>
                        </tr>
                    </table>
                </fieldset>
                </div>
                <div id="b">
                <fieldset>
                    <legend>DATOS PERSONALES</legend>
                    <table class="tablaForm">
                        <tr>
                            <td>DNI</td><td><input type="text" name="nif" id="nif" placeholder="Nif (12345678-L)"/></td>
                        </tr>
                        <tr>
                            <td>Nombre</td><td><input type="text" name="nombre" id="nombre" placeholder="Nombre"/></td>
                        </tr>
                        <tr>
                            <td>Apellidos</td><td><input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"/></td>
                        <tr>
                            <td>Fecha</td><td><input type="text" name="fecha" id="fecha" placeholder="Fecha (dd-mm-yyyy)"/></td>
                        </tr>
                        <tr>
                            <td>Nacionalidad</td><td><input type="text" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad"/></td>
                        </tr>
                        <tr>
                            <td>Pais</td>
                            <td><select name="pais" id="pais">
                                <option>España</option>
                                <option>Alemania</option>
                                <option>Inglaterra</option>
                                <option>Francia</option>
                                </select></td>                               
                        </tr>
                        <tr>
                            <td>Provincia</td><td><input type="text" name="provincia" id="provincia" placeholder="Provincia"/></td>
                        </tr>
                        <tr>
                            <td>Población</td><td><input type="text" name="poblacion" id="poblacion" placeholder="Poblacion"/></td>
                        </tr>
                        <tr>
                            <td>Dirección</td><td><input type="text" name="direccion" id="direccion" placeholder="Direccion"/></td>
                        </tr>
                        <tr>
                            <td>Código Postal</td><td><input type="text" name="postal" id="postal" placeholder="Codigo Postal"/></td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <input type="radio" name="sexo" id="sexo" value="masculino"/>Masculino<br />
                                <input type="radio" name="sexo" id="sexo" value="femenino"/>Femenino
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </div>
            <div id="c">
                <h3>TERMINOS Y CONDICIONES LEGALES</h3>
                <input type="checkbox" name="terminos" id="terminos"/><label id="lTerminos">Acepta las <a href="">condiciones generales</a> y la <a href="">politica de privacidad de PETETES</a></label><span id="errTerminos"></span><br /><br />
                <input type="submit" value="Enviar"/>
                <label id="errorGeneral"></label>
            </div>
        </form>

    
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
        	<h5>Paginas</h5>
            <ul class="footer_list">
            	<li><a href="futbol.php">Futbol</a></li>
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