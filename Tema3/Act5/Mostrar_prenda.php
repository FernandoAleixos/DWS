<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mostrar prenda</title>
</head>
<body>
    <?php
        if(!isset($_GET['idref'])){
            header('Location: Mostrar.php');
        } else {
            include_once('db.php');
            $conectar = conexion();
            $id = $_GET['idref'];

            $sql = "SELECT Marca FROM Ropa WHERE Ref=" . $id;
            $resultado = mysqli_query($conectar, $sql);
            $prenda = mysqli_fetch_assoc($resultado);

            $nombre_marca = $prenda['Marca'];
            
    ?>

    <h1>El nombre de la marca es <?php echo $nombre_marca;?></h1>

    <?php
            $sql = "SELECT * FROM Prenda WHERE id_Marca=" . $id;
            $resultado = mysqli_query($conectar, $sql);
            

            if(mysqli_num_rows($resultado) == 0) {
                echo 'No hay prendas';
            }
        }
    ?>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Tipo</th>
            <th>Fecha Compra</th>
        </tr>

        <?php
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
            
                echo '<td>'.$fila['Codigo'].'</td>';
                echo '<td>'.$fila['Tipo'].'</td>';
                echo '<td>'.$fila['Fecha_compra'].'</td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>