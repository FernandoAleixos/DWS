<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();

    if(isset($_GET['idref'])) {
        $sql = "delete from Discos where Referencia = ".$_GET['idref'];
    } else if($_POST['select_disco']) {
        $sql = "delete from Discos where Referencia in(".join(",",$_POST['select_disco']).")";
    }

    if(isset($sql)) {
        if (mysqli_query($conectar, $sql)) {
            $_SESSION['disco_borrado'] = 'Disco borrada con exito';
            header("Location: mostrar.php");
        } else {
            $_SESSION['disco_no_borrado'] = 'Error al borrar '. mysqli_error($conectar);
            header("Location: mostrar.php");
        }
    } else {
        $_SESSION['disco_no_borrado'] = 'Debe de seleccionar un campo';
            header("Location: mostrar.php");
    }
?>