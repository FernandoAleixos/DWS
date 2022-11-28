<?php
    
    include_once('db.php');
    $nombre = $_POST['Nombre'];
    $apellidos = $_POST['Apellidos'];
    $dir = $_POST['Direccion'];
    $mote = $_POST['Mote'];
    $telf = $_POST['Telefono'];

    $conectar = conexion();

    $squl = "INSERT INTO Contactos(Nombre, Apellidos, Direccion, Mote, Telefono)
    VALUES ('$nombre', '$apellidos', '$dir', '$mote', '$telf')";
    $resultado = mysqli_query($conectar, $squl) or die("Fallo en la consulta");
    echo $squl;

?>