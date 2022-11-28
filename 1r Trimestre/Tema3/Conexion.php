<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        $hostname = "localhost";
        $usuario = "root";
        $pass = "";
        $dbname = "Tienda";

        $conexion = new PDO("mysql:host=" . $hostname . ";dbname=" . $dbname, $usuario, $pass, $opciones);


    ?>
</body>
</html>