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

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $ciudad = $_POST['ciudad'];
        $total = $_POST['total'];


        $squl = "INSERT INTO Centro(Id, Nombre_Centro, Ciudad, Total_Aulas)
            VALUES (null, '$nombre', '$ciudad', '$total')";

        if(mysqli_query($conectar, $squl)) {
            $_SESSION['Insertado'] = 'El campo se ha insertado';
            header('Location: mostrar.php');
            
        } else {
            $_SESSION['No_insertado'] = mysqli_error($conectar);
            header('Location: formulario.php');    
        }

    ?>
</body>
</html>