<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tabla</title>
</head>
<body>
    <?php
        session_start();
        include_once('db.php');
        $conectar = conexion();
        $sql = "SELECT * FROM Discos";

        $result = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($result);

        if(isset($_SESSION['insertado'])){
            echo '<p>'.$_SESSION['insertado'].'</p>';
            unset($_SESSION['insertado']);
        }

        if (isset($_SESSION['disco_borrado'])) {
            echo '<p>'.$_SESSION['disco_borrado'].'</p>';
            unset($_SESSION['disco_borrado']);
        }

        if (isset($_SESSION['disco_no_borrado'])) {
            echo '<p>'.$_SESSION['disco_no_borrado'].'</p>';
            unset($_SESSION['disco_no_borrado']);
        }

    ?>
    <button><a href="formulario.php">Añadir disco</a></button>
    <form action="borrar.php" method="post">
        
        <table>
            <tr>
                <th></th>
                <th>Referencia</th>
                <th>Nombre</th>
                <th>Cantante</th>
                <th>Fecha</th>
                <th>Estilo</th>
            </tr>

            <?php
                while ($fila = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    
                    echo "<td><input type='checkbox' name='select_disco[]' value='".$fila['Referencia']."'/></td>";
                    echo '<td>'.$fila['Referencia'].'</td>';
                    echo '<td>'.$fila['Nombre'].'</td>';
                    echo '<td>'.$fila['Cantante'].'</td>';
                    echo '<td>'.$fila['Fecha'].'</td>';
                    echo '<td>'.$fila['Estilo'].'</td>';
                    echo "<td><button><a href='formulario.php?idref=".$fila['Referencia']."'>Editar</a></button></td>";
                    echo "<td><button><a href='borrar.php?idref=".$fila['Referencia']."'>Borrar</a></button></td>";

                    echo '</tr>';
                }
            ?>
        </table>
        <input type="submit" value="Borrar disco">
    </form>
</body>
</html>