<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
</head>
<body>
    <?php
        // Nos conectamos a la tabla de PHP MyAdmin
        include_once('db.php');
        $conectar = conexion();
        // Iniciamos sesión
        session_start();

        // Recojemos todos los datos del formulario
        $referencia = $_POST['referencia'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $fecha = $_POST['fecha'];
        $matricula = $_POST['matricula'];

        $error = '';

        
        // Validamos la matrícula
        if(empty($referencia)) {// Si la referencia esta vacia se validará
            $sql = "SELECT * FROM vehiculo WHERE trim(upper(matricula)) = trim(upper('".$matricula."'))";
        } else {// Si ya existe un campo pero este no tiene la misma matrícula se comprobara que la referencia no se la misma
            $sql = "SELECT * FROM vehiculo WHERE referencia !=".$referencia." AND trim(upper(matricula)) = trim(upper('".$matricula."'))";
        }

        // Hacemos otra consulta de la matrícula
        $resultado = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($resultado);

        // Si el número de filas es mayor a cero significa que ha hay un campo insertado
        if($filas > 0) {
            $error .= 'La matrícula ya esta registrada';
        }

        // Comprobamos si que el precio se un número o que sea un valor positivo
        if(is_numeric($precio)){
            if($precio < 0) {
                $error .= 'El precio debe ser positivo';
            }
        } else {
            $error .= 'El precio debeser un número';
        }

        // Si la variable error esta vacia
        if(empty($error)) {
            if(empty($referencia)) { //Si la referéncia está vacia
                // Insertamos los datos directamente a la tabla
                $sql = "INSERT INTO vehiculo(referencia, tipo, precio, fecha, matricula)
                VALUES (null, '$tipo', '$precio', '$fecha', '$matricula')";
            } else { //Si la referéncia no esta vacia
                //Modfificamos los datos de la tabla 
                $sql = "update vehiculo set tipo ='".$tipo."', precio ='".$precio."', fecha ='".$fecha."', 
                matricula ='".$matricula."' where referencia =".$referencia;
            }

            // Comprobamos si la consulta funciona
            if(mysqli_query($conectar, $sql)) {// Si la consulta funciona nos muestra que los datos se han insertado
                $_SESSION['vehiculo_insertado'] = 'Se insertaron bien los datos';
            
                // Nos redireccionará a la tabla mostrar
                header('Location: mostrar.php');

                echo $_SESSION['tipo'];
            } else {// Si no funciona la consulta, nos mostrara que los datos no se han insertado correctamente
                $_SESSION['vehiculo_no_insertado'] = mysqli_error($conectar);
            
                // Nos redireccionará al formulario
                header('Location: formulario.php');
            }
        } else {// Si hay algún error, nos lo mostrará y nos redireccionará al formulario
            $_SESSION['vehiculo_no_insertado'] = $error;
            header('Location: formulario.php');
        }
    ?>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>Matrícula</th>
        </tr>

        <?php 
            while(mysqli_fetch_assoc($resultado)) {
                echo '<tr>';

                echo '<td>'.$fila['tipo'].'</td>';
                echo '<td>'.$fila['precio'].'</td>';
                echo '<td>'.$fila['fecha'].'</td>';
                echo '<td>'.$fila['matricula'].'</td>';

                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>