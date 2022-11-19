<?php
    function conexion() {
        $hostname = 'localhost';
        $usuario = 'root';
        $password = '';
        $dbname = 'Agenda';
    
        $conectar = mysqli_connect($hostname, $usuario, $password, $dbname);

        return $conectar;
    }
?>