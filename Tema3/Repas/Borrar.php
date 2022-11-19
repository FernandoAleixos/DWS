<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();

    if(isset($_GET['idref'])) {
        $sql = "delete from Ropa where Ref = ".$_GET['idref'];
    } else if($_POST['select_ropa']) {
        $sql = "delete from Ropa where Ref in(".join(",",$_POST['select_ropa']).")";
    }

    if(isset($sql)) {
        if (mysqli_query($conectar, $sql)) {
            $_SESSION['prenda_borrada'] = 'Prenda borrada con exito';
            header("Location: Mostrar.php");
        } else {
            $_SESSION['prenda_no_borrada'] = 'Error al borrar '. mysqli_error($conectar);
            header("Location: Mostrar.php");
        }
    } else {
        $_SESSION['prenda_no_borrada'] = 'Debe de seleccionar un campo';
            header("Location: Mostrar.php");
    }

?>