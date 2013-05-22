<?php
function conectar() {
    if ($_SERVER["SERVER_NAME"] == "localhost") {
        $conn = new mysqli("localhost", "root", "", "apuestas");
        if ($conn->connect_error) {
            die('Error de conexión ' . $conn->connect_errno . ' : ' . $conn->connect_error);
        } else {
            return $conn;
        }
    } else {
        $conn = new mysqli("mysql6.000webhost.com", "a6943303_petete", "petete123", "a6943303_petete");
        if ($conn->connect_error) {
            die('Error de conexión ' . $conn->connect_errno . ' : ' . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
?>
