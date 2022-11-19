<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar el modelo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        if(!isset($_GET['idvehiculo'])) {
            header('Location: mostrar.php');
        } else {
            include_once('db.php');
            $conectar = conexion();
            
            $sql = "SELECT tipo FROM vehiculo WHERE referencia = ". $_GET['idvehiculo'];
            $resultado = mysqli_query($conectar, $sql);
            $modelo = mysqli_fetch_assoc($resultado);

            $nombre_tipo = $modelo['tipo'];
    ?>

    <h1>El tipo del modelo es <?php echo $nombre_tipo;?></h1>

    <?php
            $sql = "SELECT * FROM modelo WHERE id_tipo =". $_GET['idvehiculo'];
            $resultado = mysqli_query($conectar, $sql);

            if(mysqli_num_rows($resultado) == 0) {
                echo 'No hay modelos';
            }
        }
    ?>

    <table>
        <tr>
            <th>Marca</th>
            <th>Color</th>
        </tr>

        <?php
            while($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
            
                echo '<td>'.$fila['marca'].'</td>';
                echo '<td>'.$fila['color'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>