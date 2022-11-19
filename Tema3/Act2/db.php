<?php
    function conexion() {
        $hostname = 'localhost';
        $usuario = 'root';
        $password = '';
        $dbname = 'Academia';
    
        $conectar = mysqli_connect($hostname, $usuario, $password, $dbname);

        return $conectar;
    }
?>