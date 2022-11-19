<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();
    
    $tipo = $_POST['Tipo'];
    $fecha = $_POST['Fecha_compra'];
    $marca2 = $_POST['id_Marca'];

    $insertar = "INSERT INTO Prenda VALUES (null, '$tipo', '$fecha', '$marca2')";

    if(mysqli_query($conectar, $insertar)) {
        $_SESSION['prenda_insertada'] = 'La prenda se ha insertado';
        header('Location: Mostrar.php');
    } else {
        $_SESSION['prenda_no_insertada'] = 'La prenda no se ha insertado correctamente';
        header('Location: Prenda.php');
    }
?>