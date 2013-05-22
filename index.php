<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>PETETE</title>
        <link rel=stylesheet href="CSS/estilos.css" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta name="viewport" content="width=devices-width"></meta>
    </head>
    <body>
        <header class="login">
            <?php
            include 'Conectar.php';
            $cerrarSesion = 'javascript:location.href="cerrarSesion.php"';
            @$datosSession=$_SESSION['datosUsuario']['usuario'];

            if (isset($datosSession)) {
                printf("<p>Hola " . $_SESSION['datosUsuario']['nombre'] . "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("Saldo actual: " . $_SESSION['datosUsuario']['saldo'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                printf("<input type = 'submit' id = 'cerrar' value = 'Cerrar sesion' onclick='" . $cerrarSesion . "' /></p>");
            } else {
                if(isset($_SESSION['error'])){
                    print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$_SESSION['error'];
                }
                print'<form id="login" name="login" method="POST" action="logear.php">
		<input type="text" id="usuario" name="usuario" placeholder="Usuario"/>
		<input type="password" id="password" name="password" placeholder="Password"/>
		<input type="submit" id="enviar" name="enviar" value="Entrar" />
                &nbsp;
                <a href="registro.php">Registrate</a>
		</form>';
                
            }
            ?>            
        </header>
        <nav>
            <a href="index.php"><img src="Imagenes/logo.png" id="logo" /></a>
            <ul class="mi-menu">
                <li><a href="futbol.html"> FUTBOL </a></li>
                <li><a href="URL_enlace_2"> BINGO </a></li>
                <li><a href="URL_enlace_3"> GALGOS </a></li>
            </ul>	
        </nav>

        <section>

            <div id="principal">
                <a href="registro.php"><img src="Imagenes/inicio.jpg" id="fondo" /></a>
            </div>
            <div id="menu2">
                <ul>
                    <li><a href="futbol.html"><img src="Imagenes/ball1.png" id="ball" /></a></li>
                    <li><a href="URL_enlace_2"><img src="Imagenes/bingo1.png" id="bingo" /></a></li>
                    <li><a href="URL_enlace_3"><img src="Imagenes/galgo1.png" id="galgo" /></a></li>
                </ul>
            </div>
        </section>


        <footer>
            &copy; Copyright de Raul Abril, Si la copias te revientooooo!!</br>
            <a href="https://twitter.com/"><img src="Imagenes/twitter.png"/> Siguenos en twitter</a></br>
            <a href="http://es-es.facebook.com/"><img src="Imagenes/facebook.png" /> Siguenos en facebook</a>
        </footer>
    </body>
</html>