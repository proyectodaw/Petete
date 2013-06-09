<?php
session_start();

include './Conectar.php';
include './Usuario.php';

$conexion = conectar();
$user=new Usuario();

$usuario=$_SESSION['datosUsuario']['usuario'];
$codigoPromo=$_POST['codigo'];
$estadoCodigo=$_SESSION['datosUsuario']['estado_codigo'];

$array=$user->ingresarCodigoPromo($usuario, $codigoPromo, $estadoCodigo, $conexion);
if($array){
    $_SESSION['datosUsuario']['saldo']=$array[0];
    $_SESSION['datosUsuario']['estado_codigo']=$array[1];
}else{
    $_SESSION['error'] = "EL CÓDIGO ES ERRONEO O YA HA SIDO USADO";
}

header("location:perfil.php");
?>
