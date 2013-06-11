<?php session_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
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
		<li><a href="galgo.php">Galgos</a></li>
                <li><a href="bingo.php">Bingo</a></li>
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
        <p>TARGET es un atributo implementado por exigencias relacionadas con la gestión de los marcos. En una página dividida en marcos, este atributo indica en cuáles de ellos debe quedar visualizado el documento. No entraremos aquí en detalles sobre los marcos ya que comentaremos este tema más adelante.

Sin embargo, sí nos ocuparemos aquí de otro uso de este atributo: gracias a TARGET podemos cargar una página asociada a HREF en otra ventana del navegador usando la siguiente sintaxis.</p>
        <p>El empleo de distintas ventanas para cada enlace es muy útil cuando se manda a recursos externos ya que nos permite no perder al visitante: el usuario de este modo tendrá abiertas dos ventanas y no dejará de tener disponible nuestra página.Hasta ahora hemos analizado los enlaces con recursos externos o con páginas diversas de un mismo sitio. Sin embargo, podemos asimismo crear enlaces con puntos específicos de un mismo documento gracias al código A NAME="ancora". En otras palabras, si con los enlaces examinados hasta ahora llegamos a un documento, con A NAME llegamos a una parte concreta del documento.</p>
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
        <div class="testimonial">
            <p>"Soy una puta maquina. Sin mi seria todo diferente."</p>
            <div class="cleaner"></div>
            <cite>Raul Abril<a href="#"><span> - DAW, PETETE's Comany</span></a></cite></div>
    </div>    
    <div class="cleaner h40"></div>

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
                <li><a href="baloncesto.php">Baloncesto</a></li>
                <li><a href="tenis.php">Tenis</a></li>
                <li><a href="galgos.php">Galgos</a></li>
                <li><a href="bingo.php">Bingo</a></li>
			</ul>
        </div>
        <div class="col col_14">
        	<h5>Siguenos en</h5>	
            <ul class="footer_list">
                <li><a href="www.facebook.com" class="social facebook">Facebook</a></li>
                <li><a href="www.twitter.com" class="social twitter">Twitter</a></li>
                <li><a href="www.marca.com" class="social feed">Feed</a></li>
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