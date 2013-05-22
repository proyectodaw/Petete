<?php session_start();?>
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
            $cerrarSesion='javascript:location.href="cerrarSesion.php"';
            
            if (isset($_SESSION['datosUsuario']['usuario'])) {
                printf("<p>Hola " . $_SESSION['datosUsuario']['nombre'] . "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
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
        </header>
	<nav>
		<a href="indice.html"><img src="Imagenes/logo.png" id="logo" /></a>
		<ul class="mi-menu">
			<li><a href="futbol.html"> FUTBOL </a></li>
			<li><a href="URL_enlace_2"> BINGO </a></li>
			<li><a href="URL_enlace_3"> GALGOS </a></li>
		</ul>	
	</nav>
	
	<section>
	
                <h3>Mi Cuenta</h3>
                
                <form id="fDatos" action="" method="post" onsubmit="return validar(this);">
                <fieldset>
                    <legend>DATOS DE ACCESO</legend>
                    <table class="tablaForm">
                        <tr>
                            <td>Contraseña</td><td><input type="password" id="password" placeholder="Password"/></td>
                        </tr>
                        <tr>    
                            <td>Repite la Contraseña</td><td><input type="password" id="repite_password" placeholder="Repite Password"/></td>
                            
                        </tr>
                        <tr>
                            <td>Email</td><td><input type="text" id="email" placeholder="Email"/></td>
                        </tr>
                        <tr>
                            <td>Repite el Email</td><td><input type="text" id="repite_email" placeholder="Email"/></td>
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
                            <td>Provincia</td><td><input type="text" id="provincia" placeholder="Provincia"/></td>
                        </tr>
                        <tr>
                            <td>Poblacion</td><td><input type="text" id="poblacion" placeholder="Poblacion"/></td>
                        </tr>
                        <tr>
                            <td>Dirección</td><td><input type="text" id="direccion" placeholder="Direccion"/></td>
                        </tr>
                        <tr>
                            <td>Código Postal</td><td><input type="text" id="postal" placeholder="Codigo Postal"/></td>
                        </tr>
                        <tr>
                            <td>Telefono</td><td><input type="text" id="telefono" placeholder="Telefono"/></td>
                        </tr>
                    </table>
                </fieldset>
                
                <input type="submit" value="Enviar"/>
        </form>
            
	</section>
	

	<footer>
		&copy; Copyright de Raul Abril, Si la copias te revientooooo!!</br>
		<a href="https://twitter.com/"><img src="Imagenes/twitter.png"/> Siguenos en twitter</a></br>
		<a href="http://es-es.facebook.com/"><img src="Imagenes/facebook.png" /> Siguenos en facebook</a>
	</footer>
</body>
</html>