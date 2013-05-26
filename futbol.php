<?php session_start(); ?>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">-->
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
                                <td headers='th_plo'><form action='pintaBoleto.js' method='post'><input type='submit' value='%s €' /></form></td>               
                                <td headers='th_pem'><form action='pintaBoleto.js' method='post'><input type='submit' value='%s €' /></form></td>
                                <td headers='th_pvi'><form action='pintaBoleto.js' method='post'><input type='submit' value='%s €' /></form></td>
                                <td headers='th_res'>%s</td>
                                </tr>", $fila["id_partidof"], $fila["fecha"], $fila["hora_ini"], $fila["local"],$fila["visitante"], $fila["precio_local"], $fila["precio_empate"], $fila["precio_visitante"], $fila["resultado"]);
                    /*    if (isset($_SESSION['datosUsuario']['usuario']))
                        {
                            <td>Modificar</td>
                            
                        }*/
                      
                    }
                }
                ?>  
		</table>
	
	<div id="administrador">
                <table id="partidos">
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
                            <form id="fPartidos" action="procesoPartidos.php" method="post">
                        <tr>
                           
                                <td><input type="text" name="jornada" id="jornada" placeholder="Jornada"/></td>
                                <td><input type="text" name="fechaP" id="fechaP" placeholder="Fecha"/></td>
                                <td><input type="text" name="h_ini" id="h_ini" placeholder="Hora inicio"/></td>
                                <td><input type="text" name="local" id="local" placeholder="Local"/></td>
                                <td><input type="text" name="visitante" id="visitante" placeholder="Visitante"/></td>
                                <td><input type="text" name="p_local" id="p_local" placeholder="Precio local"/></td>
                                <td><input type="text" name="p_empate" id="p_empate" placeholder="Precio empate"/></td>
                                <td><input type="text" name="p_visitante" id="p_visitante" placeholder="Precio visitante"/></td>
                        </tr>
                        <tr>
                                <td><input type="submit" id="annadir" value="Añadir" /></td>
                        </tr>
                       
                             </form>

		</table>
		<input type="button" id="annadir" value="Añadir" />
	</div>
	
	</section>
	
	<footer>
		&copy; Copyright de Raul Abril, Si la copias te revientooooo!!</br>
		<a href="https://twitter.com/"><img src="twitter.png"/> Siguenos en twitter</a></br>
		<a href="http://es-es.facebook.com/"><img src="facebook.png" /> Siguenos en facebook</a>
	</footer>
</body>
</html>