<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();
    
    $nombre = $_POST['Nombre'];
    $fecha = $_POST['Fecha'];
    $cantante = $_POST['Cantante'];

    $insertar = "INSERT INTO Cancion VALUES (null, '$nombre', '$fecha', '$cantante')";

    if(mysqli_query($conectar, $insertar)) {
        $_SESSION['insertado'] = 'La canción se ha insertado';
        header('Location: mostrar.php');
    } else {
        $_SESSION['no_insertado'] = 'La canción no se ha insertado';
        header('Location: cancion.php');
    }
?>