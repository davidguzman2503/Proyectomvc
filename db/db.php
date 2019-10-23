<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "rCLbWgFn3D", "rCLbWgFn3D", "UYxEIzY2TO");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
