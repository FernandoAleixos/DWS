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
        include_once('db.php');
        $conectar = conexion();

        if(isset($_SESSION['nombre_insertado'])) {
            echo '<p>'.$_SESSION['nombre_insertado'].'</p>';
            unset($_SESSION['nombre_insertado']);
        }

        if (isset($_SESSION['prenda_borrada'])) {
            echo '<p>'.$_SESSION['prenda_borrada'].'</p>';
            unset($_SESSION['prenda_borrada']);
        }

        if (isset($_SESSION['prenda_no_borrada'])) {
            echo '<p>'.$_SESSION['prenda_no_borrada'].'</p>';
            unset($_SESSION['prenda_no_borrada']);
        }
        
        if (isset($_SESSION['prenda_insertada'])) {
            echo '<p>'.$_SESSION['prenda_insertada'].'</p>';
            unset($_SESSION['prenda_insertada']);
        }

        $consulta = 'SELECT * FROM Ropa';
        //La función mysqli_query lanza una consulta a la base de datos para conectarse
        $result = mysqli_query($conectar, $consulta);
        //Recoje la longitud de la fila de la tabla
        $filas = mysqli_num_rows($result);
        
        if($filas == 0) {
            echo 'No hay ningún registro';
        }

    ?>
    <button><a href="Formulario.php">Añadir ropa</a></button>
    <button><a href="Prenda.php">Añadir prenda</a></button>
    <form action="Borrar.php" method="post">

        <table>
            <tr>
                <th></th>
                <th>Ref</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Talla</th>
                <th>Preu</th>
            </tr>

            <?php
                //La función mysqli_fetch_assoc muestra por pantalla los datos de la tabla
                while ($fila = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    
                    echo "<td><input type='checkbox' name='select_ropa[]' value='".$fila['Ref']."'/></td>";
                    echo '<td>'.$fila['Ref'].'</td>';
                    echo '<td>'.$fila['Marca'].'</td>';
                    echo '<td>'.$fila['Color'].'</td>';
                    echo '<td>'.$fila['Talla'].'</td>';
                    echo '<td>'.$fila['Preu'].'</td>';
                    echo "<td><button><a href='Formulario.php?idref=".$fila['Ref']."'>Editar</a></button></td>";
                    echo "<td><button><a href='Borrar.php?idref=".$fila['Ref']."'>Borrar</a></button></td>";
                    echo "<td><button><a href='Mostrar_prenda.php?idref=".$fila['Ref']."'>Mostrar prendas</a></button></td>";
                    
                    echo '</tr>';
                }
            ?>
        </table>
        <input type="submit" value="Borrar prenda">
    </form>
</body>
</html>