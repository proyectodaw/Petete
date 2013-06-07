<?php
ob_start();
session_start();

include 'Conectar.php';


$jornada = $_POST['jornada'];
$fechaP = $_POST['fechaP'];
$h_ini = $_POST['h_ini'];
$local = $_POST['local'];
$visitante = $_POST['visitante'];
$p_localT = $_POST['p_local'];
$p_empateT = $_POST['p_empate'];
$p_visitanteT = $_POST['p_visitante'];

$p_local = floatval($p_localT);
$p_empate = floatval($p_empateT);
$p_visitante = floatval($p_visitanteT);


$conexion = conectar();
$arrayP = array();

    $arrayP[0] = $jornada;
    $arrayP[1] = $fechaP;
    $arrayP[2] = $h_ini;
    $arrayP[3] = $local;
    $arrayP[4] = $visitante;
    $arrayP[5] = $p_local;
    $arrayP[6] = $p_empate;
    $arrayP[7] = $p_visitante;
    
annadirPartido($arrayP, $conexion);

function annadirPartido($arrayP, $conexion) {
        if ($conexion->query("insert into tabla_futbol values('$arrayP[0]','$arrayP[1]',
            '$arrayP[2]','$arrayP[3]','$arrayP[4]','$arrayP[5]','$arrayP[6]','$arrayP[7]',NULL)")) {
            return $arrayP;
        } else {
            return false;
        }
    }
header("location:futbol.php");
?>