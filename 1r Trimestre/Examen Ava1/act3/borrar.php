<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();

    if(isset($_GET['idasig'])) {
        $sql = "delete from Asignaturas where Cod_Asig = ".$_GET['idasig'];
    }

    if(isset($sql)) {
        if (mysqli_query($conectar, $sql)) {
            $_SESSION['borrado'] = 'Campo borrada con exito';
            header("Location: actividad3.php");
        } else {
            $_SESSION['no_borrado'] = 'Error al borrar '. mysqli_error($conectar);
            header("Location: actividad3.php");
        }
    } else {
        $_SESSION['no_borrado'] = 'No se ha podido borrar';
            header("Location: actividad3.php");
    }

?>