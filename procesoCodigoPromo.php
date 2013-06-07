<?php
session_start();

include './Conectar.php';
include './Usuario.php';

$conexion = conectar();
$user=new Usuario();

$usuario=$_SESSION['datosUsuario']['usuario'];
$codigoPromo=$_POST['codigo'];
?>
