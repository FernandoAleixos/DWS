<?php
    session_start();

    include_once('db.php');
    $conectar = conexion();

    if(isset($_GET['idvehiculo'])) {
        $sql = "DELETE FROM vehiculo WHERE referencia = ".$_GET['idvehiculo'];
    } else if($_POST['select_vehic']) {
        $sql = "DELETE FROM vehiculo WHERE referencia in(".join(",",$_POST['select_vehic']).")";
    }

    if(isset($sql)) {
        if(mysqli_query($conectar, $sql)) {
            $_SESSION['vehiculo_borrado'] = 'Vehículo borrado';
            header("Location: mostrar.php");
        } else {
            $_SESSION['vehiculo_no_borrado'] = 'Error al borrar '. mysqli_error($conectar);
            header("Location: mostrar.php");
        }
    } else {
        $_SESSION['vehiculo_no_borrado'] = 'Debes seleccionar un campo';
        header("Location: mostrar.php");
    }
?>