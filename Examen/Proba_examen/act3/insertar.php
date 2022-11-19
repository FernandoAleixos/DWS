<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertar</title>
</head>
<body>
    <?php
        session_start();
        include_once('db.php');
        $conectar = conexion();

        $referencia = $_POST['Referencia'];
        $nombre = $_POST['Nombre'];
        $cantante = $_POST['Cantante'];
        $fecha = $_POST['Fecha'];
        $estilo = $_POST['Estilo'];

        $error = '';

        $result_nombre = mysqli_query($conectar, $validar_nombre);
        $result_cantante = mysqli_query($conectar, $validar_cantante);
        $filas1 = mysqli_num_rows($result_nombre);
        $filas2 = mysqli_num_rows($result_cantante);

        if($filas1 > 0) {
            $error .= 'El nombre ya existe';
        } else if ($filas2 > 0) {
            $error .= 'El cantante ya existe';
        }

        if(empty($referencia) {
            $validar_nombre = "SELECT * FROM Discos WHERE trim(upper(Nombre)) = trim(upper('".$nombre."'))";
            $validar_cantante = "SELECT * FROM Discos WHERE trim(upper(Cantante)) = trim(upper('".$cantante."')";
        }

        if(empty($error)){
            $squl = "INSERT INTO Discos(Referencia, Nombre, Cantante, Fecha, Estilo)
            VALUES (null, '$nombre', '$cantante', '$fecha', '$estilo')";

            if(mysqli_query($conectar, $squl)) {
                $_SESSION['insertado'] = 'El campo se ha insertado';
                header('Location: mostrar.php');

                echo $_SESSION['Nombre'];
            } else {
                $_SESSION['no_insertado'] = mysqli_error($conectar);
                header('Location: formulario.php');    
            }
        } else {
            $_SESSION['no_insertado'];
        }
    ?>
</body>
</html>