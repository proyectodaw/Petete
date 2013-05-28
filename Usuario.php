<?php
class Usuario {
    
    public function annadirUsuario($array, $conexion) {
        if ($resultado = $conexion->query("insert into usuarios values('$array[0]','$array[1]',
                '$array[2]','$array[3]','$array[4]','$array[5]','$array[6]','$array[7]','$array[8]',
                    '$array[9]','$array[10]','$array[11]','$array[12]','$array[13]','$array[14]'
                        ,'$array[15]','$array[16]','$array[17]','$array[18]','$array[19]')")) {
            return $array;
        } else {
            return false;
        }
    }
    
    public function borrarUsuario($usuario, $conexion) {
        if ($this->comprobarCliente($usuario, $conexion)) {
            if ($resultado = $conexion->query("delete from usuarios where usuario='$usuario'")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function modificarUsuario($usuario, $campo, $valor, $conexion) {
        if ($this->comprobarCliente($usuario, $conexion)) {
            if ($resultado = $conexion->query("update usuarios set $campo='$valor' where usuario='$usuario'")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function validarUsuario($usuario, $password, $conexion) {
        $consulta = "select * from usuarios where usuario='$usuario' and password='$password'";
        $resultado = $conexion->query($consulta);
        $datosUsuario = $resultado->fetch_assoc();

        if ($datosUsuario) {
            return $datosUsuario;
        } else {
            return false;
        }
    }
    
    public function validarCodigoActivacion($codigoActivacion, $conexion){
        $consulta = "select * from usuarios where codigo_activacion='$codigoActivacion'";
        $resultado = $conexion->query($consulta);
        $datosUsuario = $resultado->fetch_assoc();
        
        if ($datosUsuario){
            return $datosUsuario;
        }else{
            return false;
        }
    }
    
    public function existeUsuario($usuario, $email, $nif, $conexion) {
        $existe=true;
        $resultado = $conexion->query("select * from usuarios where usuario='$usuario'");
        $existeUsuario=$resultado->fetch_assoc();
        if(!$existeUsuario){
            $resultado = $conexion->query("select * from usuarios where email='$email'");
            $existeEmail=$resultado->fetch_assoc();
            if(!$existeEmail){
                $resultado = $conexion->query("select * from usuarios where nif='$nif'");
                $existeNif=$resultado->fetch_assoc();
                if(!$existeNif){
                    $existe=false;
                }
            }
        }
        return $existe;
    }
}
?>
