<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <title>PETETE Apuestas</title>
        <meta name="keywords" content="work center, theme, piecemaker 3D image slider, 960, free templates, CSS, HTML" />
        <meta name="description" content="Work Center Theme is a free CSS template by templatemo.com for everyone. Feel free to use it for any purpose." />
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="js/swfobject/swfobject.js"></script>
        

        <script type="text/javascript">
            var flashvars = {};
            flashvars.cssSource = "css/piecemaker.css";
            flashvars.xmlSource = "piecemaker.xml";
	
            var params = {};
            params.play = "true";
            params.menu = "false";
            params.scale = "showall";
            params.wmode = "transparent";
            params.allowfullscreen = "true";
            params.allowscriptaccess = "always";
            params.allownetworking = "all";
  
            swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '440', '10', null, flashvars,    
            params, null);

        </script>

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
            if (@$tipoUsuario=='activo') {
                unset($_SESSION['error']);
                printf("<p><img src='images/user.png' /> <a href='perfil.php'>" . $_SESSION['datosUsuario']['nombre'] . "</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("<img src='images/cerdo.png' />Saldo actual: " . $_SESSION['datosUsuario']['saldo'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
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
                        <li><a href="#">Baloncesto</a></li>
                        <li><a href="#">Tenis</a></li>
                        <li><a href="#">Galgos</a></li>
                        <li><a href="#">Bingo</a></li>
                    </ul>
                    <br style="clear: left" />
                </div> <!-- end of templatemo_menu -->
            </div> <!-- END of header -->
        </div>

        <div id="templatemo_middle_wrapper">
            <div id="templatemo_middle">
                <div id="piecemaker">
                    <p>This template is provided by <a href="http://www.templatemo.com">www.templatemo.com</a> and feel free to use it for your websites.</p>
                </div>
            </div>
        </div> <!-- END of slider -->

        <div id="templatemo_main_top"></div>
        <div id="templatemo_main">
            <div class="fp_box5">
                <img src="images/ball.png" alt="Image 01" width="48px" height="48px"/>
                <h2><a href="futbol.php">Futbol</a></h2>
                <p>Pon a prueba tus conocimientos sobre la Liga de Fútbol Profesional y gana dinero.</p>
            </div>
            <div class="fp_box5">
                <img src="images/baloncesto.png" alt="Image 02" width="48px" height="48px"/>
                <h2><a href="#">Baloncesto</a></h2>
                <p>Todo sobre la NBA, la mejor liga de Baloncesto del Mundo</p>
            </div>
            <div class="fp_box5">
                <img src="images/tenis.png" alt="Image 03" width="48px" height="48px"/>
                <h2><a href="#">Tenis</a></h2>
                <p>Si tu deporte es el Tenis, juegatela con nuestra gran variedad de apuestas.</p>
            </div>
            <div class="fp_box5">
                <img src="images/galgo.png" alt="Image 04" width="48px" height="48px"/>
                <h2><a href="#">Galgos</a></h2>
                <p>Si lo tuyo son las carreras de galgos, este es tu sitio.</p>
            </div>
            <div class="fp_box5 no_margin_right">
                <img src="images/bingo.png" alt="Image 05" width="48px" height="48px"/>
                <h2><a href="#">Bingo</a></h2>
                <p>Si te gusta el Bingo, este es tu sitio. ¡Entretenimiento y premios para todos!</p>
            </div>
            <div class="cleaner h50"></div>

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