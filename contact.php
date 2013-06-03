<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETETE Apuestas</title>
<meta name="keywords" content="work center, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Work Center Theme is a free CSS template provided by templatemo.com" />
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
                <li><a href="futbol.php">Futbol</a></li>
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
	<h2>Información</h2>
    <div class="col_12 float_l">
    	<h4>Dirección</h4>
        <h6><strong>PETETE</strong></h6>
          		Calle de Móstoles, 64<br />
                28942 Fuenlabrada, Madrid<br /><br />
				
		<strong>Teléfono:</strong> 91-697-15-12<br />
        <strong>Email:</strong> <a href="mailto:petete@company.com">petete@company.com</a>  <br />
        
        <div class="cleaner h40"></div>  
        <h4>Localización</h4>
	  	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Instituto+de+Educaci%C3%B3n+Secundaria+Ies+Gaspar+Melchor+de+Jovellanos,+Calle+de+M%C3%B3stoles,+Fuenlabrada&amp;aq=0&amp;oq=ies+gaspar&amp;sll=40.525282,-3.81603&amp;sspn=3.669889,8.453979&amp;ie=UTF8&amp;hq=Instituto+de+Educaci%C3%B3n+Secundaria+Ies+Gaspar+Melchor+de+Jovellanos,&amp;hnear=Calle+de+M%C3%B3stoles,+Fuenlabrada,+Madrid&amp;ll=40.295416,-3.812652&amp;spn=0.009138,0.016207&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Instituto+de+Educaci%C3%B3n+Secundaria+Ies+Gaspar+Melchor+de+Jovellanos,+Calle+de+M%C3%B3stoles,+Fuenlabrada&amp;aq=0&amp;oq=ies+gaspar&amp;sll=40.525282,-3.81603&amp;sspn=3.669889,8.453979&amp;ie=UTF8&amp;hq=Instituto+de+Educaci%C3%B3n+Secundaria+Ies+Gaspar+Melchor+de+Jovellanos,&amp;hnear=Calle+de+M%C3%B3stoles,+Fuenlabrada,+Madrid&amp;ll=40.295416,-3.812652&amp;spn=0.009138,0.016207&amp;t=m" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
        
	</div>
    <div class="col_12 float_r">
    	<h4>Pongase en contacto con nosotros.</h4>
        <div id="contact_form">
           <form method="post" name="contact" action="#">
                        
                        <label for="author">Nombre:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">Asunto:</label> <input type="text" name="subject" id="subject" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="text">Mensaje:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Enviar" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
            </form>
        </div>
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