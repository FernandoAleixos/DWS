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
        $baseDatos = conexion();
        $consulta = 'SELECT * FROM academia';
        //La función mysqli_query lanza una consulta a la base de datos para conectarse
        $result = mysqli_query($baseDatos, $consulta);
        //Recoje la longitud de la fila de la tabla
        $filas = mysqli_num_rows($result);
        
        if($filas == 0) {
            echo 'No hay ningún registro';
        }
    ?>

    <table>
        <tr>
            <th>Profesor</th>
            <th>Idioma</th>
            <th>Nivel</th>
            <th>Horas</th>
            <th>Precio</td>
        </tr>
    
        <?php
            //La función mysqli_fetch_assoc muestra por pantalla los datos de la tabla
            while ($fila = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                
                echo '<td>'.$fila['Profesor'].'</td>';
                echo '<td>'.$fila['Idioma'].'</td>';
                echo '<td>'.$fila['Nivel'].'</td>';
                echo '<td>'.$fila['Horas semana'].'</td>';
                echo '<td>'.$fila['Precio'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>