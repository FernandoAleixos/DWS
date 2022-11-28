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


        $squl = "INSERT INTO Discos(Referencia, Nombre, Cantante, Fecha, Estilo)
            VALUES (null, '$nombre', '$cantante', '$fecha', '$estilo')";

        if(mysqli_query($conectar, $squl)) {
            $_SESSION['Insertado'] = 'El campo se ha insertado';
            header('Location: mostrar.php');

            echo $_SESSION['Nombre'];
        } else {
            $_SESSION['No_insertado'] = mysqli_error($conectar);
            header('Location: formulario.php');    
        }

    ?>
</body>
</html>