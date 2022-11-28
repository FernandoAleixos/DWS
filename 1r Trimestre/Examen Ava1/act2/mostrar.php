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

        if(isset($_SESSION['nombre_insertado'])){
            echo '<p>'.$_SESSION['nombre_insertado'].'</p>';
            unset($_SESSION['nombre_insertado']);
        }

    ?>
    
    <button><a href="actividad2.php">Añadir asignatura</a></button>

    <form action="actividad2.php" method="post">
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

                    echo '</tr>';
                }
            ?>
        </table>
    </form>
</body>
</html>