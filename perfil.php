<?php 
session_start(); 
if(isset($_SESSION['datosUsuario'])){
    
}else{
    header("location:index.php");
}
?>
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
         $("#divCod").css("display", "none");
    
	});
	$("#misJugadas").click(function(evento){

         $("#divJug").css("display", "block");
         $("#divDin").css("display", "none");
	 $("#divDat").css("display", "none");
         $("#divCod").css("display", "none");
    
	});
	$("#misDatos").click(function(evento){

         $("#divDat").css("display", "block");
         $("#divJug").css("display", "none");
	 $("#divDin").css("display", "none");
         $("#divCod").css("display", "none");
    
        });     
        $("#codigoProm").click(function(evento){

         $("#divCod").css("display", "block");
         $("#divDat").css("display", "none");
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
});

</script> 
</head>

<body>
<div class="login">
            <?php
            include './Conectar.php';
            include './Usuario.php';
            $cerrarSesion = 'javascript:location.href="cerrarSesion.php"';
            $conexion = conectar();
            @$codigoActivacion = $_GET['cA'];

            if (isset($codigoActivacion)) {
                $user = new Usuario();
                $datosUsuario = $user->validarCodigoActivacion($codigoActivacion, $conexion);
                if ($datosUsuario) {
                    $_SESSION['datosUsuario'] = $datosUsuario;
                    
                } else {
                    $_SESSION['error'] = "NO EXISTE CÓDIGO ACTIVACION O YA HA SIDO UTILIZADO";
                }
            }
            @$tipoUsuario=$_SESSION['datosUsuario']['tipo_usuario'];
            if (@$tipoUsuario=='activo' || $tipoUsuario=='administrador') {
                unset($_SESSION['error']);
                printf("<p><img src='images/user.png' width='20px' height='20px' /> <a href='perfil.php'>" . $_SESSION['datosUsuario']['nombre'] . "</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("<img src='images/dinero.png' width='20px' height='20px' /> " . $_SESSION['datosUsuario']['saldo'] . "€" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("<input type = 'submit' id = 'cerrar' value = 'Cerrar sesion' onclick='" . $cerrarSesion . "' /></p>");
            } else {
                if (isset($_SESSION['error'])) {
                    print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $_SESSION['error'];
                }
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
                <li><a href="futbol.php">Futbol</a></li>
                <li><a href="baloncesto.php">Baloncesto</a></li>
                <li><a href="tenis.php">Tenis</a></li>
		<li><a href="galgos.php">Galgos</a></li>
                <li><a href="bingo.php">Bingo</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of header -->
</div>
<br /><br /><br /><br />
<div id="perfil">
<ul id="button">
		<li id="miDinero"><a href="#">Mi Dinero</a></li>
		<li id="misJugadas"><a href="#">Mis Jugadas</a></li>
		<li id="misDatos"><a href="#">Mis Datos</a></li>
                <li id="codigoProm"><a href="#">Códigos Promo</a></li>
	</ul><br /><br /><br /><br />
	<div id="divDin" style="display: block;">
		<h3>Mi Dinero</h3>
		<p>Indícanos el importe que deseas depositar en tu monedero</p>
		<p>Importe (mín 5€)</p><br>
		<form id="frmIncremeto" action="procesoDinero.php" method="POST">
		<input type="text" id="dinero" name="dinero" />
		<input type="submit" value="Enviar"/>
		</form>
	</div>


	<div id="divJug" style="display: none;">
		<h3>Mis Jugadas</h3>
		<p>Esta es tú actividad de juego en PETETE</p>
		<div id="historial"></div>
                
                <?php
                    $nif=$_SESSION['datosUsuario']['nif'];
                    $select="select * from apuestas where id_usu='$nif'";
                    $consulta=$conexion->query($select);
                    
                    while ($fila=$consulta->fetch_assoc()) {
                        printf("Jornada %s: %s Vs %s Tasa: %s Cantidad Apostada: %s Tipo: %s <br/>",$fila['jornada'],
                                $fila['local'],$fila['visitante'],$fila['tasa'],$fila['cantidad'],
                                $fila['tipo']);
                   
                      
                    }
                ?>
	</div>


	<div id="divDat" style="display: none;">
		<h3>Mis Datos</h3>
		<form id="frmModDatos" action="#" method="POST">
			Email<br><input type="text" id="email" placeholder="Email"/><br>
			Teléfono<br><input type="text" id="telefono" placeholder="Telefono"/><br>
			Pais<br>
			<select name="pais" id="pais">
				<option>España</option>
				<option>Alemania</option>
				<option>Inglaterra</option>
				<option>Francia</option>
			</select><br>                       
			Provincia<br><input type="text" id="provincia" placeholder="Provincia"/><br>
			Población<br><input type="text" id="poblacion" placeholder="Poblacion"/><br>
			Dirección<br><input type="text" id="direccion" placeholder="Direccion"/><br>
			Código Postal<br><input type="text" id="postal" placeholder="Codigo Postal"/><br>
			<br><br>
			<input type="submit" value="Enviar"/>
		</form>
                <form id="frmElimUsu" action="procesoEliminarUsuario.php" method="POST">
                    <input type="submit" value="Elimiar Usuario"/>
                </form>
	</div>
                            
        <div id="divCod" style="display: none;">
		<h3>Códigos Promo</h3>
                <form <form id="frmCod" action="procesoCodigoPromo.php" method="POST">>
                    Introduce tu Código Promocional<input type="text" id="codigo" name="codigo"/><input type="submit" value="Enviar"/>
                </form>
	</div>
</div><br /><br /><br />
    <div class="cleaner"></div>
</div> <!-- END of main -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
	
		<div class="col col_14">
        	<h5>Información Interna</h5>
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
                <li><a href="baloncesto.php">Baloncesto</a></li>
                <li><a href="tenis.php">Tenis</a></li>
                <li><a href="galgos.php">Galgos</a></li>
                <li><a href="bingo.php">Bingo</a></li>
            </ul>
        </div>
        <div class="col col_14">
        	<h5>Siguenos en</h5>	
            <ul class="footer_list">
                <li><a href="http://www.facebook.com" class="social facebook">Facebook</a></li>
                <li><a href="http://www.twitter.com" class="social twitter">Twitter</a></li>
                <li><a href="http://www.marca.com" class="social feed">Feed</a></li>
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