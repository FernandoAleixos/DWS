<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();
    
    $codigo = $_POST['codigo'];
    $numero = $_POST['numero'];
    $metros = $_POST['metros'];
    $id_centro = $_POST['id_centro'];

    $insertar = "INSERT INTO Aula VALUES (null, '$numero', '$metros', '$id_centro')";

    if(mysqli_query($conectar, $insertar)) {
        $_SESSION['aula_insertada'] = 'La aula se ha insertado';
        header('Location: mostrar.php');
    } else {
        $_SESSION['aula_no_insertada'] = 'La aula no se ha insertado correctamente';
        header('Location: aula.php');
    }
?>