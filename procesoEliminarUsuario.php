<?php
ob_start();
session_start();

include 'Conectar.php';
include 'Usuario.php';

$conexion=  conectar();

$nif=$_SESSION['datosUsuario']['nif'];
$fecha=date("Y-m-d H:i:s");

annadirBaja($nif, $fecha, $conexion);

function annadirBaja($nif, $fecha, $conexion){
    $insert="insert into historico_baja values('$nif','$fecha')";
    $resultado=$conexion->query($insert);
    if($resultado){
        $delete="delete from usuarios where nif='$nif'";
        $conexion->query($delete);
    }
       
}

header("location:cerrarSesion.php");
?>
