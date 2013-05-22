<!DOCTYPE HTML>
<html>
    <head>
        <script type="text/javascript" src="js/validar.js"></script>
        <link rel=stylesheet href="CSS/estilos.css" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <style type="text/css">
            errorGeneral{
                color:red;
            }
        </style>
        <script type="text/javascript">
            function foco(){
                document.getElementById('usuario').focus();
            }
        </script>
    </head>
    <body onload="foco();">
	<nav>
		<a href="index.html"><img src="Imagenes/logo.png" id="logo" /></a>
		<ul class="mi-menu">
			<li><a href="futbol.html"> FUTBOL </a></li>
			<li><a href="URL_enlace_2"> BINGO </a></li>
			<li><a href="URL_enlace_3"> GALGOS </a></li>
		</ul>	
	</nav>
        <section>
        <form id="fRegistro" action="procesoRegistro.php" method="post" onsubmit="return validar();">
            <h3>Registro de Usuarios</h3>
            <div id="a">
                <fieldset>
                    <legend>DATOS DE ACCESO</legend>
                    <table class="tablaForm">
                        <tr>
                            <td>Usuario</td><td><input type="text" name="usuario" id="usuario" placeholder="Usuario"/></td>
                        </tr>
                        <tr>
                            <td>Contraseña</td><td><input type="password" name="password" id="password" placeholder="Password"/></td>
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
                            <td>Nacionalidad</td><td><input type="text" id="nacionalidad" placeholder="Nacionalidad"/></td>
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
                <span id="errorGeneral"></span><br /><br />
                <input type="submit" value="Enviar"/>
                
            </div>
        </form>
        </section>
        <footer>
		&copy; Copyright de Raul Abril, Si la copias te revientooooo!!<br/>
		<a href="https://twitter.com/"><img src="Imagenes/twitter.png"/> Siguenos en twitter</a><br/>
		<a href="http://es-es.facebook.com/"><img src="Imagenes/facebook.png" /> Siguenos en facebook</a>
	</footer>
    </body>
</html>