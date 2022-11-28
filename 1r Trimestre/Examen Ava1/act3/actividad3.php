<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        session_start();
        include_once('db.php');
        
        $conectar = conexion();
        $sql = "SELECT * FROM Asignaturas";

        $resultado = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($resultado);

        if(isset($_SESSION['borrado'])){
            echo '<p>'.$_SESSION['borrado'].'</p>';
            unset($_SESSION['borrado']);
        }

        if(isset($_SESSION['no_borrado'])){
            echo '<p>'.$_SESSION['no_borrado'].'</p>';
            unset($_SESSION['no_borrado']);
        }

    ?>
    
    <button><a href="actividad2.php">Añadir asignatura</a></button>

    <form action="formualrio.php" method="post">
        <table>
            <tr>
                <th>Codigo Asignatura</th>
                <th>Nombre Asignatura</th>
                <th>Horas Impartidas</th>
            </tr>

            <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    
                    echo '<td>'.$fila['Cod_Asig'].'</td>';
                    echo '<td>'.$fila['Nombre_Asig'].'</td>';
                    echo '<td>'.$fila['Horas_Impartidas'].'</td>';
                    echo "<td><button><a href='formulario.php?idasig=".$fila['Cod_Asig']."'>Editar</a></button></td>";
                    echo "<td><button><a href='borrar.php?idasig=".$fila['Cod_Asig']."'>Borrar</a></button></td>";

                    echo '</tr>';
                }
            ?>
        </table>
    </form>
</body>
</html>