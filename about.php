<?php session_start(); ?>
DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETETE Apuestas</title>
<meta name="keywords" content="work center, theme, about us, our company, free templates, templatemo, CSS, HTML" />
<meta name="description" content="Work Center Theme, About Us, Company, free CSS template by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

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

<body id="home">
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
                <a href="registro.html">Registrate</a>
		</form>';
            }
            ?>            
</div>
<div id="templatemo_header_wrapper">
    <div id="templatemo_header">
        <div id="site_title"><a href="index.html">PE<span>TETE</span></a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html" class="selected">Inicio</a></li>
                <li><a href="futbol.html">Futbol</a></li>
                <li><a href="#">Baloncesto</a></li>
                <li><a href="#">Tenis</a></li>
				<li><a href="#">Galgos</a></li>
                <li><a href="#">Bingo</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of header -->
</div>

<div id="templatemo_main_top"></div>
<div id="templatemo_main">
	<div class="col col_23">
        <h2>Nuestra Historia</h2>
        <img src="images/templatemo_image_01.jpg" alt="Image 01" class="float_l img_float_l" />
        <p><em> Cración de un Proyecto.</em></p>
        <p>Nullam laoreet nisi eu felis iaculis nec convallis augue egestas. Donec ut lacus tellus. Sed dictum, magna laoreet vehicula posuere, tortor justo dictum ante, nec ultrices elit dolor ac nisl. Sed at porttitor ante. <a href="#">Cras massa nisl</a>, dictum et molestie non, pretium vel massa. Integer in erat ipsum, ut tristique velit. Vivamus tempus velit justo, sit amet cursus lorem. In hac habitasse platea dictumst. Aenean sagittis condimentum quam, non aliquam neque scelerisque in. In hac habitasse platea dictumst. Donec nunc dolor, rhoncus sit amet posuere at, lacinia eget arcu. Nulla adipiscing auctor pellentesque.</p>
        <p>Aenean viverra leo in augue pulvinar volutpat. Sed feugiat nisl nec eros vestibulum vitae vulputate ligula eleifend. Quisque rhoncus mattis ante at dictum. Aliquam non porttitor erat. Curabitur ornare dapibus urna vitae sollicitudin. Nullam dictum auctor neque <a href="#">sit amet tristique</a>. Phasellus quis urna tellus, eu vestibulum urna. Nulla ac purus nibh, quis iaculis libero. Ut sem orci, fermentum in tincidunt at, luctus et orci. Cras aliquam lobortis tortor quis dignissim. Vivamus egestas aliquet est, a pharetra tellus adipiscing sit amet. Nullam tincidunt malesuada nulla, at aliquet orci semper vel. Suspendisse dignissim, nibh vel tempor pharetra, sem sapien egestas lorem, et aliquet eros quam non felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
	</div>
    <div class="col col_13 no_margin_right">
    	<h3>Testimonios</h3>
        <div class="testimonial">
            <p>"Hubo un periodo de tiempo en el que me planteé hacer solo el proyecto."</p>
            <div class="cleaner"></div>
            <cite>Roberto Yebenes <a href="#"><span>- DAW, PETETE's Comany</span></a></cite></div>
        <div class="testimonial">
            <p>"Mi casa fue el Cuartel General."</p>
            <div class="cleaner"></div>
            <cite>Ismael Cirre<a href="#"><span> - DAW, PETETE's Comany</span></a></cite></div>
    </div>    
    <div class="cleaner h40"></div>

    <div class="cleaner"></div>
</div> <!-- END of main -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
	
		<div class="col col_14">
        	<h5>Informacion Interna</h5>
            <ul class="footer_list">
                <li><a href="about.html">Sobre nosotros...</a></li>
                <li><a href="contact.html">Contacto</a></li>
            	<li><a href="registro.html">Registro</a></li>
			</ul>   
        </div>
        <div class="col col_14">
        	<h5>Paginas</h5>
            <ul class="footer_list">
            	<li><a href="futbol.html">Futbol</a></li>
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