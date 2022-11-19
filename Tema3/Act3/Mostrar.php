<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        //unset elimina las variable 
        //isset si la variable se ha definido o no
        if(isset($_SESSION['nombreInsertado'])) {
            echo '<p>'.$_SESSION['nombreInsertado'].'</p>';
        }

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

    <button><a href="Formulario.php">Añadir curso</a></button>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha inicio</th>
            <th>Fecha final</th>
            <th>Horario</th>
            <th>Precio</td>
        </tr>
    
        <?php
            //La función mysqli_fetch_assoc muestra por pantalla los datos de la tabla
            while ($fila = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                
                echo '<td>'.$fila['Nombre'].'</td>';
                echo '<td>'.$fila['FechaInicio'].'</td>';
                echo '<td>'.$fila['FechaFinal'].'</td>';
                echo '<td>'.$fila['Horario'].'</td>';
                echo '<td>'.$fila['Precio'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>