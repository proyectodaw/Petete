<?php
ob_start();
session_start();

include 'Conectar.php';

$jornada = $_POST['jor'];
$fecha = $_POST['fec'];
$local = $_POST['loc'];
$visitante = $_POST['vis'];
$tasa = $_POST['pre'];
$tipo = $_POST['tipo'];

$arrayApuesta = array();

    $arrayApuesta[0] = $jornada;
    $arrayApuesta[1] = $fecha;
    $arrayApuesta[2] = $local;
    $arrayApuesta[3] = $visitante;
    $arrayApuesta[4] = $tasa;
    $arrayApuesta[5] = $tipo;
  
    
header("location:futbol.php");
?>
