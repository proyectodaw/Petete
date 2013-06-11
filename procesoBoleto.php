<?php

ob_start();
session_start();

include './Conectar.php';
include './Usuario.php';

$user = new Usuario();
$conexion = conectar();
$usuario = $_SESSION['datosUsuario']['usuario'];

$consulta = "select saldo from usuarios where usuario='$usuario'";
$resultado = $conexion->query($consulta);
$saldoUsuario = $resultado->fetch_assoc();


$jornada = $_POST['jor'];
$fecha = $_POST['fec'];
$local = $_POST['loc'];
$visitante = $_POST['vis'];
$tasa = $_POST['tas'];
$tipo = $_POST['tip'];
$cantidad = $_POST['cantidad'];

$p_cantidad = floatval($cantidad);
$saldo = floatval($saldoUsuario['saldo']);

if ($saldo >= $p_cantidad) {

    $saldoActual = $user->gastarDinero($usuario, $p_cantidad, $conexion);

    if ($saldoActual) {
        $_SESSION['datosUsuario']['saldo'] = $saldoActual;
    }

    $arrayBoleto = array();

    $arrayBoleto[0] = $jornada;
    $arrayBoleto[1] = $fecha;
    $arrayBoleto[2] = $local;
    $arrayBoleto[3] = $visitante;
    $arrayBoleto[4] = $tasa;
    $arrayBoleto[5] = $tipo;
    $arrayBoleto[6] = $p_cantidad;

    annadirApuesta($arrayBoleto, $conexion);
} else {
    
}
Header("location:futbol.php");

//************************************************FUNCIONES************************************************


function annadirApuesta($arrayBoleto, $conexion) {
    $nif = $_SESSION['datosUsuario']['nif'];
    if ($conexion->query("insert into apuestas values('$nif','$arrayBoleto[0]','$arrayBoleto[1]',
            '$arrayBoleto[2]','$arrayBoleto[3]','$arrayBoleto[4]','$arrayBoleto[6]','$arrayBoleto[5]')")) {
        return $arrayBoleto;
    } else {
        return false;
    }
}

?>