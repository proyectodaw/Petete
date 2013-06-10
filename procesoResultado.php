<?php
ob_start();
session_start();

include 'Conectar.php';

$conexion2 = conectar();

//*********************REALIZAR ACTUALIZACIONES DE LOS SALDOS DE LOS GANADORES*******************

$sql = "update usuarios set saldo = saldo +(select tasa*cantidad from apuestas where tipo = 
(select resultado from historico_futbol where historico_futbol.local=apuestas.local
and historico_futbol.visitante=apuestas.visitante))
where nif in (select id_usu from apuestas where tipo=(select resultado from historico_futbol
where historico_futbol.local=apuestas.local and historico_futbol.visitante=apuestas.visitante))";

$conexion2->query($sql);

//*********************ENVIAMOS EMAILS A LOS GANADORES********************

$sql2="select nif from usuarios where nif in 
(select id_usu from apuestas where tipo=(select resultado from historico_futbol where 
historico_futbol.local=apuestas.local and historico_futbol.visitante=apuestas.visitante))";

$resultado=$conexion2->query($sql2);
if($resultado){
    while($ganadores=$resultado->fetch_assoc()){
        
    }
}

$r_jornada = $_POST['r_jor'];
$r_fechaP = $_POST['r_fec'];
$r_h_ini = $_POST['r_hin'];
$r_local = $_POST['r_loc'];
$r_visitante = $_POST['r_vis'];
$r_p_localT = $_POST['r_plo'];
$r_p_empateT = $_POST['r_pem'];
$r_p_visitanteT = $_POST['r_pvi'];
$r_resultado = $_POST['r_res'];


$r_p_local = floatval($r_p_localT);
$r_p_empate = floatval($r_p_empateT);
$r_p_visitante = floatval($r_p_visitanteT);



$arrayR = array();

    $arrayR[0] = $r_jornada;
    $arrayR[1] = $r_fechaP;
    $arrayR[2] = $r_h_ini;
    $arrayR[3] = $r_local;
    $arrayR[4] = $r_visitante;
    $arrayR[5] = $r_p_local;
    $arrayR[6] = $r_p_empate;
    $arrayR[7] = $r_p_visitante;
    $arrayR[8] = $r_resultado;
    
annadirResultado($arrayR, $conexion2);

function annadirResultado($arrayR, $conexion2) {
        if ($conexion2->query("insert into historico_futbol values('$arrayR[0]','$arrayR[1]',
            '$arrayR[2]','$arrayR[3]','$arrayR[4]','$arrayR[5]','$arrayR[6]','$arrayR[7]','$arrayR[8]')")) {
            $conexion2->query("delete from tabla_futbol where id_partidof='$arrayR[0]' and fecha='$arrayR[1]' and local='$arrayR[3]' and visitante='$arrayR[4]'");
            return $arrayR;
        } else {
            return false;
        }
    }
header("location:futbol.php");
?>