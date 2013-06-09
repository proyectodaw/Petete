<?php
session_start();

include './Conectar.php';
include './Usuario.php';

$conexion = conectar();
$user=new Usuario();

$usuario=$_SESSION['datosUsuario']['usuario'];
$dinero=$_POST['dinero'];

$saldo=$user->ingresarDinero($usuario, $dinero, $conexion);
if($saldo){
    $_SESSION['datosUsuario']['saldo']=$saldo;
}else{
    $_SESSION['error'] = "ERROR AL INGRESAR DINERO";
}

header("location:perfil.php");


?>
