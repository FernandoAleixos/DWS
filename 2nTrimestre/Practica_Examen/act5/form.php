<?php
    include_once('db.php');

    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $pass = $_POST['pass'];

    $conectar = conexion();

    if (isset($nombre) && isset($dni) && isset($pass)) {
        $sql = "SELECT * FROM PracExamen WHERE nombre = '$nombre' AND dni = '$dni' AND contraseña = '$pass'";

        $resultado = mysqli_query($conectar, $sql);
        
        if (mysqli_num_rows($resultado) > 0) {
            echo json_encode('correcto');
        } else {
            echo json_encode('error');
        }
    }
?>