<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    include_once('db.php');
    session_start(); //Inicia una sesión para almacenar y acceder a los valores
    $nombre = $_POST['Nombre'];
    $fechaInicio = $_POST['FechaInicio'];
    $fechaFinal = $_POST['FechaFinal'];
    $horario = $_POST['Horario'];
    $precio = $_POST['Precio'];

    $conectar = conexion();

    //Creamos una variable que vaya recogiendo los errores que ocurran en la comprobación de los datos
    $error = '';

    //Comprobamos si el nombre ya existe en la tabla
    $sql = "SELECT * FROM academia where trim(upper(Nombre)) = trim(upper('".$nombre."'))";

    $consulta = mysqli_query($conectar, $sql);

    $filas = mysqli_num_rows($consulta);

    if($filas > 0) {
        $error .= 'El nombre ya existe';
    }

    if(is_numeric($precio)) {
        if($precio < 0) {
            $error .= 'El precio debe ser positivo';
        }
    } else {
        $error .= 'El precio debe ser un número';
    }

    if(empty($error)) { 
        //Insertar los valores dentro de la tabla mediante el formulario
        $squl = "INSERT INTO academia(Nombre, FechaInicio, FechaFinal, Horario, Precio)
        VALUES ('$nombre', '$fechaInicio', '$fechaFinal', '$horario', '$precio')";

        if(mysqli_query($conectar, $squl)) {
            $_SESSION['nombreInsertado'] = 'El nombre se ha insertado';
            header('Location: Mostrar.php');

            echo $_SESSION['Nombre'];
        } else {
            $_SESSION['nombreNoInsertado'] = mysqli_error($conectar);
            header('Location: Formulario.php');    
        }
    } else {
        $_SESSION['nombreNoInsertado'] .= $error;
        header('Location: Formulario.php');
    }
    
?>
</body>
</html>