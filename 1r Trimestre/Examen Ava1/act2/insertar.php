<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
</head>
<body>
<?php  
        include_once('db.php');
        session_start();
        $conectar = conexion();

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $horas = $_POST['horas'];

        $error = '';

        $sql = "SELECT * FROM Asignaturas where trim(upper(Nombre_Asig)) = trim(upper('".$nombre."'))";
        
        $resultado = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($resultado);

        if ($filas > 0) {
            $error .= 'La asignatura ya existe';
        }

        if(is_numeric($horas)) {
            $total = 96 - (40 / 100);

            if($horas > $total) {
                $error .= 'Supera las horas teoricas';
            }
        } else {
            $error .= 'Las horas deben ser un número';
        }

        
        if(empty($error)) {
            $squl = "INSERT INTO Asignaturas(Cod_Asig, Nombre_Asig, Horas_Impartidas)
                    VALUES (null, '$nombre', '$horas')";
            
            if(mysqli_query($conectar, $squl)) {
                $_SESSION['nombre_insertado'] = 'El nombre se ha insertado';
                header('Location: mostrar.php');

                echo $_SESSION['Nombre'];
            } else {
                $_SESSION['nombre_no_insertado'] = mysqli_error($conectar);
                header('Location: actividad2.php');
            }
        } else { 
            $_SESSION['nombre_no_insertado'] = $error;
            header('Location: actividad2.php');
        }
        
    ?>
    <table>
        <tr>
            <th>Nombre Asignatura</th>
            <th>Horas Impartidas</th>
        </tr>
    
        <?php
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                
                echo '<td>'.$fila['Nombre_Asig'].'</td>';
                echo '<td>'.$fila['Horas_Impartidas'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>