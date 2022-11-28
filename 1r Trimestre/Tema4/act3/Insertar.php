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
        include_once("db.php");
        session_start();
        $conectar = conexion();

        $ref = $_POST['Ref'];
        $marca = $_POST['Marca'];
        $color = $_POST['Color'];
        $talla = $_POST['Talla'];
        $preu = $_POST['Preu'];

        $error = '';
        
        //Validaremos el Id comparandolo con el de la tabla
        if(empty($ref)) {
            $validar_id = "SELECT * FROM Ropa WHERE trim(Marca) = trim('".$marca."')";
        } else {
            $validar_id = "SELECT * FROM Ropa WHERE Ref != '.$ref.' AND trim(Marca) = trim('".$marca."')";
        }

        $result = mysqli_query($conectar, $validar_id);
        $filas = mysqli_num_rows($result);
        
        if($filas > 0) { //Si el número de filas es mayor que 0 significa que ya hay un campo con el mismo Id
            $error .= 'La prenda ya existe';
        }

        if(is_numeric($talla)) { //Si la talla es un número saltará un error
            $error .= 'La talla debe ser una letra (S, M, L)';
        } else { //Si la talla no es un número comprobará si es alguna de las tallas
            if($talla != 'S' && $talla != 'M' && $talla != 'L') {
                $error .= 'La talla debe ser una letra válida (S, M, L)';
            }
        }


        if(is_numeric($preu)) { //Si el precio es un número comprobara si es positivo
            if($precio < 0) {
                $error .= 'El precio debe ser positivo';
            }
        } else { //Si no es un número saltará el error
            $error .= 'El precio debe ser un número';
        }

        
        if(empty($error)) { //Si no hay ningún error insertara en la tabla todos los parámetros del formulario
            if(empty($ref)) {
                $squl = "INSERT INTO Ropa(Ref, Marca, Color, Talla, Preu)
                    VALUES (null, '$marca', '$color', '$talla', '$preu')";
            } else {
                $squl = "update Ropa set Marca ='".$marca."', Color = '".$color."', Talla = '".$talla."', 
                    Preu = ".$preu;
            }
            
            
            //Lanza una consulta a la base de datos para comprobar si se puede conectar y hacer el INSERT
            if(mysqli_query($conectar, $squl)) {
                //Si se cumple te muestra desde el fichero Muestra los datos introducidos a la tabla
                $_SESSION['nombre_insertado'] = 'El nombre se ha insertado';
                header('Location: Mostrar.php');

                echo $_SESSION['Nombre'];
            } else { //Si no se cumple este te envia de vuelta al formulario con un mensaje
                $_SESSION['nombre_no_insertado'] = mysqli_error($conectar);
                header('Location: Formulario.php');
            }
        } else { //Si hay algún error mostrara el error y nos devolvera al formulario
            $_SESSION['nombre_no_insertado'] = $error;
            header('Location: Formulario.php');
        }
        
    ?>
    <table>
        <tr>
            <th>Marca</th>
            <th>Color</th>
            <th>Talla</th>
            <th>Preu</th>
        </tr>
    
        <?php
            //La función mysqli_fetch_assoc muestra por pantalla los datos de la tabla
            while ($fila = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                
                echo '<td>'.$fila['Marca'].'</td>';
                echo '<td>'.$fila['Color'].'</td>';
                echo '<td>'.$fila['Talla'].'</td>';
                echo '<td>'.$fila['Preu'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>