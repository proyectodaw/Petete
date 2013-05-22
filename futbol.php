<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<LINK href="CSS/estilos.css" rel="stylesheet" type="text/css">
	<script src="jquery-1.7.2.js"></script>
	<script language="javascript">
      $(document).ready(function(){
         $("#annadir").click(function(e){
            var nuevoElemento = $('<tr><td><input type="text" id="fecha" value="" /></td><td><input type="text" id="hora_ini" value="" /></td><td><input type="text" id="hora_fin" value="" /></td><td><input type="text" id="local" value="" /></td><td><input type="text" id="visitante" value="" /></td><td><input type="text" id="precio_local" value="" /></td><td><input type="text" id="precio_empate" value="" /></td><td><input type="text" id="precio_visitante" value="" /></td></td><td><input type="button" id="enviarPartidos" value="Enviar" onClick=""/></td></tr>');
            nuevoElemento.appendTo('#partidos');
         });

      })
   </script>
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
		<a href="index.php"><img src="Imagenes/logo.png" id="logo" /></a>
		<ul class="mi-menu">
			<li><a href="futbol.php"> FUTBOL </a></li>
			<li><a href="URL_enlace_2"> BINGO </a></li>
			<li><a href="URL_enlace_3"> GALGOS </a></li>
		</ul>	
	</nav>
	
	<section id="futbol">
		<h3>Proximos Partidos</h3>
		<table id="partidos">
			<tr>
				<th>Fecha</th>
				<th>Hora Inicio</th>
				<th>Hora Fin</th>
				<th>Local</th>
				<th>Visitante</th>
				<th>1</th>
				<th>X</th>
				<th>2</th>
				<th></th>
			<tr>
		</table>
	
	<div id="administrador">
		<input type="button" id="annadir" value="A�adir" />
	</div>
	
	</section>
	
	<footer>
		&copy; Copyright de Raul Abril, Si la copias te revientooooo!!</br>
		<a href="https://twitter.com/"><img src="twitter.png"/> Siguenos en twitter</a></br>
		<a href="http://es-es.facebook.com/"><img src="facebook.png" /> Siguenos en facebook</a>
	</footer>
</body>
</html>