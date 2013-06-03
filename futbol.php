<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETETE Apuestas</title>
<meta name="keywords" content="work center, theme, distortion_effect 3D image slider, 960, free templates, CSS, HTML" />
<meta name="description" content="Work Center Theme is a free CSS template by templatemo.com for everyone. Feel free to use it for any purpose." />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

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
                <a href="registro.php">Registrate</a>
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
    
<div id="boleto">
    <table>
        <tr>
            <th>BOLETO</th>
        </tr>
        <tr>
            <td>LOCAL</td>
            <td>-</td>
            <td>VISITANTE</td>
            <td>CUOTA</td>
            <td><input type="text" placeholder="Importe"/></td>
            <td><input type="submit" value="Apostar"(></td>
        </tr>
    </table>
</div>
<div id="futbol">
		<h3>Próximos Partidos</h3>
		<table id="partidos">
			<tr>
                <th id="th_jor">Jornada</th>
				<th id="th_fec">Fecha</th>
				<th id="th_hin">Hora Inicio</th>
				<th id="th_loc">Local</th>
				<th id="th_vis">Visitante</th>
				<th id="th_plo">1</th>
				<th id="th_pem">X</th>
				<th id="th_pvi">2</th>
				<th id="th_res">Resultado</th>
			<tr>
                         <?php
                        
                        $conexion = conectar();
                        $select = "select * from tabla_futbol";
                        $resultado = $conexion->query($select);

                if ($resultado) {
                    while ($fila = $resultado->fetch_assoc()) {
                        printf("
                        <tr>
                                <td headers='th_jor'>%d</td> 
                                <td headers='th_fec'>%s</td> 
                                <td headers='th_hin'>%s</td> 
                                <td headers='th_loc'>%s</td> 
                                <td headers='th_vis'>%s</td> 
                                <td headers='th_plo'><form action='procesoApuestas.php' method='post'><input type='hidden' name='jor' value='%s'/><input type='hidden' name='fec' value='%s'/><input type='hidden' name='loc' value='%s'/><input type='hidden' name='vis' value='%s'/><input type='hidden' name='pre' value='%s'/><input type='hidden' name='tipo' value='local'/><input type='submit' value='%s €' /></form></td>               
                                <td headers='th_pem'><form action='procesoApuestas.php' method='post'><input type='hidden' name='jor' value='%s'/><input type='hidden' name='fec' value='%s'/><input type='hidden' name='loc' value='%s'/><input type='hidden' name='vis' value='%s'/><input type='hidden' name='pre' value='%s'/><input type='hidden' name='tipo' value='empate'/><input type='submit' value='%s €' /></form></td>
                                <td headers='th_pvi'><form action='procesoApuestas.php' method='post'><input type='hidden' name='jor' value='%s'/><input type='hidden' name='fec' value='%s'/><input type='hidden' name='loc' value='%s'/><input type='hidden' name='vis' value='%s'/><input type='hidden' name='pre' value='%s'/><input type='hidden' name='tipo' value='visitante'/><input type='submit' value='%s €' /></form></td>
                                <td headers='th_res'>%s</td>
                                </tr>", $fila["id_partidof"], $fila["fecha"], $fila["hora_ini"], $fila["local"],$fila["visitante"], $fila["id_partidof"], $fila["fecha"], $fila["local"], $fila["visitante"], $fila["precio_local"], $fila["precio_local"], $fila["id_partidof"], $fila["fecha"], $fila["local"], $fila["visitante"], $fila["precio_empate"], $fila["precio_empate"], $fila["id_partidof"], $fila["fecha"], $fila["local"], $fila["visitante"], $fila["precio_visitante"], $fila["precio_visitante"], $fila["resultado"]);
                   
                      
                    }
                }
                ?>  
		</table>
	<?php
        
        if($_SESSION['datosUsuario']['tipoUsuario']=="administrador"){
        print("    
	<div id='administrador'>
                <table id='partidos'>
			<tr>
                                <th>Jornada</th>
				<th>Fecha</th>
				<th>Hora Inicio</th>
				<th>Local</th>
				<th>Visitante</th>
				<th>1</th>
				<th>X</th>
				<th>2</th>
				<th>Resultado</th>
			<tr>
                            <form id='fPartidos' action='procesoPartidos.php' method='post'>
                        <tr>
                           
                                <td><input type='text' name='jornada' id='jornada' placeholder='Jornada'/></td>
                                <td><input type='text' name='fechaP' id='fechaP' placeholder='Fecha'/></td>
                                <td><input type='text' name='h_ini' id='h_ini' placeholder='Hora inicio'/></td>
                                <td><input type='text' name='local' id='local' placeholder='Local'/></td>
                                <td><input type='text' name='visitante' id='visitante' placeholder='Visitante'/></td>
                                <td><input type='text' name='p_local' id='p_local' placeholder='Precio local'/></td>
                                <td><input type='text' name='p_empate' id='p_empate' placeholder='Precio empate'/></td>
                                <td><input type='text' name='p_visitante' id='p_visitante' placeholder='Precio visitante'/></td>
                        </tr>
                        <tr>
                                <td><input type='submit' id='annadir' value='Añadir' /></td>
                        </tr>
                       
                             </form>

		</table>
		
	</div>
        ");            
        }
	?> 
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