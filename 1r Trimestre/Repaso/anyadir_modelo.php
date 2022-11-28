<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();

    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $idtipo = $_POST['id_tipo'];

    $sql = "INSERT INTO modelo VALUES(null, '$marca', '$color', '$idtipo')";

    if(mysqli_query($conectar, $sql)) {
        $_SESSION['modelo_insertado'] = 'El modelo se ha insertado';
        header('Location: mostrar.php');
    } else {
        $_SESSION['modelo_no_insertado'] = 'El modelo no se ha insertado';
        header('Location: modelo.php');
    }
?>