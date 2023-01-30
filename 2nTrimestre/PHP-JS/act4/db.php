<?php
    function conexion() {
        $hostname = 'localhost';
        $usuario = 'root';
        $password = '';
        $dbname = 'PHP-JS';
    
        $conectar = mysqli_connect($hostname, $usuario, $password, $dbname);

        return $conectar;
    }
?>