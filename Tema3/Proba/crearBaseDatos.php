<?php
    
    include_once('db.php');
    $nombre = $_POST['Nombre'];
    $apellidos = $_POST['Apellidos'];
    $telf = $_POST['Telefono'];
    $user = $_POST['User'];
    $pass = $_POST['Pass'];
    $dir = $_POST['Direccion'];

    $conectar = conexion();

    $squl = "INSERT INTO Alumno(Nombre, Apellidos, Telefono, Usuario, Password, Direccion)
    VALUES ('$nombre', '$apellidos', '$telf', '$user', '$pass', '$dir')";
    $resultado = mysqli_query($conectar, $squl) or die("Fallo en la consulta");
    echo $squl;

?>