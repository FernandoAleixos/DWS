<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
            include_once('db.php');
            $conectar = conexion();

            $sql = "SELECT * FROM Aula WHERE Id_centro =". $_GET['idaula'];
            $resultado = mysqli_query($conectar, $sql);

            if(mysqli_num_rows($resultado) == 0) {
                echo 'No hay modelos';
            }
    ?>

    <table>
        <tr>
            <th>Centro</th>
            <th>Numero Aula</th>
            <th>Metros</th>
        </tr>

        <?php
            while($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
            
                echo '<td>'.$fila['Id_centro'].'</td>';
                echo '<td>'.$fila['Numero_Aula'].'</td>';
                echo '<td>'.$fila['Metros'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>