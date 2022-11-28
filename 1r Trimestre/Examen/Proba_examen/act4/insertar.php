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
        $result_estilo = mysqli_query($conectar, $validar_estilo);

        $filas1 = mysqli_num_rows($result_nombre);
        $filas2 = mysqli_num_rows($result_cantante);
        $filas3 = mysqli_num_rows($result_estilo);

        if($filas1 > 0) {
            $error .= 'El nombre ya existe';
        }
        
        if ($filas2 > 0) {
            $error .= 'El cantante ya existe';
        }
        
        if ($filas3 > 0) {
            $error .= 'El estilo ya existe';
        }

        if(empty($referencia)) {
            $validar_nombre = "SELECT * FROM Discos WHERE trim(upper(Nombre)) = trim(upper('".$nombre."'))";
            $validar_cantante = "SELECT * FROM Discos WHERE trim(upper(Cantante)) = trim(upper('".$cantante."'))";
            $validar_estilo = "SELECT * FROM Discos WHERE trim(upper(Estilo)) = trim(upper('".$estilo."'))";
        } else {
            $validar_nombre = "SELECT * FROM Discos WHERE Referencia != '.$referencia.' AND trim(Nombre) = trim('".$nombre."')";
            $validar_cantante = "SELECT * FROM Discos WHERE Referencia != '.$referencia.' AND trim(Cantante) = trim('".$cantante."')";
            $validar_estilo = "SELECT * FROM Discos WHERE Referencia != '.$referencia.' AND trim(Estilo) = trim('".$estilo."')";
        }

        if(empty($error)){
            if(empty($referencia)){
                $squl = "INSERT INTO Discos (Referencia, Nombre, Cantante, Fecha, Estilo)
                    VALUES (null, '$nombre', '$cantante', '$fecha', '$estilo')";
            } else {
                $squl = "update Discos set Nombre ='".$nombre."', Cantante = '".$cantante."', Fecha = '".$fecha."', 
                    Estilo = ".$estilo;
            }

            if(mysqli_query($conectar, $squl)) {
                $_SESSION['insertado'] = 'El campo se ha insertado';
                header('Location: mostrar.php');
                
                echo $_SESSION['Nombre'];
            } else {
                $_SESSION['no_insertado'] = mysqli_error($conectar);
                header('Location: formulario.php');    
            }

        } else {
            $_SESSION['no_insertado'] = $error;
            header('Location: formulario.php');
        }
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Cantante</th>
            <th>Fecha</th>
            <th>Estilo</th>
        </tr>
    
        <?php
            //La función mysqli_fetch_assoc muestra por pantalla los datos de la tabla
            while ($fila = mysqli_fetch_assoc($result_nombre)) {
                echo '<tr>';
                
                echo '<td>'.$fila['Nombre'].'</td>';
                echo '<td>'.$fila['Cantante'].'</td>';
                echo '<td>'.$fila['Fecha'].'</td>';
                echo '<td>'.$fila['Estilo'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>