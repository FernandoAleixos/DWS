<?php
    include_once('db.php');

    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $cpostal = $_POST['cpostal'];

    $conectar = conexion();

    if (isset($pais) && isset($ciudad) && isset($cpostal)) {
        $sql = "SELECT * FROM Localidad WHERE Pais = '$pais' AND Ciudad = '$ciudad' AND Codigo_Postal = '$cpostal'";

        $resultado = mysqli_query($conectar, $sql);
        
        if (mysqli_num_rows($resultado) > 0) {
            echo json_encode('correcto');
        } else {
            echo json_encode('error');
        }
    }
?>