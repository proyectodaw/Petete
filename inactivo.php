<?php
$segundos = 60;
if (($_SESSION['tiempo'] + $segundos) < time()) {
    echo'<script type="text/javascript">alert("Su sesion ha expirado por inactividad';
    echo', vuelva a logearse para continuar");window.location.href="index.php";</script>';
} else {
    $_SESSION['tiempo'] = time();
}
?>