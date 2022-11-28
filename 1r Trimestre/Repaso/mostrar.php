<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Mostrar datos</title>
</head>
<body>
    <?php
        // Iniciamos sesión
        session_start();
        include_once('db.php');
        $conectar = conexion();
        // Si se insertan los datos en la tabla nos dirá que se ha insertado.
        // IMPORTANTE!! Solo nos mostrará este mensaje si esta declarado en ambos docuemntos
        if(isset($_SESSION['vehiculo_insertado'])) {
            echo '<p>' . $_SESSION['vehiculo_insertado'] . '</p>';
            unset($_SESSION['vehiculo_insertado']);
        }

        if(isset($_SESSION['vehiculo_borrado'])) {
            echo '<p>'.$_SESSION['vehiculo_borrado'].'</p>';
            unset($_SESSION['vehiculo_borrado']);
        }

        if(isset($_SESSION['vehiculo_no_borrado'])) {
            echo '<p>'.$_SESSION['vehiculo_no_borrado'].'</p>';
            unset($_SESSION['vehiculo_no_borrado']);
        }
        
        if(isset($_SESSION['modelo_insertado'])) {
            echo '<p>'.$_SESSION['modelo_insertado'].'</p>';
            unset($_SESSION['modelo_insertado']);
        }
        //Primero se incluye el archivo que se utiliza para conectarse a la base de datos
        

        //Hacemos una consulta que enviaremos a la base de datos
        $sql = 'SELECT * FROM vehiculo';
        //Enviamos la consulta con este comando pasando por parámetros la conexion y la consulta
        $resultado = mysqli_query($conectar, $sql);

        //Recogemos la cantidad de filas que hay en al tabla
        $filas = mysqli_num_rows($resultado);

        if($filas == 0) { //Si no hay ningún dato en el tabla meestra el mensaje
            echo 'No hay ningun campo en la tabla';
        }
    ?>

    <button><a href="formulario.php">Añadir vehículo</a></button>
    <button><a href="modelo.php">Añadir modelo</a></button>
    <!-- Creamos un formulario para mostrar los datos de la tabla en PHP MyAdmin -->
    <form action="borrar.php" method="post">
        <table>
            <tr>
                <th></th>
                <th>Referencia</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Matrícula</th>
            </tr>

            <?php
                //Creamos un bucle que va recorriendo fila por fila de la tabla 
                while($fila = mysqli_fetch_assoc($resultado)) {
                    //Luego mostramos los datos de cada campo de la tabla
                    echo '<tr>';

                    echo "<td><input type='checkbox' name='select_vehic[]' value='".$fila['referencia']."'/></td>";
                    echo '<td>' . $fila['referencia'] . '</td>';
                    echo '<td>' . $fila['tipo'] . '</td>';
                    echo '<td>' . $fila['precio'] . '</td>';
                    echo '<td>' . $fila['fecha'] . '</td>';
                    echo '<td>' . $fila['matricula'] . '</td>';
                    //Creamos un boton para poder editar los vehiculos, también cresmos una varibale *idvehiculo*
                    echo '<td><button><a href="formulario.php?idvehiculo='.$fila['referencia'].'">Editar</button></td>';
                    echo '<td><button><a href="borrar.php?idvehiculo='.$fila['referencia'].'">Borrar</button></td>';
                    echo "<td><button><a href='mostrar_modelo.php?idvehiculo=".$fila['referencia']."'>Mostrar modelos</a></button></td>";

                    echo '<tr>';
                }
            ?>
        </table>
        <input type="submit" value="Borrar vehículo">
    </form>
</body>
</html>