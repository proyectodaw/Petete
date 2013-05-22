<?php
session_start();

include 'Conectar.php';
include 'Usuario.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$conexion = conectar();
$user = new Usuario();
$datosUsuario = $user->validarUsuario($usuario, $password, $conexion);
if ($datosUsuario) {
    $_SESSION['datosUsuario'] = $datosUsuario;
    
} else {
    
    $_SESSION['error'] = "ERROR";
}
header("location:index.php");
?>
