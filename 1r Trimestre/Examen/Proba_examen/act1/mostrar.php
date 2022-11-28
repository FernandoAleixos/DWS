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
        include_once('db.php');
        $conectar = conexion();
        $sql = "SELECT * FROM Discos";

        $result = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($result);

    ?>
    <form action="formulario.php" method="post">
        <table>
            <tr>
                <th>Referencia</th>
                <th>Nombre</th>
                <th>Cantante</th>
                <th>Fecha</th>
                <th>Estilo</th>
            </tr>

            <?php
                while ($fila = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    
                    echo '<td>'.$fila['Referencia'].'</td>';
                    echo '<td>'.$fila['Nombre'].'</td>';
                    echo '<td>'.$fila['Cantante'].'</td>';
                    echo '<td>'.$fila['Fecha'].'</td>';
                    echo '<td>'.$fila['Estilo'].'</td>';
                    
                    echo '</tr>';
                }
            ?>
        </table>
    </form>
</body>
</html>